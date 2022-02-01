@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Pizzas
                    <a href="{{route('pizza.create')}}" class="btn btn-success " style="float:right;">Add pizza</a>
                </div>
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
                            @if(count($pizza)>0)
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
                                        <a href="{{route('pizza.edit',$pizzas->id)}}" class="btn btn-info">Edit</a>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pizzas->id}}">Delete</button>
                                        
                                           
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$pizzas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="{{route('pizza.destroy',$pizzas->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete {{$pizzas->name}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Delete pizza</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        </form>
                                        

                                    </td>
                                </tr>
                            @endforeach

                            @else
                            <h3>No pizza data added.Please! add data.</h3>
                            @endif
                        </tbody>
                    </table>
                    {{$pizza->links()}}
                </div>
            </div>
          
        </div>
       
    </div>
</div>
@endsection