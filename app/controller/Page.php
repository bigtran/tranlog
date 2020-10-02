<?php
namespace app\controller;

use support\Request;


class page
{
    public function index(Request $request)
    {
        return view("page", ['nothing' => ""]);
    }
}
