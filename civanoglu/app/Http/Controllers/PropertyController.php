<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($id)
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
    public function index(Request $request)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        // return view('admin.property.create', ['locations' => $locations]);
    }
}
