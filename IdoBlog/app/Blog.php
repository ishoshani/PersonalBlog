<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = ['title','body','track'];
    protected $dir = storage_path('/app/public/blogs/');
    protected $url = $dir.$this->body;
    public function getBody($asHTML){
    	
    		if($asHTML){
    			return Markdown::convertToHtml(file_get_contents($this->url));
    		}
    		return file_get_contents($this->url);
    }
    public static function createFile($body){
    	$blogfile=new fopen($url,)
    	return $filename
    }
}
