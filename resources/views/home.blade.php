@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Your Orders</div>

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
                              
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($orders as $order)
                           <tr>
                               <td>{{$order->user->name}}</td>
                               <td>{{$order->phone}} <br> {{auth()->user()->email}}</td>
                               <td>{{$order->date}}/{{$order->time}}</td>
                               <td>{{$order->pizza->name}}</td>
                               <td>{{$order->small_pizza}}</td>
                               <td>{{$order->medium_pizza}}</td>
                               <td>{{$order->large_pizza}}</td>
                               <td>Rs.{{($order->small_pizza*$order->pizza->small_pizza_price)+($order->medium_pizza*$order->pizza->medium_pizza_price)+($order->large_pizza*$order->pizza->large_pizza_price)}}</td>
                               <td>{{$order->body}}</td>
                               <td>{{$order->status}}</td>
                              
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
        .card-header{
        background-image:url("background.jpeg");
        color: #000;
        text-align: center;
        font-size:20px;
        }
</style>
@endsection
