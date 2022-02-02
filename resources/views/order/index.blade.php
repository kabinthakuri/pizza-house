@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Order
                    <span style="float:right;">
                    <a href="{{route('pizza.create')}}"  class="btn btn-info">Create Pizza</a>
                    <a href="{{route('pizza.index')}}"  class="btn btn-warning ">View Pizza</a></span>
                </div>

                <div class="card-body">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>User</th>
                               <th>Phone/Email</th>
                               <th>Date/Time</th>
                               <th>Pizza</th>
                               <th>Small Pizza</th>
                               <th>Medium pizza</th>
                               <th>Large Pizza</th>
                               <th>Total Price</th>
                               <th>Message</th>
                               <th>Status</th>
                               <th>Accept</th>
                               <th>Reject</th>
                               <th>Completed</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($orders as $order)
                           <tr>
                               <td>{{$order->user->name}}</td>
                               <td>{{$order->phone}} <br> {{$order->email}}</td>
                               <td>{{$order->date}}/{{$order->time}}</td>
                               <td>{{$order->pizza->name}}</td>
                               <td>{{$order->small_pizza}}</td>
                               <td>{{$order->medium_pizza}}</td>
                               <td>{{$order->large_pizza}}</td>
                               <td>Rs.{{($order->small_pizza*$order->pizza->small_pizza_price)+($order->medium_pizza*$order->pizza->medium_pizza_price)+($order->large_pizza*$order->pizza->large_pizza_price)}}</td>
                               <td>{{$order->body}}</td>
                               <td>{{$order->status}}</td>
                               <form action="{{route('order.status',$order->id)}}" method="post">@csrf
                               <td><input name="status" type="submit" value="Accepted" class="btn btn-primary"></td>
                               <td><input name="status" type="submit" value="Rejected" class="btn btn-danger"></td>
                               <td><input name="status" type="submit" value="Completed" class="btn btn-success"></td>
                               </form>
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
