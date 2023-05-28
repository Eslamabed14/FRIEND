<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index() 
    {
        Carbon::setLocale('ar');
        $cities = City::all();
        return view('admin.cities.index' , compact('cities'));
    }

    public function create()
    {
        return view('admin.cities.add');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        $data = $request->all();
        City::create($data);
        return redirect(route('admin.cities'))->with('success' , 'تمت اضافة المحافظة بنجاح');
    }

    public function edit($id) 
    {
        $city = City::find($id);
        return view('admin.cities.edit' , compact('city'));
    }

    public function show()
    {
        //
    }

    public function update(Request $request , $id)
    {
        $city = City::find($id);
        $request->validate(['name' => 'required']);
        $data = $request->all();
        $city->update($data);
        return redirect()->back()->with('success','تم تعديل المحافظة بنجاح');
    }

    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect(route('admin.cities'))->with('success', ' تم حذف المحافظة بنجاح');
    }
}
