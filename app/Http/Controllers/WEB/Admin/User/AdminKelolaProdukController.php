<?php

namespace App\Http\Controllers\WEB\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Produk\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminKelolaProdukController extends Controller
{
    public function edit($id)
    {
        $produk = Product::find($id);

        $data =
            [
                'category' => Category::all(),
                'produk' => $produk
            ];
        return view('admin.pages.kelola.produk.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $produk = Product::find($id);

        $produk->name = $request->name;
        $produk->category_id = $request->kategori;
        $produk->price = $request->price;
        $produk->quantity = $request->quantity;
        $produk->description = $request->description;

        if ($request->file('image')) {
            if (File::exists(public_path("image_produk/$produk->image"))) {
                File::delete("image_produk/$produk->image");
            }

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();

            $produk->image = $imageName;
            $image->move(public_path('image_produk'), $imageName);
        }

        $produk->save();

        return redirect()->route('admin.produk.edit', $id)->with('success', 'Data produk berhasil diubah!');

    }
}
