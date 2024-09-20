<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function index(){
        return view('e-commerce.index');
    }
    public function product_details($id){
        $product= Product::find($id);
       return view('e-commerce.product-details', compact('product'));
    }

    public function profile(){
        return view('e-commerce.profile');
    }
    public function carrito(){
        return view('e-commerce.cart');
    }
    public function checkout(){
        return view('e-commerce.checkout');
    }
    public function producto($category_id=null){
        $products=(is_null($category_id))? Product::all() : Product::where("category_id",$category_id)->paginate(5);
        $categories= Category::all();
        return view('e-commerce.products',compact('products', 'categories'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function service(){
        return view('service');
    }
    public function productByCategory(){
        //$cat=Category::find(1);
        //$products= $cat->products;
        $categories=Category::all();
        return view('e-commerce.products_by_category',compact('categories'));

    }

    public function my_account(){
        return view('e-commerce.account');
    }

}
