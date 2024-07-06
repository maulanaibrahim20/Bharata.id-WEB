<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProdukRequest;
use App\Models\Product\Product;
use App\Models\Produk\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MemberProductController extends Controller
{
    protected $product;
    protected $category;
    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function index()
    {
        $data =
            [
                'products' => $this->product->all(),
            ];

        return view('member.pages.kelola.produk.index', $data);
    }

    public function create()
    {
        $data =
            [
                'category' => $this->category::all(),
            ];
        return view('member.pages.kelola.produk.create', $data);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image_produk'), $imageName);

            $this->product->create([
                'category_id' => $request->kategori,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'image' => $imageName,
                'active' => true,
            ]);

            DB::commit();

            Alert::success('success', 'Data Berhasil Ditambahkan!');
            return redirect('/member/kelola/produk')->with('success', 'Succes Data Berhasil Ditambahkan!');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', 'Error Data Gagal Ditambahkan!' . $e->getMessage());
            return back()->with('error', 'Error Data Gagal Ditambahkan!');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $produk = $this->product->findOrFail($id);

            if ($produk->image) {
                $imagePath = public_path('image_produk') . '/' . $produk->image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $produk->delete();

            DB::commit();

            Alert::success('success', 'Data Berhasil Dihapus!');
            return redirect('/member/kelola/produk')->with('success', 'Succes Data Berhasil Dihapus!');
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('error', 'Error Data Gagal Dihapus!' . $e->getMessage());
            return back()->with('error', 'Error Data Gagal Dihapus!');
        }
    }
}
