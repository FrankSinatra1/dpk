@extends("layouts.head")
@section('content')

    <section class="wrapper-news">
        <p class="titleSection">Результат поиска</p>
        
        @foreach($search as $item)
            <div class="wrapper-news_item">
                <div class="flex">
                    <img src="{{ asset('/storage/' . $item->photo) }}" alt="">
                    <div class="news_item-text flex">
                        <p><b>{{ mb_strimwidth($item->title, 0, 100, '') }}</b></p>
                        <p>{{ mb_strimwidth($item->text, 0, 100, '') }}</p>
                        <a href="/ournew/{{ $item->id }}">Читать дольше</a>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    </div>

@endsection