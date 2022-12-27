<?php

namespace App\Http\Controllers\Products;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Products\CategoryRequestValidation;
use App\Repositories\Interfaces\categoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    
    public function __construct(categoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository= $categoryRepository;
    }

    public function index()
    {
        // if (Auth::user()->can('categoryList')) {
        $categories = $this->categoryRepository->all();
        return view('admin.category.index',compact('categories'));
        // }
    }

    public function create()
    {   
        return view('admin.category.create');
    }

    public function store(CategoryRequestValidation $request)

    {   
        // dd($request->all());
        
            $input = $request->all();
             $input['slug'] = strtolower(str_replace(' ', '-',$request->name));

            if ($image = $request->file('image')) {
                $destinationPath = 'image/categories';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

        $this->categoryRepository->create($input);
        return redirect()->back()->with('success', 'Category  created successfully.');
        
    }

    public function show(Category $category)
    {
        $category = $this->categoryRepository->show($category);
        return view('products.show',compact('category'));
    }


    public function edit(Category $category)
    {
        $category = $this->categoryRepository->show($category->id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryRequestValidation $request, Category $category)
    {

        $input = $request->all();
         $input['slug'] = strtolower(str_replace(' ', '-',$request->name));

         if ($image = $request->file('image')) {
              $destinationPath = 'image/categories';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
             
         if (file_exists(public_path('image/categories/'.$category->image))) {
                unlink(public_path('image/categories/'.$category->image)); 
            }

        }else{  
            unset($input['image']);
        }

        $this->categoryRepository->update($category->id,$input);
        return redirect()->back()->with('success', 'Category  updated successfully.');
    }

    public function destroy(Category $category)
    {
        $this->categoryRepository->delete($category->id);
        return redirect()->back()->with('success', 'Category  deleted successfully.');
    }
}
