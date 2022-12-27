<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;


use App\Models\Product;
use App\Models\User; 

class IndexController extends Controller
{
    public function Index(){
        $skip_category_0 = Category::skip(0)->first();
        $skip_product_0 = Product::where('status',1)->where('cat_id',$skip_category_0->id)->orderBy('id','DESC')->limit(5)->get();

         $hot_deals = Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(3)->get();

        $special_offer = Product::where('special_offer',1)->orderBy('id','DESC')->limit(3)->get();

        $new = Product::where('status',1)->orderBy('id','DESC')->limit(3)->get();

        $special_deals = Product::where('special_deals',1)->orderBy('id','DESC')->limit(3)->get();

        return view('frontend.index',compact('skip_category_0','skip_product_0' ,'hot_deals','special_offer','new','special_deals'));

    } // End Method 

    public function ProductDetails($id,$slug){
        $product = Product::findOrFail($id);

          $color = $product->color;
        $product_color = explode(',', $color);
         
        $size = $product->size;
        $product_size = explode(',', $size);
        // dd($color);
        // dd($product_color);

          $cat_id = $product->cat_id;
        $relatedProduct = Product::where('cat_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(4)->get();
        

          return view('frontend.product.product_details',compact('product','color','product_color','product_size','relatedProduct'));
    }
}
