<?php

function getJONP($url, $proxy_ip = null, $header = null)
{
	if (empty($url)) {
    	return false;
	}
	// 初始化
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	// 启用时会将服务器服务器返回的“Location:”放在header中递归的返回给服务器
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	// 设置 HTTP USERAGENT
	//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:5.0.1) Gecko/20100101 Firefox/5.0.1 FirePHP/0.5');
	// 设置curl允许执行的最长秒数
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, '5');
	curl_setopt($ch, CURLOPT_TIMEOUT, '10');
	curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
	// 设置客户端是否支持 gzip压缩
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if($proxy_ip){
		curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
	}
	if($header){
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	}
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36",
	));
	$output = curl_exec($ch);
	curl_close($ch);
	if ($output === false) {
	    return false;
	}
	return $output;
}
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$breadcrumb = '100元代理IP永久免费提取';
	$ips = \App\Ips::where('ip7', '>=' , date('Y-m-d', time()))->latest()->paginate(100);
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});

Route::get('/{data}/{city}', function ($data, $city) {
	$breadcrumb = '100元代理IP永久免费提取';
	$ips = \App\Ips::where('ip7', '>=', $data)->latest()->paginate(100);
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});


//国内匿名代理IP
Route::get('/guoneinimingdailiip', function () {

	$ips = \App\Ips::where('ip8', 'guoneinimingdailiip')->latest()->paginate(100);
	$breadcrumb = '国内免费高匿名代理IP';
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});

//国内代理IP
Route::get('/guoneidailiip', function () {
	$breadcrumb = '国内免费HTTP代理IP';
	$ips = \App\Ips::where('ip8', 'guoneidailiip')->latest()->paginate(100);
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});

//国外匿名代理IP
Route::get('/guonwainimingdailiip', function () {
	$breadcrumb = '国外免费高匿名代理IP';
	$ips = \App\Ips::where('ip8', 'guonwainimingdailiip')->latest()->paginate(100);
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});

//国外代理IP
Route::get('/guoweidailiip', function () {
	$breadcrumb = '国外免费HTTP代理IP';
	$ips = \App\Ips::where('ip8', 'guoweidailiip')->latest()->paginate(100);
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);

});

//QQ代理IP
Route::get('/qqdailiip', function () {
	$breadcrumb = '免费QQ代理IP';
	$ips = \App\Ips::where('ip8', 'qqdailiip')->latest()->paginate(100);
    return view('dailiip')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});

//提取代理IP
Route::get('/tiqudailiip', function () {
	$breadcrumb = '代理IP自助提取';
    return view('tiqudailiipget')->with('breadcrumb', $breadcrumb);
});

Route::post('/tiqudailiip', function () {
	$breadcrumb = '代理IP自助提取';
	$ips = \App\Ips::where('ip8', 'guoneidailiip')->latest()->paginate(100);
    return view('tiqudailiippost')->with('breadcrumb', $breadcrumb)->with('ips', $ips);
});


