<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategoryAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    
    public function index()
    {
        $object = DB::table('product_categories AS pc')
                ->select('pc.id', 'pc.name')
                ->get();
        return response()->json($object);
    }

    public function store(Request $request)
    {
        if($request->id) {
            $model = ProductCategory::find($request->id);
        } else {
            $model = new ProductCategory();
        }
        $model->name = $request->name;
        if($model->save()) {
            return response()->json([
                'status' => true,
                'data' => $model,
            ]);
        }
    }

    public function attrByCategory(Request $request) {
        $object = DB::table('product_category_attributes AS pca')
                ->select(
                    'pca.id AS categoryAttrId',
                    'a.id AS attrId',
                    'a.name AS attrName'
                )
                ->leftJoin('attributes AS a', 'pca.attribute_id', '=', 'a.id')
                ->where('pca.product_category_id', $request->id)
                ->get();
        // $object = ProductCategoryAttribute::where('product_category_id', $request->id)->get();
        return response()->json($object);
    }

    public function attrAndValuesByCategory(Request $request) {
        $object = DB::table('product_category_attributes AS pca')
                ->select(
                    'pca.id AS categoryAttrId',
                    'a.id AS attrId',
                    'a.name AS attrName'
                )
                ->leftJoin('attributes AS a', 'pca.attribute_id', '=', 'a.id')
                ->where('pca.product_category_id', $request->id)
                ->get();
        return response()->json($object);
    }

    public function storeAttrByCategory(Request $request)
    {
        if($request->id) {
            $model = ProductCategoryAttribute::find($request->id);
        } else {
            $model = new ProductCategoryAttribute();
        }
        $model->product_category_id = $request->product_category_id;
        $model->attribute_id = $request->attribute_id;
        $model->sort = $request->sort;
        $model->status = $request->status;

        if($model->save()) {
            return response()->json([
                'status' => true
            ]);
        } 
    }
    

}
