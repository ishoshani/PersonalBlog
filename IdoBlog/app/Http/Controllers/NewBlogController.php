<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\support\facades\Auth;
use App\Blog;

class NewBlogController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view("newBlogPage");
	}



}