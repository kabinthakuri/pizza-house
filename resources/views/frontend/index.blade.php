@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <form action="{{route('pizza')}}" method="get">@csrf
                            <a class="list-group-item list-group-item-action" href="/">All Pizzas</a>
                            <input type="submit" value="Vegetarian" class="list-group-item list-group-item-action" name="category">
                            <input type="submit" value="Non-vegetarian" class="list-group-item list-group-item-action" name="category">
                            <input type="submit" value="Traditional" class="list-group-item list-group-item-action" name="category">
                        </form>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizzas</div>
                <div class="card-body">
                    <div class="row">
                    @forelse($pizza as $pizzas)
                    <div class="col-md-4 text-center" style="border:1px solid #ccc;">
                        <img src="{{Storage::url($pizzas->image)}}" class="img-thumbnail" width="100%">
                        <strong>{{$pizzas->name}}</strong>
                        <p>{{$pizzas->description}}</p>
                        <a class="btn btn-danger mb-1" href="{{route('pizza.show',$pizzas->id)}}">Order Now</a>
                    </div>
                    @empty
                    <p>No Pizza Available</p>
                    @endforelse
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    input.list-group-item{
        font-size:18px;
    }
    .list-group-item:hover{
        background-image:url("background.jpeg");
        color: #000;
        text-align: center;
    }
    .card-header{
        background-image:url("background.jpeg");
        color: #000;
        text-align: center;
        font-size:20px;
    }
    a{
        color:#000;
    }
</style>
@endsection