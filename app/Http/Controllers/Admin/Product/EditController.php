<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Pcategory;
use App\Models\Product;
use App\Models\Ptag;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $pcategories = Pcategory::all();
        $ptags = Ptag::all();
        return view('admin.products.edit', compact('product', 'pcategories', 'ptags'));
    }
}
