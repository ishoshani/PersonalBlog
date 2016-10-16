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
	public function index($id){
		$blog = Blog::find($id);
		$m= Blog::getAllByMonth();
		return view("myhome",['blogs'=>[$blog],'byMonth'=>$m]);
	}
	public function post(Request $request){
		if($request->title==false||$request->body==false){
			die("request issue");
		}
		$time = getdate();
		$settings=[
			'title'=>$request->title,
			'month'=>$time["mon"],
			'year'=>$time["year"],
			];
		$entry=new Blog;
		$entry->title=$request->title;
		$entry->month=$time["mon"];
		$entry->year=$time["year"];
		$entry->save();
		$entry->createFileEntry($request->body);


		return redirect('/');
	}
	public function delete($id){
		Blog::get($id)->delete();
		return redirect('/');	
	}
}