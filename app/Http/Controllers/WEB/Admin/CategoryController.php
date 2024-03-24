<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori\Category;
use App\Models\Kategori\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $kategori;
    protected $subKategori;

    public function __construct(Category $kategori, SubCategory $subKategori)
    {
        $this->kategori = $kategori;
        $this->subKategori = $subKategori;
    }

    public function index()
    {
        $categoryId  = $this->kategori::pluck('id');
        $data = [
            'title' => 'Kelola Kategori',
            'kategori' => $this->kategori::all(),
            'breadcrumb' => 'Master Data',
            'breadcrumb_item' => 'Kelola Kategori',
            'subcategories' =>  $this->subKategori::where('CategoryId', $categoryId)->get(),
        ];
        return view('admin.pages.kelola.kategori.index', $data);
    }
}
