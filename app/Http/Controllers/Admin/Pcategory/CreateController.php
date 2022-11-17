<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.pcategories.create');
    }
}
