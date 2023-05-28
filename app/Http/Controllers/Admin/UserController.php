<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        Carbon::setLocale('ar');
        $users = User::where('userType', 0 )->get();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string' , 'max:50' ],
            'email' => ['required', 'string' , 'email', 'unique:users'],
            'password' => ['required' , 'string' , 'min:8' , 'confirmed'],
            'number' => ['required' , 'numeric'],
        ]);
        $data = $request->all();
        User::create($data);
        return redirect(route('admin.users'))->with('success','تم اضافة العضو بنجاح');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user =User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request , $id)
    {
        $user =User::find($id);
        $request->validate([
            'name' => ['required', 'string' , 'max:50' ],
            'email' => ['required', 'string' , 'email', 'unique:users'],
            'password' => ['required' , 'string' , 'min:8' , 'confirmed'],
            'number' => ['required' , 'numeric'],
        ]);
        $request['password']=Hash::make($request['password']);
        $data = $request->all();
        $user->update($data);
        return redirect()->back()->with('success','تم تعديل العضو بنجاح');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.users'))->with('success', 'تم حذف العضو بنجاح');
    }


    public function Adminindex()
    {
        Carbon::setLocale('ar');
        $users = User::where('userType', 1 )->get();
        return view('admin.users.admin',compact('users'));
    }


    public function Admincreate()
    {
        return view('admin.users.addAdmin');
    }

    public function Adminstore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string' , 'max:50' ],
            'email' => ['required', 'string' , 'email', 'unique:users'],
            'password' => ['required' , 'string' , 'min:8' , 'confirmed'],
            'number' => ['required' , 'numeric'],
        ]);
       $request['password']=Hash::make($request['password']);
        $data = $request->all();
        $data['userType'] = 1 ;
        User::create($data);
        return redirect(route('admin.admins'))->with('success','تم اضافة المسؤول بنجاح');
    }

    public function Adminshow($id)
    {
        //
    }

    public function Adminedit($id)
    {
        $user =User::find($id);
        return view('admin.users.editAdmin', compact('user'));
    }

    public function Adminupdate(Request $request , $id)
    {
        $user =User::find($id);
        $request->validate([
            'name' => ['required', 'string' , 'max:50' ],
            'email' => ['required', 'string' , 'email', 'unique:users'],
            'password' => ['required' , 'string' , 'min:8' , 'confirmed'],
            'number' => ['required' , 'numeric'],
        ]);
        $request['password']=Hash::make($request['password']);
        $data = $request->all();
        $user->update($data);
        return redirect()->back()->with('success','تم تعديل المسؤول بنجاح');
    }

    public function Admindestroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.admins'))->with('success', 'تم حذف المسؤول بنجاح');
    }
}

