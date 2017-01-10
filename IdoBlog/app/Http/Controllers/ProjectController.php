<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Blog;

use App\Http\Requests;

class ProjectController extends Controller
{
	public function index(){
		$viewProject=Project::orderBy('created_at', 'desc')->get();
		$projectsByMonth=Project::getAllByMonth();
		$blogsByMonth=Blog::getAllByMonth();
		return view("myhome",
			["view"=>$viewProject,
			"projectsByMonth"=>$projectsByMonth,
			"blogsByMonth"=>$blogsByMonth]);


	}
	public function indexWith($id){
		$viewProject=[Project::find($id)];
		$projectsByMonth=Project::getAllByMonth();
		$blogsByMonth=Blog::getAllByMonth();
		return view("myhome",
			["view"=>$viewProject,
			"projectsByMonth"=>$projectsByMonth,
			"blogsByMonth"=>$blogsByMonth]);


	}
	public function post(Request $request){
    if(($request->title==false)||($request->body==false)||($request->projectLink==false)){
			die("request issue".$request->title.$request->body.$request->projectLink);
		}
		$time = getdate();
		$settings=[
			'title'=>$request->title,
			'month'=>$time["mon"],
			'year'=>$time["year"],
			];
		$entry=new Project;
		$entry->title=$request->title;
		$entry->link=$request->projectLink;
		$entry->month=$time["mon"];
		$entry->year=$time["year"];
		$entry->save();
		$entry->createFileEntry($request->body);
		return redirect('/projects');
	}
}
