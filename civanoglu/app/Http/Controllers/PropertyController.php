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

        if(!empty($request->type)) {
            $properties = Property::latest()->where('type', $request->type)->paginate(9);
        }
        else {
            $properties = Property::latest()->paginate(12);
        }

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
