@extends("layouts.head")
@section('content')

    <section class="wrapper-news">
        <p class="titleSection">Новости</p>
        <div class="ournew-wrapper">
	        <h1>{{ $new->title }}</h1>
	        <p>{{ $new->text }}</p>
	        <img src="{{ asset('/storage/' . $new->photo) }}" alt="">
        </div>
    </section>

@endsection