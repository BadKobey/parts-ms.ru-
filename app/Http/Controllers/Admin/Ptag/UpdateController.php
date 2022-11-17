<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ptag\UpdateRequest;
use App\Models\Ptag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Ptag $ptag)
    {
        $data = $request->validated();
        $ptag->update($data);
        return view('admin.ptags.show', compact('ptag'));
    }
}
