@include('parts\head')

<section class="main">
    <div class="container">
        <div class="main__wrapper">
            <div class="row">
                <div class="item__logo container row">
                    <h3 class="col-12">{{$item->names}}</h3>
                </div>

                <div class="item__wrapper container row">
                    <div class="item__left col-4">
                        <img src="{{URL::asset("$item->imgs")}}" class="img__game" alt="{{$item->names}}">
                    </div>

                    <div class="item__right col-8">
                        <div class="card-body">
                            <span class="item__text">Дата выпуска: {{$item->years}}</span><br>
                            <span class="item__text">Цена: {{$item->costs}}</span><br>
                            <span class="item__text">Жанр: {{$item->genres}}</span><br>
                            <span class="item__text">Описание: {{$item->descriptions}}</span>
                        </div>
                    </div>

                    <div class="market container row ">
                        <div class="item__market col-12 row">
                            <div class="market__name col-3">Steam</div>
                            <a href="{{$item->links}}" class="market__link col-9"><div>Купить:{{$item->costs}}</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('parts\footer')
