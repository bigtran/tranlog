<?php
namespace app\controller;

use support\Request;


class Index
{
    public function index(Request $request)
    {
        $home_url = _siteInfo('home');

        if(($home_url == '/index') or ($home_url == '/index/index')){
            return view("index", ['nothing' => ""]);
        }else{
            return redirect($home_url);
        }
    }

    public function test(){
        // $thepost = _thePost("hello-translog");

        $articles = getAllArticlesInfo();
        
        return json($articles);
    }

    
    
}
