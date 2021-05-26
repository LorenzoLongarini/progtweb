<?php

namespace App\Http\Controllers\Auth;
 
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirectTo();
        

        }
        else return redirect()->back()->withErrors([
            'approve' => 'Wrong password or this account not approved yet.',
        ]);
    
    }



    protected function redirectTo() {
        $role = auth()->user()->role;
        switch ($role) {
            case 'admin': return '/admin';
                break;
            case 'cliente': return '/client';
                break;
            case 'organizzatore': return '/organizzatore';
                break;
            default: return '/';
        };
    }
    /**
     * Override:: Login con 'username' al posto di 'email'.
     *
     */
    
    public function username() {
        return 'username';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    
}
