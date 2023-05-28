<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        Carbon::setLocale('ar');
        $emails = Email::all();
        return view('admin.emails.index',compact('emails'));
    }

    public function destroy($id)
    {
        $email = Email::find($id);
        $email-> delete();
        return redirect(route('admin.emails'))->with('success','تم حذف الايميل بنجاح ');
    }
}
