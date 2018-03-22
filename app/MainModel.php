<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class MainModel extends Model
{
    
    /**
	* GET ARTICLES MAIN PAGE
	*/
    public function getArticles(){
		$articles = DB::table('home-page')->get();
		return $articles;
	}
	
	
	
	
	
	
	
	
	
	
}