<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Table;
use App\Models\Footer;
use App\Models\Product;
use Illuminate\Http\Request;

class frontend extends Controller
{

    public function getdb() {
        $footer = Footer::all();
        $blog = Blog::with(['media'])->get();
        return view ('frontend.index', compact('footer','blog'));
    }
    
     public function abouts(){
         $blog = Blog::all();
         return view ('frontend.abouts', compact('blog'));
     }
     
     public function menu(){
        $products = product::all();
        return view ('frontend.menu', compact('products'));
    }

    public function special(){
        $blog = Blog::all();
        return view ('frontend.special', compact('blog'));
    }

    public function reservasi(){
        return view ('layouts.reservasi');
    }
    
    public function event(){
        return view ('frontend.event');
    }

    public function galery(){
        return view ('frontend.galery');
    }
    
    public function testimonial(){
        return view ('frontend.testimonial');
    }

    // public function footer() {
    //     $footer = Footer::all();
    //     return view ('frontend.index', compact('footer'));
    // }

    // public function product () {
    //     $products = Product::all();
    //     return view ('frontend.index', compact('products'));
    // };
}
