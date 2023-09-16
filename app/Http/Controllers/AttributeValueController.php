<?php

namespace App\Http\Controllers;

use App\Models\AttributeValue;
use App\Http\Requests\StoreAttributeValueRequest;
use App\Http\Requests\UpdateAttributeValueRequest;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    public function valuesByAttr(Request $request)
    {

    }

    public function store(Request $request)
    {
        return response()->json([
            'status' => true,
            'message' => 'Saved Successfully',
            'data' => $request
        ]);
    }

    public function destroy(AttributeValue $attributeValue)
    {
        //
    }
}
