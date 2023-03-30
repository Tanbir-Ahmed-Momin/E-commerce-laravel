<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('category.index');
     }

    public function create(){
        return view('category/create');
     }

     public function store(Request $request){
        //  Category::create([
        //     'title'=> $request->title,
        //     'description'=> $request->description,
        //  ]);
        
        
     }
     public function edit(){
        return view('category.edit');
     }
     
     public function show(){
        return view('category.show');
     }

     public function update(){
        
     }

}
