<?php

namespace App\Repositories;
use App\Models\Order;
use App\Repositories\Interfaces\orderRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class orderRepository implements orderRepositoryInterface{

    public function all()
    {
        if (Auth::id()==1){
            return Order::where('user_id',Auth::user()->id)->get();
        }
        else{
           
        }
    }


    public function show($id)
    {
        return Order::where('user_id',Auth::user()->id)->where('id',$id)->first();

    }

 
}
