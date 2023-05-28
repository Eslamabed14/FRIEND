<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        Carbon::setLocale('ar');
        $articles = Article::all();
        return view('admin.articles.index' , compact('articles'));
    }

    public function create(){
        return view('admin.articles.add');
    }

    public function store(Request $request){
        $request -> validate([
            'title'         =>  'required',
            'description'   =>  'required',
            'image'         =>  'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'admin/images/articles/' . date('Y-m-d');
            $name = $path . time() . ' - ' .$image->getClientOriginalName();
            $image->move($path,$name);
            $data['image'] = $name;
        }
        Article::create($data);
        return redirect(route('admin.articles'))->with('success' , 'تم اضافة المقال بنجاح');
    }

    public function show(){
        //
    }

    public function edit ($id){
        $article = Article::find($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $data = $request->except(['old-image']);
        if ($request ->hasFile('image')) {
            $image = $request->file('image');
            $path = 'admin/images/articles/' . date('Y-m-d');
            $name = $path . time() . ' - ' .$image->getClientOriginalName();
            $image->move($path,$name);
            if (request('old-image')) {
                $oldpath = request('old-image');
                if (File::exists($oldpath)){
                    unlink($oldpath);
                }
            }
            $data['image'] = $name;
        }
        $article->update($data);
        return redirect()->back()->with('success' , 'تم تعديل المقال بنجاح ');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect(route('admin.articles'))->with('success',' تم حذف المقال بنجاح'); 
    }
}
