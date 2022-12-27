<?php

namespace App\Repositories;
use App\Models\Product;
use App\Repositories\Interfaces\productRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class productRepository implements productRepositoryInterface{

    public function all()
    {
        if (Auth::id()==1){
            return Product::latest()->simplePaginate(5);
        }
        else{
            return Product::where('status',1)->latest()->simplePaginate(5);
        }
    }

    public function create(array $attributes)
    {
        Product::create($attributes);
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function update($id, array $attributes)
    {
        $this->show($id)->update($attributes);
    }

    public function delete($id)
    {
        $this->show($id)->update(['status'=>0]);
    }
}
