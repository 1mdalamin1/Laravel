<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        # Create => C
        // DB::table('students')->insert([
        //     ['name' => 'Tanvir',
        //     'vote' => 100,
        //     'city' => 'Chidpur',
        //     'is_admin' => true,],
        //     ['name' => 'Md Al-Amin',
        //     'vote' => 80,
        //     'city' => 'Saver',
        //     'is_admin' => true,],
        //     ['name' => 'Tanvir Hasan',
        //     'vote' => 90,
        //     'city' => 'Dhaka',
        //     'is_admin' => true,],
        //     ['name' => 'Nitu',
        //     'vote' => 95,
        //     'city' => 'Bogora',
        //     'is_admin' => false,],
        // ]);

        # Reade => R
        // return DB::table('students')->get(['name', 'city']);

        # Reade for filter => R
        $data = null;
        // $data = DB::table('students')->where('city', '!=', 'Chidpur')->get();
        // $data = DB::table('students')
        //         ->where('city', '!=', 'Chidpur')
        //         ->where('vote', '>=', 81)
        //         ->get();

        // $data = DB::select('select * from students where name = "Tanvir"' );
        # Update for filter => U


        # Delete for filter => D
        // $data = DB::table('students')->where('id', '=', 2)->delete();

        $data = Student::all();

        return $data;

    }
}
