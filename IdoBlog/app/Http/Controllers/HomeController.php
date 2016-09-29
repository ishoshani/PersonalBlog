<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Blog;
class HomeController extends Controller{
protected $blogs;
public function __construct(){
	$this->blogs = Blog::orderBy('created_at', 'asc')->get();

}
public function index(){
	return view("home", ['blogs'=>$this->blogs]);

}


}
