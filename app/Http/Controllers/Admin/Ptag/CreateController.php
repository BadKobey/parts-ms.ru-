<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.ptags.create');
    }
}
