<?php
namespace app\controller;

use support\Request;


class Index
{
    public function index(Request $request)
    {
        $theme_dir = env('THEME_NAME', 'default');
        $site_url = "";
        $theme_url = $site_url."/_theme/".$theme_dir."/";
        return view("index", ['theme_url' => $theme_url]);
    }

    public function theme(Request $request){
        
        
    }

    public function test(){
        $article = spyc_load_file(site_path() . '/_articles/init.md');
        $title = $article['title'];
        $description = $article['description'];
        $keywords = $article['keywords'];
        $date = $article['date'];
        $lastmod = $article['lastmod'];
        $draft = $article['draft'];
        $slug = $article['slug'];
        $tag = $article['tag'];
        $categories = $article['categories'];
        //return view('index/view', ['content' => $data]);
        return json($article);
    }

    
    
}
