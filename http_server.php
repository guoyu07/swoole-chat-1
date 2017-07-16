<?php
$http = new swoole_http_server('127.0.0.1', 9501);
$http->set([
	'worker_num' => 8,
	'daemonize'=>1
]);
$http->on('request', function (swoole_http_request $request, swoole_http_response $response) {
    // print_r($request);
    // $response->end('hello world');
    $pathinfo = $request->server['path_info'];
    $filename = __DIR__ . $pathinfo;
    if (is_file($filename)) {
        $ext = pathinfo($request->server['path_info'], PATHINFO_EXTENSION);
        if ('php' == $ext) {
            ob_start();
            include ($filename);
            $content = ob_get_contents();
            ob_end_clean();
        } else {
            $content = file_get_contents($filename);
        }
        $response->end($content);

    } else {
        $response->status(404);
        $response->end("404 Page not found" . $pathinfo . ' ' . $filename);
    }
});
$http->start();
