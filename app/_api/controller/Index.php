<?php
namespace app\_api\controller;

use support\Request;

class Index
{
    public function index(Request $request)
    {
        return response('hello _api');
    }
    
}
