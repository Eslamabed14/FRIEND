<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        Carbon::setlocale('ar');
        $banners = Banner::all();
        return view('admin.banners.index',compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required']
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'admin/images/banners/' . date('Y') . ' / ' . date('m') . '/' ;
            $name = $path . time() . ' - ' . $file->getClientOriginalName();
            $file->move($path,$name);
            $data['image'] = $name;
        }
        Banner::create($data);
        return redirect(route('admin.banners'))->with('success','تمت اضافة الصورة بنجاح');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.edit',compact('banner'));
    }

    public function update(Request $request,$id)
    {
        $banner = Banner::find($id);
        $data = $request->except(['old-image']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'admin/images/banners/' . date('Y') . ' / ' . date('m') . '/' ;
            $name = $path . time() . ' - ' . $file->getClientOriginalName();
            $file->move($path,$name);
            if (request('old-image')) {
                $oldpath = request('old-image');
                if (File::exists($oldpath)) {
                    unlink($oldpath);
                }
            }
            $data['image'] = $name;
        }
        $banner->update($data);
        return redirect()->back()->with('success' , ' تم تعديل الصورة بنجاح');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect(route('admin.banners'))->with('success', 'تم حذف الصورة بنجاح');
    }
}
