<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::get();
        return view('post',['data' => $blog]);
    }
    public function detail($id)
    {
        $blog = Blog::where(['id' => $id])
                    ->get();
        return view('detail',['data' => $blog]);
    }
    public function input()
    {
        $blog = Blog::get();
        return view('post_input');
    }
    public function proses_input(Request $request)
    {   
        $blog = new Blog;
        $blog->title = $request->judul;
        $blog->description = $request->alamat;
        $blog->save();
        return redirect('blog');
    }
    public function artikel()
    {   
        $blog = Blog::get();
        return view('welcome',['data' => $blog]);
    }
}
