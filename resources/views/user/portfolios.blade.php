
@extends('layouts.dash')
@section('title', $title)
@section('content')
    <!-- Page title -->
	<div class="col-12 card mb-1">
		<div class="card-body">
			<h5 class="text-primary h5">All portfolios</h5>
			<span class="mb-0 h5 font-weight-bold">{{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}</span>
		</div>
	</div>
	<div class="tradingview-widget-container" style="background:#fff;">
		<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
		<script type="text/javascript">
			new TradingView.widget(
			{
			// "width": "100%",
			// "height": "550",
			// "symbol": "COINBASE:BTCUSD",
			// "interval": "1",
			// "timezone": "Etc/UTC",
			// "theme": 'light',
			// "style": "9",
			// "locale": "en",
			// "toolbar_bg": "#f1f3f6",
			// "enable_publishing": false,
			// "hide_side_toolbar": false,
			// "allow_symbol_change": true,
			// "calendar": false,
			// "studies": [
			// 	"BB@tv-basicstudies"
			// ],
			// "container_id": "tradingview_f933e"
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
		<div class="trading_btns my-2">
			
			<a href="{{ route('deposits') }}">
				<div class="d-flex justify-content-between align-items-center px-3 mt-3">
					<div class="h5">Trade</div>
					<div class="d-flex flex-column text-right">
						<div class="text-dark">$10</div>
						<div class="text-muted">BTC</div>
					</div>
				</div>
			</a>
			<a href="{{ route('deposits') }}">
				<div class="d-flex justify-content-between align-items-center px-3 mt-3">
					<div class="h5">Liverage</div>
					<div class="d-flex flex-column text-right">
						<div class="text-dark">$10</div>
						<div class="text-muted">USDT</div>
					</div>
				</div>
			</a>
		</div>
	</div>
             
@endsection