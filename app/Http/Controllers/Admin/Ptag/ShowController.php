<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;
use App\Models\Ptag;

class ShowController extends Controller
{
    public function __invoke(Ptag $ptag)
    {
        return view('admin.ptags.show', compact('ptag'));
    }
}
