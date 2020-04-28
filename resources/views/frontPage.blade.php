@extends('layoutBase')

@section('content')
<div class="main_content mb-auto">
	<div class="container">
		<!-- main contents -->
		<div class="vertical_item col-md-12">
			<!-- category off -->
			<div class="">○カテゴリ別で探す</div>
			<div class="row">
				<!-- category index -->
				<div class="col-md-3 category_items">
					カテゴリ1
				</div>
				<div class="col-md-3 category_items">
					カテゴリ2
				</div>
				<div class="col-md-3 category_items">
					カテゴリ3
				</div>
				<div class="col-md-3 category_items">
					カテゴリ4
				</div>
				<div class="col-md-3 category_items">
					カテゴリ5
				</div>
				<div class="col-md-3 category_items">
					カテゴリ6
				</div>
				<div class="col-md-6 category_items">
					もっと見る
				</div>
			</div>
		</div>
		@foreach($items)
			<p>
				{{$items->cat_id}}
				{{$items->cat_name}}
			</p>
		@endforeach
		<div class="vertical_item">
			<!-- song ranking -->
			最近の流行り
		</div>
	</div>
</div>
@endsection