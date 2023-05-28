<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function index() {
        Carbon::setLocale('ar');
        $partners = Partner::all();
        return view('admin.partners.index',compact('partners'));
    }

    public function create()
    {
        $cities = City::all();
        return view('admin.partners.add' ,compact('cities'));
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'image' => 'required',
            'discount' => 'required|numeric',
            'city_id' => 'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'admin/images/partners/' . date('Y-m-d');
            $name = $path . time(). ' - '. $file->getClientOriginalName();
            $file->move($path,$name);
            $data['image'] = $name;
        }
        Partner::create($data);
        return redirect(route('admin.partiners'))->with('success','تمت اضافة الشريك بنجاح');
    }

    public function show() {
        //
    }

    public function edit($id){
        $partner = Partner::find($id);
        $cities = City::all();
        return view('admin.partners.edit',compact('partner' , 'cities'));
    }

    public function update(Request $request, $id) 
    {
        $partner = Partner::find($id);  
        $request -> validate([
            'name' => 'required',
            'discount' => 'required|numeric',
            'city_id' => 'required',
        ]);  
        $data = $request->except(['old-image']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'admin/images/partners/' . date('Y-m-d');
            $name = $path . time(). ' - '. $file->getClientOriginalName();
            $file->move($path,$name);
            if (request('old-image')) {
                $oldpath= request('old-image');
                if (File::exists($oldpath)) {
                    unlink($oldpath);
                }
            }
            $data['image'] = $name;
        }
        $partner->update($data);
        return redirect()->back()->with('success','تم تعديل الشريك بنجاح');

    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect(route('admin.partners'))->with('success','تم حذف الشريك بنجاح');
    }

}
