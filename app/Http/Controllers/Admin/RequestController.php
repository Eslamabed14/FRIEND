<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request;
use Carbon\Carbon;

class RequestController extends Controller
{
    public function index()
    {
        Carbon::setlocale('ar');
        $requests = Request::all();
        return view('admin.requests.index',compact('requests'));
    }

    public function destroy($id)
    {
        $request = Request::find($id);
        $request->delete();
        return redirect(route('admin.requests'))->with('success' , 'تم حذف الطلب بنجاح ');
    }
}
