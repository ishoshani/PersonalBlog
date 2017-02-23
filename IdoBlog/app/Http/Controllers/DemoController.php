<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class DemoController extends Controller{
  public function index(){
    return view("tagworld/demo");
  }
}
