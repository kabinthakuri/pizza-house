@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                       
                            @if(Auth::check())
                            <form action="{{route('pizza.order',$pizza->id)}}" method="post">@csrf
                                <div class="form-group">
                                <p>Name:{{auth()->user()->name}}</p>
                                <p>Email:{{auth()->user()->email}}</p>
                                <p>Phone Number: <input type="text" name="phone" class="form-control" required></p>
                                <p>Small Pizza Order: <input type="number" name="small_pizza" id="" class="form-control" value="0"></p>
                                <p>Medium Pizza Order: <input type="number" name="medium_pizza" id="" class="form-control" value="0"></p>
                                <p>Large Pizza Order: <input type="number" name="large_pizza" id="" class="form-control" value="0"></p>
                                <p><input type="hidden" name="pizza_id" class="form-control" value="{{$pizza->id}}"></p>
                                <p><input type="date" name="date" id="" class="form-control" required></p>
                                <p><input type="time" name="time" id="" class="form-control" required></p>
                                <p>Message:<textarea name="body" class="form-control" required></textarea></p>
                                <p class="text-center"><input type="submit" value="Make Order" class="btn btn-danger"></p>
                                </div>
                                

                            </form>
                            @else
                            <p>Please,Login to order Pizza.</p>
                            <div class="text-center"><a href="/login" class="btn btn-primary">Login</a></div>
                            @endif
                           
                        
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$pizza->name}}</div>
                <div class="card-body">
                   
                        <center><img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" width="60%"></center>
                        <p><h5>{{$pizza->description}}</h5></p>
                        <p>Small Pizza Price: <span class="text-success"> Rs. {{$pizza->small_pizza_price}}</span></p>
                        <p>Medium Pizza Price: <span class="text-success">Rs. {{$pizza->medium_pizza_price}}</span></p>
                        <p>Large Pizza Price: <span class="text-success ">Rs. {{$pizza->large_pizza_price}}</span></p>
                        
                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
<style>
 .card-header{
        background-color:red;
        color: #000;
        text-align: center;
        font-size:20px;
    }
    a{
        color:#000;
    }
</style>
@endsection
