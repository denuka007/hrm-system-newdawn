<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ManagerControllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ------- Admin Routes -------  */

Route::prefix('admin')->group(function (){

    Route::get('/login',[AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/profile',[AdminController::class, 'AdminProfile'])->name('admin.profile');
    //Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');
    //Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');


});

/* ------- End Admin Routes -------  */


/* ------- Manager Routes -------  */

Route::prefix('manager')->group(function (){

    Route::get('/login',[ManagerController::class, 'Index'])->name('manager_login_from');
    Route::get('/dashboard',[ManagerController::class, 'ManagerDashboard'])->name('manager.dashboard')->middleware('manager');
    Route::post('/login/owner',[ManagerController::class, 'ManagerLogin'])->name('manager.login');
    Route::get('/logout',[ManagerController::class, 'ManagerLogout'])->name('manager.logout')->middleware('manager');
    //Employees
    Route::get('/employees',[EmployeeController::class, 'ManagerEmp'])->name('manager.emp');
    Route::get('/employees/register',[EmployeeController::class, 'ManagerEmpReg'])->name('manage.empreg');
    Route::post('/employees/register/complete',[EmployeeController::class, 'ManagerEmpCreate'])->name('manager.register');
    //Department
    Route::get('/department/register',[EmployeeController::class, 'ManagerDepReg'])->name('manage.depreg');
    Route::post('/department/register/complete',[EmployeeController::class, 'ManagerDepCreate'])->name('manager.depregister');
    //Employee View/Edit/Delete
    Route::get('/view/profile/{Id}',[EmployeeController::class, 'ManagerViewEmp'])->name('manager.viewEmp');
    Route::get('/employee/delete/{Id}',[EmployeeController::class, 'ManagerDeleteEmp'])->name('manager.deleteEmp');
    Route::put('/employee/Edit/{Id}',[EmployeeController::class, 'ManagerUpdateEmp'])->name('manager.editEmp');





    //Route::get('/register',[ManagerController::class, 'ManagerRegister'])->name('manager.register');
    //Route::post('/register/create',[ManagerController::class, 'ManagerRegisterCreate'])->name('manager.register.create');

});

/* ------- End Manager Routes -------  */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
