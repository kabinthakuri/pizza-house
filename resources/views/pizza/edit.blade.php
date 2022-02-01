@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Pizza</div>
                <div class="class-body ">
                    <form action="{{route('pizza.update',$pizza->id)}}" method="post" enctype="multipart/form-data">@csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="name">Name of Pizza</label>
                        <input type="text" name="name" class="form-control" value="{{$pizza->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" >{{$pizza->description}}</textarea>
                    </div>
                    <div class="form-inline">
                        <label for="price">Price of Pizza(Rs.):</label>
                        <input  type="number" name="small_pizza_price" class="form-control" value="{{$pizza->small_pizza_price}}">
                        <input  type="number" name="medium_pizza_price" class="form-control" value="{{$pizza->medium_pizza_price}}">
                        <input  type="number" name="large_pizza_price" class="form-control" value="{{$pizza->large_pizza_price}}">
                    </div>
                    <div class="form-group pt-2 pb-2">
                        <label for="category">Category</label>
                        <select name="category" id="form-control">
                            <option value="">Select Pizza category</option>
                            <option value="vegetarian" @if($pizza->category == 'vegetarian')selected @endif>Vegetarian</option>
                            <option value="non-vegetarian" @if($pizza->category == 'non-vegetarian')selected @endif>Non-vegetarian</option>
                            <option value="traditional" @if($pizza->category == 'traditional')selected @endif>Traditional</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img class="m-2" src="{{Storage::url($pizza->image)}}" width="150" style="border:3px solid #000000">
                    </div>
                    <div class="form-control text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection