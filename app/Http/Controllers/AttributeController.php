<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Http\Resources\AttributeResource;
use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        return response()->json(Attribute::all());
    }

    public function store(Request $request)
    {
        if($request->id) {
            $model = Attribute::find($request->id);
        } else {
            $model = new Attribute();
        }
        $model->name = $request->name;
        $model->type = $request->type;
        if($model->save()) {
            return response()->json([
                'status' => 200,
                'data' => $model
            ]);
        }
    }

    public function valuesByAttr(Request $request)
    {
        $object = AttributeValue::where('attribute_id', $request->id)->get();
        return response()->json($object);
    }

    public function storeValueByAttr(Request $request)
    {
        $model = new AttributeValue();
        $model->attribute_id = $request->attribute_id;
        $model->value = $request->value;
        if($model->save()) {
            return response()->json([
                'status' => 200,
                'message' => 'Saved successfully',
                'data' => $model
            ]);
        }
    }
}
