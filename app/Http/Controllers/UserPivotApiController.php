<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Permission;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class UserPivotApiController extends Controller
{
    public function index() {
    	$users = User::with('roles')->get();
		$roles = Role::all();
		return compact('users', 'roles');
    }

	public function assignRole(Request $request) {
		$user_role = \DB::table('role_user')
				->insert($request->all());
		if($user_role) {
			return response()->json([
				'user_role' => 'Saving Success'
				]);
		} else {
			return response()->json([
				'user_role' => 'Error on saving!!'
				]);
		}
    }
}
