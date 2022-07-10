<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all employees
Route::get('/employees', [EmployeeController::class, 'getEmployee']);
// Get one employee
Route::get('/employee/{id}', [EmployeeController::class, 'getEmployeeById']);
// add Employee
Route::post('/addEmployee', [EmployeeController::class, 'addEmployee']);
// update employee
Route::put('/updateEmployee/{id}', [
    EmployeeController::class,
    'updateEmployee',
]);
// Delete employee
Route::delete('/deleteEmployee/{id}', [
    EmployeeController::class,
    'deleteEmployee',
]);
