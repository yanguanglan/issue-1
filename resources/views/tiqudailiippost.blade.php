@extends('default')

@section('title', '免费代理IP，HTTP代理IP，隐藏IP，QQ代理，国内外代理IP')
@section('content')
	<div class="row">
		<div class="col-md-12 text-center">
		<h1><a href="{{env('BANNER_IPTIQU_LINK')}}">100元代理IP永久免费提取,点击前往淘宝充值链接</a></h1>
			@foreach($ips as $ip)
			{{$ip->ip2}}:{{$ip->ip3}}<br/>
			@endforeach
		<h1><a href="{{env('BANNER_IPTIQU_LINK')}}">100元代理IP永久免费提取,点击前往淘宝充值链接</a></h1>
		</div>
	</div>
	@endsection
