<?php
namespace app\controller;

use support\Request;


class Index
{
    public function index(Request $request)
    {
        $home_url = _siteInfo('home');
        $theme = _siteInfo('theme');

        if(($home_url == '/index') or ($home_url == '/index/index')){
            $articles = getAllArticlesInfo();
            return view($theme."/index", ['articles' => $articles]);
        }else{
            return redirect($home_url);
        }
    }

    public function test(){
        return json();
    }

    
    
}
