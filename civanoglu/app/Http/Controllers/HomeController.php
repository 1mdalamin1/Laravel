<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // $latest_properties = Property::all();
        $latest_properties = Property::latest()->get()->take(4);
        $locations = Location::select(['id', 'name'])->get();
        // dd($latest_properties);
        return view('welcome', [
            'latest_properties' => $latest_properties,
            'locations' => $locations,
        ]);
    }


    public function singlePage($slug) {
        $page = Page::where('slug', $slug)->first();

        if (!empty($page)) {
            return view('page', ['page' => $page]);
        } else {
            return abort('404');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function singleLocation($id) {
        $location = Location::findOrFail($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleProperty($id)
    {
        $property = Property::findOrFail($id);
        // dd($property);
        return view('property.single', [
            'property' => $property
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function propertyIndex(Request $request)
    {

        $locations = Location::select(['id', 'name'])->get();
        $properties = Property::latest();

        if(!empty($request->sale)) {
            $properties = $properties->where('sale', $request->sale);
        }
        if(!empty($request->type)) {
            $properties = $properties->where('type', $request->type);
        }
        if(!empty($request->location)) {
            $properties = $properties->where('location_id', $request->location);
        }
        if(!empty($request->price == '100000')) {
            $properties = $properties->where('price', '>', 10000)->where('price', '<=', 100000);
        }
        if(!empty($request->price == '200000')) {
            $properties = $properties->where('price', '>', 100000)->where('price', '<=', 200000);
        }
        if(!empty($request->price == '300000')) {
            $properties = $properties->where('price', '>', 200000)->where('price', '<=', 300000);
        }
        if(!empty($request->price == '400000')) {
            $properties = $properties->where('price', '>', 300000)->where('price', '<=', 400000);
        }
        if(!empty($request->price == '500000')) {
            $properties = $properties->where('price', '>', 400000)->where('price', '<=', 500000);
        }

        if(!empty($request->bedrooms)) {
            $properties = $properties->where('bedrooms', $request->bedrooms);
        }

        // if(!empty($request->type)) {
        //     $properties = Property::latest()->where('type', $request->type)->paginate(9);
        // }
        // else {
        //     $properties = Property::latest()->paginate(12);
        // }
        if(!empty($request->property_name)) {
            $properties = $properties->where('name', 'LIKE', '%'. $request->property_name.'%');
        }
        $properties =  $properties->paginate(12);

        return view('property.index', [
            'properties' => $properties,
            'locations' => $locations
        ]);
        // return view('admin.property.index', ['properties' => $properties]);
    }

// Display Image in all

//     public function displayImage($filename)

// {



//     $path = storage_public('uploads/' . $filename);



//     if (!File::exists($path)) {

//         abort(404);

//     }



//     $file = File::get($path);

//     $type = File::mimeType($path);



//     $response = Response::make($file, 200);

//     $response->header("Content-Type", $type);



//     return $response;

// }

}
