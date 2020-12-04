@include('parts\head')

<section class="update">
    <div class="container ">
        <div class="row">
        <div class="col-12 row">
            <div class="update__panel col-12 row">
                <form action="{{route('updateItem')}}" method="POST">
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="hidden" name="type" value="update">
                    <span>Название:</span>
                    <input class="item__form col-12" type="text" name="name" value="{{$item->names}}">
                    <div class="col-12 item__img" >
                        <img src="{{URL::asset("$item->imgs")}}" alt="">
                    </div>
                    <span>Год выпуска:</span>
                    <input class="item__form col-12" type="text" name="year" value="{{$item->years}}">
                    <span>Жанр:</span>
                    <input class="item__form col-12" type="text" name="genre" value="{{$item->genres}}">
                    <span>Описане:</span>
                    <input class="item__form col-12" type="text" name="description" value="{{$item->descriptions}}">
                    <span>Цена:</span>
                    <input class="item__form col-12" type="text" name="cost" value="{{$item->costs}}">
                    <span>Сылка</span>
                    <input class="item__form col-12" type="text" name="link" value="{{$item->links}}">
                    <input type="submit" value="Сохранить">
                    {{ csrf_field() }}
                </form>
            </div>
            </div>
        </div>
    </div>
</section>

@include('parts\footer')
