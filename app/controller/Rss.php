<?php
namespace app\controller;

use support\Request;


class rss
{
    public function index(Request $request)
    {
        return view("rss", ['nothing' => ""]);
    }
}
