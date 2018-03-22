<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use DB;



use App\MainModel;



class MainController extends Controller
{
    //
    public function getIndex(){
		
		if(view()->exists('main')){
			
			
			/*
			* GET ARTICLES MAIN PAGE
			**/
			$mainModel = new MainModel;
			$mainPage = $mainModel->getArticles();
			
			
			/*
			* get news for homePage
			**/
			//$NewModel = new NewModel;
			//$news = $NewModel->lastNewsAllCat($categories);
			
			
			/*
			* get pagesInfo
			**/
			//$PagesModel = new PagesModel;
			//$pages = $PagesModel->getPages();
			
			
			
			
			
			
			
			/*
			* call view
			**/
			$view = view('main', [
									'mainPage' => $mainPage, 
									/*'categories' => $categories, 
									'pages' => $pages,*/
								])->withTitle('Наливные полы. Киев')
								->withDescription('Наливные полы в Киеве и Украине. Полимерные полы для промышленных и жилых помещений')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
