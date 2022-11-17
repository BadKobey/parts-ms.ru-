<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pcategory\UpdateRequest;
use App\Models\Pcategory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Pcategory $pcategory)
    {
        $data = $request->validated();
        $pcategory->update($data);
        return view('admin.pcategories.show', compact('pcategory'));
    }
}
