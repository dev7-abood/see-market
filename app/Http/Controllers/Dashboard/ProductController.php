<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProductImage;
use App\Models\Product;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.index');
    }

    public function create()
    {
        return view('dashboard.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_url' => 'required|url',
            'partner_name' => 'required',
            'product_activity' => 'required|in:1,0',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'qr_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sub_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('qr_image'))
        {
            $qrImage = time().'-'.$request->file('qr_image')->getClientOriginalName();
            $request->file('qr_image')->move(public_path('/assets/images/qrs'), $qrImage);
            $qrImagePath = '/images/qrs/'.$qrImage;
        }
        else{
            $qrImagePath = null;
        }

        $mainImage = time().'-'.$request->file('main_image')->getClientOriginalName();
        $request->file('main_image')->move(public_path('/assets/images/products'), $mainImage);

        $data = array_merge(
            $request->except(['qr_image', 'sub_images', 'main_image']),
            ['main_image' => '/assets/images/products/'.$mainImage, 'qr_image' => $qrImagePath, 'slug' => Str::slug($request->product_name)]
        );

        $product = Product::create($data);

        if ($request->hasFile('sub_images'))
        {
            foreach ($request->file('sub_images') as $image)
            {
                $fileImages = time().'-'.$image->getClientOriginalName();
                $image->move(public_path('assets/images/products'), $fileImages);
                ProductImage::create(['image' => '/assets/images/products/'.$fileImages])
                    ->products()->associate($product)->save();

            }
        }
        toast('success', 'success');
        return redirect()->back();

    }

}
