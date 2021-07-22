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

    protected function redirectTo() {
        $role = auth()->user()->role;
        switch ($role) {
            case 'admin': return '/user-admin';
                break;
            case 'staff': return '/user-staff';
                break;
            case 'tecnico': return '/user-tecnico';
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
