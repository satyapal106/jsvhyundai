<?php

namespace App\Http\Controllers;

use App\Models\CarsProduct;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\AutoEncoder;
use Intervention\Image\Encoders\WebpEncoder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CarsProductController extends Controller
{
    
    public function CarDetails(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo '<pre/>'; print_r($data);exit;
            $rules = [
                'category_id' => 'required:max:255',
                'car_name' => 'required|max:255',
                'car_url' => 'required|max:255',
                'car_image' => 'required|image|mimes:jpg,jpeg,webp,png|max:2048',
                'banner_image' => 'required|image|mimes:jpg,jpeg,webp,png|max:2048',
                'alt_text' => 'nullable|max:255',
                'feature1' => 'required|max:255',
                'feature2' => 'required|max:255',
                'feature3' => 'required|max:255',
                'description' => 'required|max:500',

            ];

            $customMessages = [
                'category_id.required' => "Category Name is Required",
                'car_name.required' => "Car Name is Required",
                'car_url.required' => "Car Url is Required",
                'car_image.required' => "Car Image is Required",
                'car_image.image' => "The file must be an image.",
                'car_image.mimes' => "The image size must not exceed 1MB.",
                'feature1.required' => "feature1 is Required",
                'feature2.required' => "feature1 is Required",
                'feature3.required' => "feature1 is Required",
                'description.max' => "Description must not exceed 500 characters.",

            ];
            $validator = Validator::make($data, $rules, $customMessages);
            
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if($request->hasFile('car_image')) {
                $manager = new ImageManager(new Driver());
                $path = 'assets/admin/images/cars/';
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
                $uploadedImage = $request->file('car_image');
                $image = $manager->read($uploadedImage);
                $image->resize(1600, 590);
                $image->encode(new WebpEncoder(quality: 65));
                $filename = uniqid() . '.' .'webp';
                $image->save($path.$filename);
                $data['car_image'] = $path.$filename;
            }
            if($request->hasFile('banner_image')) {
                $manager = new ImageManager(new Driver());
                $path = 'assets/admin/images/banner/';
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
                $uploadedImage = $request->file('banner_image');
                $image = $manager->read($uploadedImage);
                $image->resize(1920, 750);
                $image->encode(new WebpEncoder(quality: 65));
                $filename = uniqid() . '.' .'webp';
                $image->save($path.$filename);
                $data['banner_image'] = $path.$filename;
            }
            CarsProduct::create($data);
            return redirect()->back()->with('success_msg', 'car details insert Successfully');
        }
        $category_data = Category::where('status', '1')->get();
        return view('admin.cars-product.cars-product', compact('category_data'));
    }
   
    public function AllCarDetails()
    {
        $category_all = CarsProduct::where('status', '1')->get();

        return view('admin.cars-product.all-car-details', compact('category_all'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarsProduct $carsProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarsProduct $carsProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarsProduct $carsProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarsProduct $carsProduct)
    {
        //
    }
}
