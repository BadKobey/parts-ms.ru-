<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $ptagIds = $data['ptag_ids'];
        unset( $data['ptag_ids']);

        $product->update($data);
        $product->ptags()->sync($ptagIds);

        return view('admin.products.show', compact('product'));
    }
}
