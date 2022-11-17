<?php

namespace App\Http\Controllers\Admin\Ptag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ptag\StoreRequest;
use App\Models\Ptag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Ptag::firstOrCreate($data);
        return redirect()->route('admin.ptag.index');
    }
}
