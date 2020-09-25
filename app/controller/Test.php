<?php
namespace app\controller;

use support\Request;
use support\Db;
use support\bootstrap\Redis;



class Test
{
    public function index(Request $request)
    {
        return view('test/index', ['name' => 'webman funciton test']);
    }

    public function text(){
        return response('hello translog');
    }

    public function view(Request $request)
    {
        // opcache.enable opcache.enable_cli 
        return view('test/view', ['name' => 'translog view']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

    public function jsonp(Request $request)
    {

    }

    public function xml(Request $request)
    {
        
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

    public function request(Request $request){
        $var_get_all = $request->get();
        $var_get_1 = $request->get('var_1');
        $var_get_2 = $request->get('var_2','var_2_default');

        $var_post_all = $request->post();
        $var_post_1 = $request->post('var_3');
        $var_post_2 = $request->post('var_4','var_4_default');

        $var_postbody = $request->rawBody();

        $var_header = $request->header();
        $var_header_host = $request->header('host');
        $var_header_host_2 = $request->header('host', 'localhost');

        $var_cookie = $request->cookie();
        $var_cookie_name = $request->cookie('name');
        $var_cookie_name_2 = $request->cookie('name', 'tom');

        $var_all = $request->all();
        $var_input_name = $request->input('name', 'default_value');

        $var_only = $request->only(['username', 'password']);
        $var_except = $request->except(['avatar', 'age']);

        $var_file = $request->file();
        $var_file_avatar = $request->file('avatar');

        $var_host = $request->host();
        $var_host_true = $request->host(true);                      // 不含端口信息
        $var_methond = $request->method();                          // GET、POST、PUT、DELETE、OPTIONS、HEAD
        $var_uri = $request->uri();                                 // path + queryString
        $var_path = $request->path();                               // path
        $var_queryString = $request->queryString();                 // queryString
        $var_url = $request->url();                                 // url with no Query
        $var_fullUrl = $request->fullUrl();                         // url with Query
        $var_protocalVersion = $request->protocolVersion();         // 1.0 1.1
        $var_sessionId = $request->sessionId();                     
        $var_remoteIp = $request->getRemoteIp();                    // nginx agent 127.0.0.1
        $var_remotePort = $request->getRemotePort();
        $var_realIp = $request->getRealIp($safe_mode=true);         // nginx agent 127.0.0.1

        $var_localIp = $request->getLocalIp();
        $var_localPort = $request->getLocalPort();
        $var_isAjax = $request->isAjax();
        $var_isPjax = $request->isPjax();
        $var_expectsJson = $request->expectsJson();
        $var_acceptJson = $request->acceptJson();

        $var_app = $request->app;                                   // 单应用返回''，多应用返回应用名
        $var_controller = $request->controller;
        $var_action = $request->action;



        $arr = array('var_get_all' => $var_get_all, 
                     'var_get_1' => $var_get_1, 
                     'var_get_2' => $var_get_2,
                     'var_post_all' => $var_post_all,
                     'var_post_1' => $var_post_1,
                     'var_post_2' => $var_post_2, 
                     'var_postbody' => $var_postbody,
                     'var_header' => $var_header,
                     'var_header_host' => $var_header_host,
                     'var_header_host_2' => $var_header_host_2,
                     'var_cookie' => $var_cookie,
                     'var_cookie_name' => $var_cookie_name,
                     'var_cookie_name_2' => $var_cookie_name_2,
                     'var_all' => $var_all,
                     'var_input_name' => $var_input_name,
                     'var_only' => $var_only,
                     'var_except' => $var_except,
                     'var_file' => $var_file,
                     'var_host' => $var_host,
                     'var_host_true' => $var_host_true,
                     'var_methond' => $var_methond,
                     'var_uri' => $var_uri,
                     'var_path' => $var_path,
                     'var_queryString' => $var_queryString,
                     'var_url' => $var_url,
                     'var_fullUrl' => $var_fullUrl,
                     'var_protocalVersion' => $var_protocalVersion,
                     'var_sessionId' => $var_sessionId,
                     'var_remoteIp' => $var_remoteIp,
                     'var_remotePort' => $var_remotePort,
                     'var_realIp' => $var_realIp,
                     'var_localIp' => $var_localIp,
                     'var_localPort' => $var_localPort,
                     'var_isAjax' => $var_isAjax,
                     'var_isPjax' => $var_isPjax,
                     'var_expectsJson' => $var_expectsJson,
                     'var_acceptJson' => $var_acceptJson,
                     'var_app' => $var_app,
                     'var_controller' => $var_controller,
                     'var_action' => $var_action
                     );

        //return view('test/request', ['arr' => $arr]);
        return json($arr);
    }

    public function response(Request $request){
        // 创建一个对象
        $response = response();

        // .... 业务逻辑省略

        // 设置cookie
        $response->cookie('foo', 'value');

        // .... 业务逻辑省略

        // 设置http头
        $response->header('Content-Type', 'application/json');
        $response->withHeaders([
                    'X-Header-One' => 'Header Value 1',
                    'X-Header-Tow' => 'Header Value 2',
                ]);

        // .... 业务逻辑省略

        // 设置要返回的数据
        $response->withBody('返回的数据');
        return $response;
    }

    public function redirect(Request $request){
        return redirect('/test');
    }

    public function header_set(Request $request){
        return response('hello webman')
        ->header('Content-Type', 'application/json')
        ->withHeaders([
            'X-Header-One' => 'Header Value 1',
            'X-Header-Tow' => 'Header Value 2',
        ]);
    }

    public function cookie_set(Request $request){
        return response('hello webman')
        ->cookie('foo', 'value');
    }


    public function file_bob_marley(Request $request){
        return response()->file(public_path() . '/bob_marley.jpg');
    }

    public function file_download(Request $request){
        return response()->download(public_path() . '/bob_marley.jpg','bob_marley.jpg');
    }


    public function session(Request $request){

        $name = $request->get('name');
        $session = $request->session();
        

        $session_all = $session->all();

        $session_key = $session->get('name');

        $session->set('name', $name);

        $session->put(['name' => 'bigtran', 'age' => 33]);

        $session->forget('haha');
        $session->forget(['haha', 'hehe']);
        $session->delete('hihi');                                   // = forget 只能删除一项

        $name = $session->pull("name");                             // 获取并删除

        // $session->flush();                                       // 删除所有session 数据

        $session_has = $session->has('name');                       // 判断对应session数据是否存在，[不存在，null] = false
        $session_exists = $session->exists('name');                 // 判断对应session数据是否存在，[不存在] = false，[null] = true


        $arr = array('session_all' => $session_all, 
                     'session_key' => $session_key, 
                     'session_has' => $session_has,
                     'session_exists' => $session_exists,
                 );

        return view('test/session', ['arr' => $arr]);
    }

    public function log(Request $request){

        $message = 'log test';
        $log = Log::channel('default');
        $context = array();

        $log->log($level, $message, $context);
        $log->debug($message, $context);
        $log->info($message, $context);
        $log->notice($message, $context);
        $log->warning($message, $context);
        $log->error($message, $context);
        $log->critical($message, $context);
        $log->alert($message, $context);
        $log->emergency($message, $context);

        return response('log test');

    }


    public function db_laravel(Request $request){
        $v = Db::table('kv')->where('k', 'name')->value('v');
        return response("hello $v");
    }

    // 查询构造器
    // https://www.workerman.net/doc/webman#/db/queries
    public function db_queries(Request $request){
        return response("db_queries");
    }

    // https://www.workerman.net/doc/webman#/redis
    public function redis(Request $request){
        $key = 'test_key';
        Redis::set($key, rand());
        return response(Redis::get($key));
    }


    // mysqli function op
    public function mysqli_test(Request $request){
        $v = get_var("select v from kv where k='name'");
        return response("hello $v");
    }
}
