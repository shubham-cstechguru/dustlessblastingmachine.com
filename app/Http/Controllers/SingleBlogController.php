<?php

namespace App\Http\Controllers;
use App\Model\Category;
use App\model\Blog;
use App\model\Faq;

use Illuminate\Routing\Controller as BaseController;

class SingleBlogController extends BaseController {
    public function index(Blog $slug) {
        $category1   = Category::with(['blog'])->has('blog')->get();
        
        $faq   = Faq::where('parent','=', $slug->parent)->get()->toArray();
        $data = Blog::where('id','!=', $slug->id)->paginate(4)->toArray();
        $list = compact('slug','data','category1','faq');
    	return view('frontend.pages.single-blog',$list);
    }
    public function single() {
        
        
        
        $data = Blog::latest()->paginate(10);
        $list = compact('data');
    	return view('frontend.pages.blog',$list);
    }
}
