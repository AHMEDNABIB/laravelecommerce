<?php

namespace App\Repositories;
use App\Models\Category;
use App\Repositories\Interfaces\categoryRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class categoryRepository implements categoryRepositoryInterface{

    public function all()
    {
        if (Auth::id()==1){
            return Category::latest()->simplePaginate(5);
        }
        else{
            return Category::where('status',1)->latest()->simplePaginate(5);
        }
    }

    public function getCategoryDropdown()
	{
		
        return Category::latest()->where('status',1)->get();

		
    }

		

    public function create(array $attributes)
    {
        Category::create($attributes);
    }

    public function show($id)
    {
        return Category::find($id);
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
