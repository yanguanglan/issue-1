@extends('default')
@section('title', '免费代理IP，HTTP代理IP，隐藏IP，QQ代理，国内外代理IP')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							国家
						</th>
						<th>
							免费代理IP地址
						</th>
						<th>
							免费代理IP端口
						</th>
						<th>
							免费代理IP城市
						</th>
						<th>
							是否匿名代理IP
						</th>
	                    <th>
							是否HTTP代理IP
						</th>
					    <th>
							免费代理IP存活时间
						</th>
					    <th>
							免费代理IP验证时间
						</th>
					</tr>
				</thead>
				<tbody>
				@foreach($ips as $ip)
					<tr>
						<td>
							{!! $ip->ip1 !!}
						</td>
						<td>
							{{$ip->ip2}}
						</td>
						<td>
							{{$ip->ip3}}
						</td>
						<td>
							{!! $ip->ip4 !!}
						</td>
						<td>
							{{$ip->ip5}}
						</td>
						<td>
							{{$ip->ip6}}
						</td>
						<td>
							{{$ip->ip7}}
						</td>
						<td>
							{{$ip->ip9}}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<div class="row">
				<div class="col-md-12">
					{{ $ips->links() }}
				</div>
			</div>
		</div>
	</div>
	@endsection
