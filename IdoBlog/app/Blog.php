<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class Blog extends Model
{
    protected $fillable = ['title','month','year'];
    protected $dir;
    protected $url;
    public function __construct(){
        $this->dir = storage_path('/app/public/blogs/');
    }
    public function getBody($asHTML){
    	$this->url = $this->dir.$this->id.".md";
    		if($asHTML){
    			return Markdown::convertToHtml(file_get_contents($this->url));
    		}
    		return file_get_contents($this->url);
    }
    public function createFileEntry($body){
       $this->url = $this->dir.$this->id.".md";
        $bytes_written=File::put($this->url,$body);
        if(!$bytes_written){
            die("error writing file");
        }
    }
    public function getDatePublished(){
        $y = $this->year;
        $dateObj   = \DateTime::createFromFormat('!m', $this->month);
        $monthName = $dateObj->format('F');
        return $monthName."-".$y;
    }
    public static function getAllByMonth(){
            $useMonths = DB::table("blogs")->select("month", "year")->distinct()->orderBy("year", "desc")->orderBy("month", "desc")->get();
            $resultsTable = [];
            foreach ($useMonths as $key => $columns) {
                $m=$columns->month;
                $y=$columns->year;
                $resultsTable[$m."-".$y]=
                    Blog::where([
                        ["month", $m],
                        ["year", $y]])->get();
            }
            return $resultsTable;
    }
}
