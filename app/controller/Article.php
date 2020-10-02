<?php
namespace app\controller;

use support\Request;


class article
{
    public function index(Request $request)
    {
        return view("article", ['nothing' => ""]);
    }
}
