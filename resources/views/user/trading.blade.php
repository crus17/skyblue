
@extends('layouts.dash')
@section('title', $title)
@section('content')
    <!-- Page title -->
	<div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;background:#fff;">
		<div id="tradingview_f933e"></div>
		<div class="trading_btns">

			<a href="{{ route('trading') }}" class="btn icon_btn">
				<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
				<span class="label">More</span>
			</a>
			<a href="{{ route('trading') }}" class="btn icon_btn">
				<i class="fa fa-bell" aria-hidden="true"></i>
				<span class="label">Alert</span>
			</a>
			<a href="{{ route('trading') }}" class="btn icon_btn">
				<i class="fa fa-arrows-alt" aria-hidden="true"></i>
				<span class="label">Margin</span>
			</a>
			<a href="{{ route('trading') }}" class="btn icon_btn">
				<i class="fa fa-th" aria-hidden="true"></i>
				<span class="label">Grid</span>
			</a>
		</div>
		<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
		<script type="text/javascript">
			new TradingView.widget(
			{
				"width": "100%",
				"height": "550",
				"symbol": "BINANCE:BTCUSDT",
				"interval": "D",
				"timezone": "Etc/UTC",
				"theme": "dark",
				"style": "3",
				"locale": "en",
				"enable_publishing": false,
				"allow_symbol_change": true,
				"support_host": "https://www.tradingview.com"
			}
			);
		</script>
		<div class="trading_btns py-2">
			<a href="{{ route('mplans') }}" class="btn t_btn bg-danger">Buy</a>
			<a href="{{ route('mplans') }}" class="btn t_btn bg-success">Sell</a>
		</div>
	</div>
             
@endsection