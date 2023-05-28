<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        Carbon::setLocale('ar');
        $doctors = User::where('userType', 2)->get();
        return view('admin.doctors.index' , compact('doctors'));
    }

    public function accept($id)
    {
        $doctor = User::find($id);
        $doctor -> status = 'accepted';
        $doctor -> save();
        return redirect(route('admin.doctors'))->with('success','تم قبول الطبيب بنجاح');
    }

    public function reject($id)
    {
        $doctor = User::find($id);
        $doctor -> status = 'rejected';
        $doctor -> save();
        return redirect(route('admin.doctors'))->with('success' , 'تم رفض الطبيب بنجاح');
    }

    public function destroy($id)
    {
        $doctor = User::find($id);
        $doctor->delete();
        return redirect(route('admin.doctors'))->with('success' , 'تم حذف الطبيب بنجاح');
    }
}
