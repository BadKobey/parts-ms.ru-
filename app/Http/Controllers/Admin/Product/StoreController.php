<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            $ptagIds = $data['ptag_ids'];
            unset( $data['ptag_ids']);


            $product = Product::firstOrCreate($data);
            $product->ptags()->attach($ptagIds);
        } catch (\Exception $exception){
            abort(404);
        }
        return redirect()->route('admin.product.index');
    }
}
