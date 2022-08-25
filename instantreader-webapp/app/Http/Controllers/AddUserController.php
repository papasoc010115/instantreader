<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AddUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        if (Auth::user()->getAdminType() === 'superuser'){
            return view('marketing-admin.add-user');
        }

        return view('marketing-admin.add-user')->withErrors(['msg' => "You don't have the rights to add a user."]);;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (Auth::user()->getAdminType() === 'superuser'){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'admin_type' => 'editor'
            ]);
    
            event(new Registered($user));
            
            app('App\Http\Controllers\LogController')->store("Added a new user");
            return redirect()->route('marketing-admin.user.add');
        } else {
            return redirect()->route('marketing-admin.user.add')->withErrors(['msg' => "You don't have the rights to add a user."]);
        }
    }
}
