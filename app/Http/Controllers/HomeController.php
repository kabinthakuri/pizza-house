<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOrder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_admin==1){
            return redirect()->route('user.order');
        }
        $orders= UserOrder::where('user_id',auth()->user()->id)->latest()->get();
        if(count($orders)==0){
            return redirect()->route('pizza')->with('warning','New user/No order made yet.');
        }
        return view('home',compact('orders'));
    }
}
