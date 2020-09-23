<?php
namespace app\_admin\controller;

use support\Request;

class Index
{
    public function index(Request $request)
    {
        return response('hello _admin');
    }
    
}
