<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
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
        $categories = $this->categoryRepository->all();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequestValidation $request)

    {   
        // dd($request->all());
        $this->categoryRepository->create($request->all());
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
        $this->categoryRepository->update($category->id,$request->all());
        return redirect()->back()->with('success', 'Category  updated successfully.');
    }

    public function destroy(Category $category)
    {
        $this->categoryRepository->delete($category->id);
        return redirect()->back()->with('success', 'Category  deleted successfully.');
    }
}
