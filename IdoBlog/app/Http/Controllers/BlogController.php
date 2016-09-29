<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller{
	protected $blogs;
	public function __construct(){
		$this->blogs = Blog::orderBy('created_at', 'asc')->get();

	}
	public function post(Request $request){
		Blog::create([
			'title'=>$request->title,
			'body'=>$request->body])->save();
		return redirect('/');
	}
	public function delete($id){
		Blog::get($id)->delete();
		return redirect('/');	
	}
}