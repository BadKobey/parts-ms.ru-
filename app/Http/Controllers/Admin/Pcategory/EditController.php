<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;
use App\Models\Pcategory;

class EditController extends Controller
{
    public function __invoke(Pcategory $pcategory)
    {
        return view('admin.pcategories.edit', compact('pcategory'));
    }
}
