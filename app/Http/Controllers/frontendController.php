<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\UserOrder;

class frontendController extends Controller
{
    public function index(Request $request){
        if(!$request->category){
        $pizza=Pizza::latest()->get();
        }
        else{
            $pizza=Pizza::where('category',$request->category)->get();
        }
        return view('frontend.index',compact('pizza'));
    }
    public function show($id){
        $pizza=Pizza::find($id);
        return view('frontend.show',compact('pizza'));
    }
    public function order(Request $request,$id){
        if($request->small_pizza==0 && $request->medium_pizza==0 && $request->large_pizza==0){
            return back()->with('error','please, order atleast 1 pizza.');
        }
        elseif($request->small_pizza<0 || $request->medium_pizza<0 || $request->large_pizza<0){
            return back()->with('error','please, order atleast 1 pizza.');
        }else{
            UserOrder::create([
                'user_id'=>auth()->user()->id,
                'date'=>$request->date,
                'time'=>$request->time,
                'pizza_id'=>$request->pizza_id,
                'small_pizza'=>$request->small_pizza,
                'medium_pizza'=>$request->medium_pizza,
                'large_pizza'=>$request->large_pizza,
                'body'=>$request->body,
                'phone'=>$request->phone,
            ]);
        }
        return redirect()->route('pizza')->with('success','Your order is succeessful.');
    }

}
