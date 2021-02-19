<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function passwordUpdate(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        if ($validator->fails()) {
            return redirect('/admin#change_password')
                ->withErrors($validator)
                ->withInput();
        }
        
        $user = Auth::user();

        if (Hash::check($input['old_password'], $user->password)) {
            if ($input['old_password'] != $input['password']) {
                $user->password = Hash::make($input['password']);
                $user->save();

                return redirect('/admin')->with('success', 'Your password has been changed.');
            } else {
                return redirect('/admin#change_password')->with('error', 'The password you entered is the same! Please enter a different password..');
            }
        } else {
            return redirect('/admin#change_password')->with('error', 'The password you entered did not match your current password! Please try again..');
        }
    }
}
