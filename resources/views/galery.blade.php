@extends("layouts.head")
@section('content')

		<section class="wrapper-news">
		    <p class="titleSection">Фотогалерея</p>
		    @foreach($gallery as $item)
	            <div class="gallery-wrapper">
	            	<h1>{{ $item->title }}</h1>
	            	<img src="{{ asset('/storage/' . $item->photo) }}" alt="">
	            </div>
        	@endforeach
		</section>
	</div>


@endsection