<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/students_excel', [StudentController::class, 'excel']); //只是處理單一的顯示功能
Route::get('/students_hello', [StudentController::class, 'sayHello']); 
Route::resource('students', StudentController::class); //建立完整的學生管理系統（包含新增、編輯、刪除等功能）
