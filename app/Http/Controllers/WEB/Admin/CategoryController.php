<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Models\Produk\Category;
use App\Models\Kategori\GroupCategory;
use App\Models\Kategori\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    protected $kategori;
    protected $subKategori;
    protected $groupKategori;

    public function __construct(Category $kategori, SubCategory $subKategori, GroupCategory $groupKategori)
    {
        $this->kategori = $kategori;
        $this->subKategori = $subKategori;
        $this->groupKategori = $groupKategori;
    }

    public function index()
    {
        $categoryId  = $this->kategori::pluck('id')->toArray();
        $data = [
            'title' => 'Kelola Kategori',
            'kategori' => $this->kategori::all()->sortBy('name'),
            'breadcrumb' => 'Master Data',
            'breadcrumb_item' => 'Kelola Kategori',
            'button_create' => 'Tambah Data Kategori',
            'subcategories' =>  $this->subKategori::where('categoryId', $categoryId)->get(),
        ];
        return view('admin.pages.kelola.kategori.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori',
            'breadcrumb' => 'Master Data',
            'breadcrumb_item' => 'Kelola Kategori',
            'breadcrumb_item_active' => 'Tambah Kategori',
            'groupKategori' => $this->groupKategori::all(),
        ];
        return view('admin.pages.kelola.kategori.create', $data);
    }

    public function store(CreateCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $newImageName = 'thumbnail_' . (count(File::files(public_path('category_thumbnail'))) + 1) . '.' . $imageExtension;
            $imagePath = 'category_thumbnail/' . $newImageName;

            $request->file('image')->move(public_path('category_thumbnail'), $newImageName);

            $category = $this->kategori->create([
                'name' => $request->name,
                'nameSlug' => Str::slug($request->name),
                'description' => $request->description,
                'group' => $request->group_kategori,
                'groupSlug' => Str::slug($request->group_kategori),
                'imageHomeThumbnailUrl' => $imagePath,
                'groupThumbnailUrl' => $imagePath,
            ]);

            $this->subKategori->create([
                'categoryId' => $category->id,
                'slug' => Str::slug($request->name),
                'name' => $request->name,
                'thumbnailUrl' => $imagePath,
                'description' => $request->description,
            ]);

            DB::commit();

            session()->flash('success', 'Data Kategori Berhasil Ditambahkan!');
            return redirect('/admin/kelola/kategori');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Data Kategori Gagal Ditambahkan!');
            return back()->with('error', 'Data Kategori Gagal Ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Kategori',
            'breadcrumb' => 'Master Data',
            'breadcrumb_item' => 'Kelola Kategori',
            'breadcrumb_item_active' => 'Edit Kategori',
            'groupKategori' => $this->groupKategori::all(),
            'category' => $this->kategori::find($id),
        ];
        return view('admin.pages.kelola.kategori.update', $data);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $category = $this->kategori::find($id);

            if ($request->hasFile('image')) {
                $imageExtension = $request->file('image')->getClientOriginalExtension();
                $newImageName = 'thumbnail_' . (count(File::files(public_path('category_thumbnail'))) + 1) . '.' . $imageExtension;
                $imagePath = 'category_thumbnail/' . $newImageName;

                $request->file('image')->move(public_path('category_thumbnail'), $newImageName);

                $category->update([
                    'name' => $request->name,
                    'nameSlug' => Str::slug($request->name),
                    'description' => $request->description,
                    'group' => $request->group_kategori,
                    'groupSlug' => Str::slug($request->group_kategori),
                    'imageHomeThumbnailUrl' => $imagePath,
                    'groupThumbnailUrl' => $imagePath,
                ]);

                $this->subKategori::where('categoryId', $id)->update([
                    'slug' => Str::slug($request->name),
                    'name' => $request->name,
                    'thumbnailUrl' => $imagePath,
                    'description' => $request->description,
                ]);
            } else {
                $category->update([
                    'name' => $request->name,
                    'nameSlug' => Str::slug($request->name),
                    'description' => $request->description,
                    'group' => $request->group_kategori,
                    'groupSlug' => Str::slug($request->group_kategori),
                ]);

                $this->subKategori::where('categoryId', $id)->update([
                    'slug' => Str::slug($request->name),
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
            }

            DB::commit();

            Alert::success('success', 'Data Kategori Berhasil Diubah!');
            session()->flash('success', 'Data Kategori Berhasil Diubah!');
            return redirect('/admin/kelola/kategori');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', 'Data Kategori Gagal Diubah!' . $e->getMessage());
            session()->flash('error', 'Data Kategori Gagal Diubah!');
            return back()->with('error', 'Data Kategori Gagal Diubah!');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $category = $this->kategori::find($id);
            $subCategory = $this->subKategori::where('categoryId', $id)->first();

            File::delete(public_path($category->imageHomeThumbnailUrl));
            File::delete(public_path($category->groupThumbnailUrl));
            File::delete(public_path($subCategory->thumbnailUrl));

            $category->delete();
            $subCategory->delete();

            DB::commit();

            Alert::success('success', 'Data Kategori Berhasil Dihapus!');
            session()->flash('success', 'Data Kategori Berhasil Dihapus!');
            return redirect('/admin/kelola/kategori');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', 'Data Kategori Gagal Dihapus!' . $e->getMessage());
            session()->flash('error', 'Data Kategori Gagal Dihapus!');
            return back()->with('error', 'Data Kategori Gagal Dihapus!');
        }
    }
}
