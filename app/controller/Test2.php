<?php
namespace app\controller;

use support\Request;

class Test
{
    public function index(Request $request)
    {
        return response('hello translog');
    }

    public function view(Request $request)
    {
        return view('test/view', ['name' => 'translog view']);
    }

    public function json(Request $request)

    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

    public function file(Request $request)
    {
        $file = $request->file('upload');
        if ($file && $file->isValid()) {
            $file->move(public_path().'/files/myfile.'.$file->getUploadExtension());
            return json(['code' => 0, 'msg' => 'upload success']);
        }
        return json(['code' => 1, 'msg' => 'file not found']);
    }
    
}
