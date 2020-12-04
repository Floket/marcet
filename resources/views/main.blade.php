@include('parts\head')

<div class="container">
    <div class="main__wrapper">
        <div class="row">
            @foreach($items as $item)
                <a class="item col-3" href="item/{{$item->id}}">
                    <h3 class="item__name">{{$item->names}}</h3>
                    <img src="{{URL::asset("$item->imgs")}}" class="img__game" alt="{{$item->names}}">
                    <div class="card-body">
                        <p class="card-text">Цена: {{$item->costs}} </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@include('parts\footer')
