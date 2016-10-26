<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;
use App\Project;
class MyHomeController extends Controller{
protected $blogs;
protected $months;
protected $blogsByMonth;
public function __construct(){
	$this->blogs = Blog::orderBy('created_at', 'desc')->get();
	$this->blogsByMonth= Blog::getAllByMonth();
	$this->projectsByMonth= Project::getAllByMonth();
}
public function index(){
	return view("myhome", ['view'=>$this->blogs,'blogsByMonth'=>$this->blogsByMonth, 'projectsByMonth'=>
		$this->projectsByMonth]);

}


}
