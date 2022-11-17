<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pcategory\StoreRequest;
use App\Models\Pcategory;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Pcategory::firstOrCreate($data);
        return redirect()->route('admin.pcategory.index');
    }
}
