<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;
use App\Models\Ptag;

class EditController extends Controller
{
    public function __invoke(Ptag $ptag)
    {
        return view('admin.ptags.edit', compact('ptag'));
    }
}
