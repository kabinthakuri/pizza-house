@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">Customers list</div>

                <div class="card-body">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Member since</th>
                              
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($customer as $customers)
                           <tr>
                               <td>{{$customers->name}}</td>
                               <td>{{$customers->email}}</td>
                               <td>{{$customers->created_at}}</td>
                               
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
