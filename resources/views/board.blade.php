@extends("layouts.head")
@section('content')

		<section class="wrapper-news">
		    <p class="titleSection">Доска почёта</p>
			    <div class="wrap-board flex">
			    	@foreach($board as $item)
				    <div class="board-student">
				    	<img src="{{ asset('/storage/' . $item->photo) }}" alt="">
				    	<p>{{ $item->name }}</p>
				    </div>
					@endforeach
				</div>
		</section>
	</div>


@endsection