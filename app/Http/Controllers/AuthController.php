<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            return Redirect()->intended('dashboard');
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required|string',
                'g-recaptcha-response' => 'required'
            ],
            [
            'g-recaptcha-response.required' => 'Kode Captcha wajib diisi.'
            ]
        );

        $kredensil = $request->only('email','password');
        $remember = $request->has('remember');

            if (Auth::attempt($kredensil, $remember)) {
                $user = Auth::user();
                User::where('email',$request['email'])->update(['last_login'=>now(),'last_ip'=>$request->ip()]);
                return Redirect()->intended('adm/dashboard');
            }

        return Redirect::back()
                                ->withInput()
                                ->withErrors(['login_gagal' => 'Username atau Password Salah.']);
    }

    

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}