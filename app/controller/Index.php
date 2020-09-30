<?php
namespace app\controller;

use support\Request;


class Index
{
    public function index(Request $request)
    {
        $theme_url = _themeUrl();
        return view("index", ['theme_url' => $theme_url]);
    }

    public function theme(Request $request){
        
        
    }

    public function test(){
        //$article = splitYamlMarkdown(site_path() . '/_articles/hello-translog.md');
        $thepost = _thePost("hello-translog");
        
        return json($thepost);
    }

    
    
}
