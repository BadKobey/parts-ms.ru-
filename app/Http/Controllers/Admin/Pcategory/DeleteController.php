<?php

namespace App\Http\Controllers\Admin\Pcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pcategory\UpdateRequest;
use App\Models\Pcategory;

class DeleteController extends Controller
{
    public function __invoke(Pcategory $pcategory)
    {
        $pcategory->delete();
        return redirect()->route('admin.pcategory.index');
    }
}
