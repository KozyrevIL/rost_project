<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

	
    public function postSignin(Request $request)
    {
        if (! Auth::attempt($request->only('email', 'password'), $request->has('remember')))
		{
			return redirect()->back()->with('message', 'Неправильный логин или пароль');     
		}
		else {
            return redirect()->route('admin');
        }
    }

    public function postReg(Request $request)
    {
        $user = User::create([
            'email'    => $request->input('email'),
            'name'     => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);

        Auth::loginUsingId($user->id);

        return redirect()
                ->route('admin')
                ->with('success', 'Вы успешно зарегистрировались');
    }    
    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}