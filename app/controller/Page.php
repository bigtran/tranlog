<?php
namespace app\controller;

use support\Request;


class Page
{
    public function index($request, $slug)
    {
        return view(_siteInfo('theme').'/'.$slug, ['nothing' => "nothing"]);
    }
}
