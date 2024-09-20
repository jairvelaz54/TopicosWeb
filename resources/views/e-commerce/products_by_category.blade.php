@extends(

    "layouts.e-commerce"
)
@section('content')



@foreach ($categories as $cat )
<ul>
    {{$cat->name}}
    @foreach ($cat->products as $prod )
    <li>{{$prod->name}} {{$prod->sale_price}}</li>
    @endforeach
</ul>
@endforeach

@endsection
