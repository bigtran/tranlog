<?php
namespace app\controller;

use support\Request;


class Achieves
{
    public function index(Request $request)
    {
    	$articles = getAllArticlesInfo();
        return view("achieves", ['articles' => $articles]);
    }
}
