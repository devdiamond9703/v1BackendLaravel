<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $object = DB::table('products AS p')
            ->select(
                'pc.id AS productCatId', 
                'pc.name AS productCatName',
                'p.id AS productId',
                'p.name AS productName',
                'p.description AS productDescription'
            )
            ->leftJoin('product_categories AS pc', 'p.product_category_id', '=', 'pc.id')
        ->get();
        return response()->json($object);
    }

    public function store(Request $request)
    {
        if($request->id) {
            $model = Product::find($request->id);
        } else {
            $model = new Product();
        }
        $model->product_category_id = $request->product_category_id; 
        $model->name = $request->name; 
        $model->description = $request->description; 
        if($model->save()) {
            return response()->json([
                'status' => true,
                'data' => $model
            ]);
        }
        
    }

    public function variantsByProduct(Request $request) {
        $object = DB::table('product_variants AS pv')
            ->select(
                'pv.id', 
                'pv.name'
            )
            ->where('pv.product_id', $request->id)
            ->get();
        return response()->json($object);
    }

}
