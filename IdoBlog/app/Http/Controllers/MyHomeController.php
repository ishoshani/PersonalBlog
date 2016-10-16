<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;
class MyHomeController extends Controller{
protected $blogs;
protected $months;
protected $blogsByMonth;
public function __construct(){
	$this->blogs = Blog::orderBy('created_at', 'desc')->get();
	$this->blogsByMonth= Blog::getAllByMonth();
}
public function index(){
	return view("myhome", ['blogs'=>$this->blogs,'byMonth'=>$this->blogsByMonth]);

}


}
