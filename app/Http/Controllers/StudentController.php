<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // dd('hello student index');
        // $data = [
        //     [
        //         'id' => 1,
        //         'name' => 'amy',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'bob',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'cat',
        //     ]
        // ];


        // $users = DB::table('users')->get();
        //$data = DB::table('students')->get();  // 從資料庫獲取學生資料
        $data = DB::table('students')->select('id as my_id','name as my_name','mobile as my_mobile')->get();  
        // dd($data[0]->name);
         dd($data);

        // return view('student.index', ['data' => $data]);   // 傳遞資料到視圖
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function excel()
    {
        dd('hello student controller excel');
    }

    public function sayHello()
    {
        dd('hello kai');
    }
}
