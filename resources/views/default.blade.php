<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$site_title}} - @yield('title')</title>

    <meta name="Description" content="蚂蚁免费代理IP，每日更新免费HTTP代理，所有代理均为6675端口高匿代理，可隐藏IP。国内每个省的http匿名代理实时更新，可以根据你的需要分批提取。">
    <meta name="author" content="{{$site_title}}">
　　<meta name="Keywords" content="免费HTTP代理,免费高匿代理,免费匿名代理,隐藏IP,QQ代理,{{$site_title}}">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<img alt="免费HTTP代理" src="/images/proxyip-logo.png">
		</div>
		<div class="col-md-10">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="/">{{$site_title}}</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li @if(Request::is('guoneinimingdailiip')) class="active" @endif>
							<a href="{{url('/guoneinimingdailiip')}}">国内免费高匿名代理IP</a>
						</li>
						<li @if(Request::is('guoneidailiip')) class="active" @endif>
							<a href="{{url('/guoneidailiip')}}">国内免费HTTP代理IP</a>
						</li>
						<li @if(Request::is('guonwainimingdailiip')) class="active" @endif>
							<a href="{{url('/guonwainimingdailiip')}}">国外免费高匿名代理IP</a>
						</li>
						<li @if(Request::is('guoweidailiip')) class="active" @endif>
							<a href="{{url('/guoweidailiip')}}">国外免费HTTP代理IP</a>
						</li>
						<li @if(Request::is('qqdailiip')) class="active" @endif>
							<a href="{{url('/qqdailiip')}}">免费QQ代理IP</a>
						</li>
						<li @if(Request::is('tiqudailiip')) class="active" @endif>
							<a href="{{url('/tiqudailiip')}}">代理IP自助提取 <span class="label label-danger">New</span></a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<a href="/">{{$site_title}}</a> 				</li>
				<li class="active">
					{{$breadcrumb}}
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="{{env('BANNER_TOP_LINK')}}"><img alt="蚂蚁视频自助推广平台_优酷视频营销神器" src="/images/MAYISHIPINTUIGUANGZIZHUPINGTAI.jpg"></a>
		</div>
	</div>
	@yield('content')
	<div class="row">
		<div class="col-md-4">
			<ul>
				<li>
					<a target="_blank" href="http://baike.baidu.com/view/751.htm?fromtitle=%E4%BB%A3%E7%90%86IP&fromid=5720754&type=syn">代理IP小百科</a>
				</li>
				<li>
					<a target="_blank" href="http://jingyan.baidu.com/article/d3b74d64f975191f77e6090f.html">如何设置火狐Firefox浏览器的IP代理</a>
				</li>
				<li>
					<a target="_blank" href="http://jingyan.baidu.com/article/95c9d20d4c8020ec4f75616a.html">搜狗浏览器设置IP代理</a>
				</li>
				<li>
					<a target="_blank" href="http://jingyan.baidu.com/article/22a299b5ce28a89e19376a07.html">Win10 Edge 浏览器怎么设置代理IP访问</a>
				</li>
				<li>
					<a target="_blank" href="https://zh.wikipedia.org/wiki/%E7%BD%91%E9%A1%B5%E4%BB%A3%E7%90%86">网页代理</a>
				</li>
				<li>
					<a target="_blank" href="https://zh.wikipedia.org/wiki/%E4%BB%A3%E7%90%86%E6%9C%8D%E5%8A%A1%E5%99%A8">代理服务器</a>
				</li>
				<li>
					<a target="_blank" href="http://aruljohn.com/details.php">代理IP查看器</a>
				</li>
				<li>
					<a target="_blank" href="http://www.zhihu.com/question/21109863">手机浏览器设置代理</a>
				</li>
			</ul>
		</div>
		<div class="col-md-4">
			<ul>
				<li>
					<a href="/{{date('Y-m-d', time())}}/meiguo">美国代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/riben">日本代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/hanguo">韩国代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/aomen">澳门代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/xianggang">香港代理IP</a>
				</li>
				<li>
				    <a href="/{{date('Y-m-d', time())}}/taiwan">台湾代理IP</a>
				</li>
				<li>
				    <a href="/{{date('Y-m-d', time())}}/xinjiapo">新加坡代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/yingdu">印度代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/jianada">加拿大代理IP</a>
				</li>
			</ul>
		</div>
		<div class="col-md-4">
			<ul>
				<li>
					<a href="/{{date('Y-m-d', time())}}/beijing">北京代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/shanghai">上海代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/guangzhou">广州代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/chongqing">重庆代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/hebei">河北代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/jiangsu">江苏代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/zhejiang">浙江代理IP</a>
				</li>
				<li>
					<a href="/{{date('Y-m-d', time())}}/yunnan">云南代理IP</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			 
			<address>
				 <strong>{{$site_title}}</strong><br> 本站源码销售：<a href="{{env('BANNER_BOOTOM_LINK')}}">点击购买 Issue #1</a><br> <abbr title="QQ">QQ:1251261096</abbr> 
			</address>
		</div>
	</div>
</div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>