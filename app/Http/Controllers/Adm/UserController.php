<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

use App\Models\User;
use App\Models\Universitas;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

use App\Mail\UserCredentialsMail;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function __construct()
    {
        $this->pagetitle = "User";
        $this->level = array('superadmin' => 'Super Administrator',' pt'=> 'Admin Kampus');
    }
    public function index()
    {
        $users = User::get();
        $pagetitle = $this->pagetitle;
        return view('Admin.user.index', compact('users','pagetitle'));
    }

    public function create()
    {
        $pagetitle = $this->pagetitle;
        $level = $this->level;
        $universitas = Universitas::orderby('nama','asc')->get();
        return view('Admin.user.create',compact('level','pagetitle','universitas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'password' => [
              'required',
              'confirmed', // Memastikan password dan konfirmasi password cocok
                Password::min(8)
                 ->letters()
                 ->numbers(),
          ],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->universitas_id = $request->universitas;
        $user->password = bcrypt($request->password);
        $user->save();

        //kirim email
        Mail::to($user->email)->send(new UserCredentialsMail($user->email, $request->password));


        return redirect()->route('user.index')
            ->with('success', 'Berhasil menambah data');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagetitle = $this->pagetitle;
        $roles = Role::orderby('id','desc')->get();
        $useredit = User::where('id',$id)->firstorFail();
        return view('Admin.user.edit', compact('useredit','roles','pagetitle'));
    }

    public function update(Request $request, User $user)
    {
        $validator = [
            'name' => 'required',
            'username' => 'required|alpha_dash|unique:users,username,'.$user->id.',id',
            'email' => 'required|unique:users,email,'.$user->id.',id',
        ];

        if (trim($request->password) != "") {
            $validator['password'] = 'required|confirmed';
        }

        $request->validate($validator);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if (trim($request->password) != "") {
            $user->password = bcrypt($request->password);
        }
        
        $user->role()->associate($request->role);
        $user->update();

        return redirect()->route('user.index')
            ->with('success', 'Berhasil mengubah data');
    }

   
    public function destroy(User $user)
    {
       // die(print_r($user));
        $user->delete();
        return redirect()->route('user.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
