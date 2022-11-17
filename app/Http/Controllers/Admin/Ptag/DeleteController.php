<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ptag\UpdateRequest;
use App\Models\Ptag;

class DeleteController extends Controller
{
    public function __invoke(Ptag $ptag)
    {
        $ptag->delete();
        return redirect()->route('admin.ptag.index');
    }
}
