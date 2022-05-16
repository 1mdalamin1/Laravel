<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}
