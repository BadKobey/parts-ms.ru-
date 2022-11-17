<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Pcategory;
use App\Models\Ptag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $pcategories = Pcategory::all();
        $ptags = Ptag::all();

        return view('admin.products.create', compact('pcategories', 'ptags'));
    }
}
