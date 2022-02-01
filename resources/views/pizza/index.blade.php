@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Pizzas</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>S.price</th>
                                <th>M.price</th>
                                <th>L.Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pizza as $key=>$pizzas)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{Storage::url($pizzas->image)}}" width="80"></td>
                                    <td>{{$pizzas->name}}</td>
                                    <td>{{$pizzas->description}}</td>
                                    <td>{{$pizzas->category}}</td>
                                    <td>Rs.{{$pizzas->small_pizza_price}}</td>
                                    <td>Rs.{{$pizzas->medium_pizza_price}}</td>
                                    <td>Rs.{{$pizzas->large_pizza_price}}</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          
        </div>
       
    </div>
</div>
@endsection