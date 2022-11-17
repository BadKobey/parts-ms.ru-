<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;
use App\Models\Pcategory;

class ShowController extends Controller
{
    public function __invoke(Pcategory $pcategory)
    {
        return view('admin.pcategories.show', compact('pcategory'));
    }
}
