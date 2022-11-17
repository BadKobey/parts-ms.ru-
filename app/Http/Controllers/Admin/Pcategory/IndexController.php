<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;
use App\Models\Pcategory;

class IndexController extends Controller
{
    public function __invoke()
    {
        $pcategories = Pcategory::all();
        return view('admin.pcategories.index', compact('pcategories'));
    }
}
