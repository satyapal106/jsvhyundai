<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    
   public function CarsCategory(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();

           $rules = [
               'category_name' => 'required|max:255',
           ];

           $customMessages = [
               'category_name.required' => "category Name is Required",
           ];
           $validator = Validator::make($data, $rules, $customMessages);
           
           if ($validator->fails()) {
               return redirect()->back()->withErrors($validator)->withInput();
           }

           Category::create($data);

           return redirect()->back()->with('success_msg', 'Category Name Insert Successfully');
        }
        $category = Category::where('status', '1')->get();

        return view('admin.cars-category', compact('category'));
   }
}
