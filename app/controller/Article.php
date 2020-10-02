<?php
namespace app\controller;

use support\Request;


class Article
{
    public function index($request, $slug)
    {
    	$theArticle = _theArticle($slug);
        return view("article", ['theArticle' => $theArticle]);
    }

    public function list(Request $request)
    {
    	return view("index", ['nothing' => ""]);
    }
}
