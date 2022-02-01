@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                    </ul>
                </div>
            </div>
            @if(count($errors)>0)
            <div class="card mt-3">
                <div class="card-body">
                <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                            @endforeach
                        </div>
                </div>
            </div>
                        @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="class-body ">
                    <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf
                        
                    <div class="form-group">
                        <label for="name">Name of Pizza</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" ></textarea>
                    </div>
                    <div class="form-inline">
                        <label for="price">Price of Pizza:</label>
                        <input  type="number" name="small_pizza_price" class="form-control" placeholder="Small Pizza">
                        <input  type="number" name="medium_pizza_price" class="form-control" placeholder="Medium Pizza">
                        <input  type="number" name="large_pizza_price" class="form-control" placeholder="Large Pizza">
                    </div>
                    <div class="form-group pt-2 pb-2">
                        <label for="category">Category</label>
                        <select name="category" id="form-control">
                            <option value="">Select Pizza category</option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="non-vegetarian">Non-vegetarian</option>
                            <option value="traditional">Traditional</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
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