<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Blog;
use App\Project;
class MyHomeController extends Controller{
protected $blogs;
protected $months;
protected $blogsByMonth;
protected $projectsByMonth;
public function __construct(){
	$this->blogs = Blog::orderBy('created_at', 'desc')->get();
	$this->projects = Project::orderBy('created_at', 'desc')->get();
	$this->blogsByMonth= Blog::getAllByMonth();
	$this->projectsByMonth= Project::getAllByMonth();
}
public function index(){
	$view=collect(array_merge($this->blogs->all(),$this->projects->all()));
	$view=$view->sortByDesc('created_at');
	return view("myhome", ['view'=>$view,'blogsByMonth'=>$this->blogsByMonth, 'projectsByMonth'=>
		$this->projectsByMonth]);

}


}
