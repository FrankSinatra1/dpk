@extends("layouts.head")
@section('content')

        <section class="section-one__slider">
            <div class="owl-carousel">
                <div class="carousel-item" style="background-image: url({{ URL::asset('img/news.jpg') }});">
                    <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Осталось образ рот подпоясал. На берегу несколько последний заголовок пояс алфавит послушавшись осталось, эта, текстами власти реторический букв предупреждал. Языком, мир.</p>
                    <a href="" class="carousel-item_link"></a>
                </div>
                <div class="carousel-item" style="background-image: url({{ URL::asset('img/news.jpg') }});">
                    
                    <a href="" class="carousel-item_link"></a>
                </div>
                <div class="carousel-item" style="background-image: url({{ URL::asset('img/news.jpg') }});">
                    
                    <a href="" class="carousel-item_link"></a>
                </div>
                <div class="carousel-item" style="background-image: url({{ URL::asset('img/news.jpg') }});">
                    
                    <a href="" class="carousel-item_link"></a>
                </div>
                <div class="carousel-item" style="background-image: url({{ URL::asset('img/news.jpg') }});">
                    
                    <a href="" class="carousel-item_link"></a>
                </div>
            </div>
        </section>
    </div>

    <section class="wrapper-news">
        <p class="titleSection">Новости</p>
        @foreach($news as $item)
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
        <div class="wrapper-pagination flex">
            <div>
                <p class="flex">Можете перейти на следующую страницу новостей <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95.141 52.635">
                      <path id="Path_34" data-name="Path 34" d="M-405.1,33.365l-.834.834a1.416,1.416,0,0,0,0,2l21.06,21.06L-471.5,56.85a1.416,1.416,0,0,0-1.416,1.416v1.18a1.416,1.416,0,0,0,1.416,1.416l86.633.411-21.06,21.06a1.416,1.416,0,0,0,0,2l.834.834a1.416,1.416,0,0,0,2,0l24.9-24.9a1.416,1.416,0,0,0,0-2l-24.9-24.9A1.416,1.416,0,0,0-405.1,33.365Z" transform="translate(472.919 -32.95)"/>
                    </svg>
                </span></p>
            </div>
            <div class="flex">
                {{ $news->links() }}
            </div>
        </div>
    </section>

@endsection
