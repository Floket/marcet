@include('parts\head')

<section class="update">
    <div class="container ">
        <div class="row">
        <div class="col-10 offset-2 row">
            <div class="update__panel col-12 row">
                <form action="{{route('updateItem')}}" method="POST">
                    <input type="hidden" name="type" value="post">

                    <span>Название:</span>
                    <input class="item__form col-12" type="text" name="name" value="">
                    <div class="col-12 item__img" >
                        <img src="}" alt="">
                    </div>
                    <input type="file" name="img">
                    <br>
                    <span>Год выпуска:</span>
                    <input class="item__form col-12" type="text" name="year" value="">
                    <span>Жанр:</span>
                    <input class="item__form col-12" type="text" name="genre" value="">
                    <span>Описане:</span>
                    <input class="item__form col-12" type="text" name="description" value="">
                    <span>Цена:</span>
                    <input class="item__form col-12" type="text" name="cost" value="">
                    <span>Сылка</span>
                    <input class="item__form col-12" type="text" name="link" value="">
                    <input type="submit" value="Сохранить">
                    {{ csrf_field() }}
                </form>
            </div>
            </div>
        </div>
    </div>
</section>

@include('parts\footer')
