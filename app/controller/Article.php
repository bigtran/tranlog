<?php
namespace app\controller;

use support\Request;


class Article
{
    public function index($request, $slug)
    {
    	$theArticle = _theArticle($slug);
    	if(!isset($theArticle['meta']['author'])){
    		$theArticle['meta']["author"] = _siteInfo("author"); 
    	}
    	// var_dump($theArticle);
        
        return view(_siteInfo('theme')."/article", ['theArticle' => $theArticle]);
    }

    public function list(Request $request)
    {
    	return view(_siteInfo('theme')."/index", ['nothing' => ""]);
    }
}
