<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;
use App\Models\Ptag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $ptags= Ptag::all();
        return view('admin.ptags.index', compact('ptags'));
    }
}
