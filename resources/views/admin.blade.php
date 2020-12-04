@include('parts\head')

<section class="admin">
    <div class="container ">
        <div class="row">
            <div class="col-10 offset-2 row">
                @foreach($items as $item)
                    <div class="item__panel col-12 row">

                        <div class="col-4 item__img" style="background-image:url({{URL::asset("$item->imgs")}})" >

                        </div>


                        <span class="col-4"> <h4>{{$item->names}}</h4><br>Цена: {{$item->costs}}</span>
                        <div class="col-4">
                            <a href="/item/{{$item->names}}">Страница в магазине</a><br>
                            <a href="/update/{{$item->id}}">Редактировать</a>
                            <a style="color: red" href="/update/{{$item->id}}">Удалить</a>
                        </div>
                    </div>
                @endforeach
                    <div class="item__panel col-12 row">
                        <a href="/post"><h1>+Добавть</h1></a>
                    </div>
            </div>
        </div>
    </div>
</section>

@include('parts\footer')
