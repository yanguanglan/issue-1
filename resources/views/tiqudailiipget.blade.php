@extends('default')

@section('title', '免费代理IP，HTTP代理IP，隐藏IP，QQ代理，国内外代理IP')
@section('content')
	<div class="row">
		<div class="col-md-12">
		<form class="form-horizontal" method="post" action="">
  <div class="form-group">
    <label for="input-ddh" class="col-sm-2 control-label">订单号</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ddh" id="input-ddh" placeholder="订单号" value="test">
    </div>
  </div>
  <div class="form-group">
    <label for="input-sl" class="col-sm-2 control-label">提取数量</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-sl" placeholder="提取数量" value="100">
    </div>
  </div>
  <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-lg btn-block btn-success">提取IP</button>
    </div>
  </div>
</form>
		</div>
	</div>
	@endsection
