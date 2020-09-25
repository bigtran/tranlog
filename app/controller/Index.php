<?php
namespace app\controller;

use support\Request;


class Index
{
    public function index(Request $request)
    {
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
