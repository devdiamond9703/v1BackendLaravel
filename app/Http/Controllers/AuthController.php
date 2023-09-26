<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
         
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.']
            ]);
        }
       
        $role = DB::table('users AS u')
            ->select(
                'r.id',
                'r.name'
            )
            ->leftJoin('model_has_roles AS mhr', 'u.id', '=', 'mhr.model_id')
            ->leftJoin('roles AS r', 'mhr.role_id', '=', 'r.id')
            ->where('u.id', $user->id)
            ->get();

        $permission = DB::table('users AS u')
            ->select(
                'p.id',
                'p.name'
            )
            ->leftJoin('model_has_roles AS mhr', 'u.id', '=', 'mhr.model_id')
            ->leftJoin('role_has_permissions AS rhp', 'mhr.role_id', '=', 'rhp.role_id')
            ->leftJoin('permissions AS p', 'rhp.permission_id', '=', 'p.id')
            ->where('u.id', $user->id)
            ->get();
        
        return response()->json([
            'info' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'token' => $user->createToken($request->email)->plainTextToken
            ],
            'roles' => $role,
            'permissions' => $permission
        ]);
    }
}
