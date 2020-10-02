<?php
namespace app\controller;

use support\Request;


class achieves
{
    public function index(Request $request)
    {
        return view("achieves", ['nothing' => ""]);
    }
}
