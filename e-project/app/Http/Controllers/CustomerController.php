<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        # 1st way to insert data
/*
        $cus = new Customer();
        $cus->name = 'Tanvir';
        $cus->rate = 100;
        $cus->type = 'admin';
        $cus->is_active = true;
        $cus->save();

        return $cus;

        # 2nd way to insert data

        // $cus =  Customer::create([

        //     'name' => 'Onamica',
        //     'rate' => 200,
        //     'type' => 'admin',
        //     'is_active' => false,
        // ]);

        // return $cus;

        # 3rd way to multipul insert data

        $cus =  Customer::insert([
            [

            'name' => 'Onamica',
            'rate' => 200,
            'type' => 'admin',
            'is_active' => false,
            ],
            ['name' => 'Md Al-Amin',
            'rate' => 200,
            'type' => 'admin',
            'is_active' => false,],
            ['name' => 'Tanvir Hasan',
            'rate' => 200,
            'type' => 'admin',
            'is_active' => false,],
            ['name' => 'Nitu',
            'rate' => 200,
            'type' => 'admin',
            'is_active' => false,],
        ])->save();

        return $cus;
*/

        # way to reactive data => Read
        $data = null;
        $data = Customer::where('type', 'admin')->get();
        return $data;

        # way to find | findOrFail data
        // $data = null;
        // // $data = Customer::find($id); //find
        // $data = Customer::findOrFail($id);
        // return $data;


# 1st way to Update data
/*
        $cus = new Customer();
        $cus->name = 'Tanvir';
        $cus->rate = 100;
        $cus->type = 'admin';
        $cus->is_active = true;
        $cus->save();

        return $cus;

# 2nd way to Update data


        $data = null;
        // $data = Customer::find($id); //find
        $data = Customer::find($id)->update([
            'name' => 'Nitu Akter',
            'rate' => 300,
            'type' => 'user',
            'is_active' => false,

        ]);
        return $data;

# 1st way to Delete single data
        $data = null;
        // $data = Customer::find($id); //find
        $data = Customer::find($id)->delete();
        return $data;

# 2nd way to Delete multipul data
        $data = null;
        // $data = Customer::find($id); //find
        $data = Customer::destroy([2,3]);
        return $data;
*/
    }
}
