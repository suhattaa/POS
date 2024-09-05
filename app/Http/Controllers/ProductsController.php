<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodbeverage(){ 
        return view('categoryProducts.foodbeverage')
        ->with('kategori','Food and Beverages');            
    } 

    public function beautyhealth(){ 
        return view('categoryProducts.beautyhealth')
        ->with('kategori','Beauty and Health');            
    } 

    public function homecare(){ 
        return view('categoryProducts.homecare')
        ->with('kategori','HomeCare');            
    } 

    public function babykid(){ 
        return view('categoryProducts.babykid')
        ->with('kategori','BabyKid');            
    } 
}
