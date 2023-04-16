<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ManagerControllers\EmployeeController;
use App\Http\Controllers\ManagerControllers\AttendanceController;
use App\Http\Controllers\ManagerControllers\WorkforceController;
use App\Http\Controllers\ManagerControllers\OverTimeController;
use App\Http\Controllers\EmployeeControllers\EmpattendanceController;
use App\Http\Controllers\EmployeeControllers\InboxController;
use App\Http\Controllers\EmployeeControllers\SaleryController;
use App\Http\Controllers\AdminControllers\PayrollController;
use App\Http\Controllers\AdminControllers\AdminEmployeeController;
use App\Http\Controllers\AdminControllers\ProjectandClientController;
use App\Http\Controllers\AdminControllers\ProductionController;
use App\Http\Controllers\PerfomanceController;
use App\Http\Controllers\LoyaltyPointController;
use App\Models\User;

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
    //payroll
    Route::get('/payroll',[PayrollController::class, 'PayrollView'])->name('admin.payroll');
    Route::get('/payroll/payrollmanagement',[PayrollController::class, 'PayrollManagement'])->name('admin.payrollmanagement');
    Route::get('/payroll/payrollmanagement/basicmanage',[PayrollController::class, 'PayrollBasicManage'])->name('admin.basicandadvance');
    Route::get('/payroll/payrollmanagement/otherscales',[PayrollController::class, 'PayrollOtherScales'])->name('admin.otherscales');
    Route::get('/payroll/payrollcalculation',[PayrollController::class, 'PayrollCalculation'])->name('admin.calculation');
    Route::get('/payroll/advancereq',[PayrollController::class, 'AdvanceReq'])->name('admin.advancereq');
    Route::get('/payroll/advancereq/accept/{Id}',[PayrollController::class, 'AdvanceReqAccept'])->name('admin.adaccept');
    Route::get('/payroll/advancereq/reject/{Id}',[PayrollController::class, 'AdvanceReqReject'])->name('admin.adreject');
    //calculations
    Route::get('/payroll/payrollcalculation/empsalery/{Id}',[PayrollController::class, 'PayrollEmpSaleryCal'])->name('admin.empsal');
    Route::get('/payroll/payrollcalculation/history',[PayrollController::class, 'SaleryHistory'])->name('admin.salhistory');
    Route::get('/payroll/payrollcalculation/history/view/{Id}',[PayrollController::class, 'SaleryHistoryView'])->name('admin.historyview');
    Route::get('/payroll/payrollcalculation/history/Single/{Id}',[PayrollController::class, 'SingleSaleryView'])->name('admin.singlesalview');
    //payroll download
    Route::get('/payroll/payrollcalculation/pdf',[PayrollController::class, 'ReportDownload'])->name('admin.reportpdf');
    //Employee Management
    Route::get('/Employee',[AdminEmployeeController::class, 'EmpView'])->name('admin.employee');
    //project and client management
    Route::get('/projects',[ProjectandClientController::class, 'ProjectView'])->name('admin.projectsandclient');
    Route::get('/projects/clientadd',[ProjectandClientController::class, 'ClientAdd'])->name('admin.clientadd');
    Route::post('/projects/clientadd/done',[ProjectandClientController::class, 'ClientAddDone'])->name('admin.clientdone');
    Route::get('/projects/projectadd',[ProjectandClientController::class, 'ProjectAdd'])->name('admin.projectadd');
    Route::post('/projects/projectadd/done',[ProjectandClientController::class, 'ProjectAddDone'])->name('admin.projectdone');
    Route::get('/projects/clientview/{Id}',[ProjectandClientController::class, 'ClientView'])->name('admin.clientview');

    //Production
    Route::get('/production',[ProductionController::class, 'ProductionView'])->name('admin.production');
    Route::post('/production/add/{Id}',[ProductionController::class, 'ProductionAdd'])->name('admin.prodctionadd');

    //PERFOMANCE
    Route::get('/perfomance',[PerfomanceController::class, 'PerfomanceView'])->name('admin.perfomance');
    Route::get('/perfomance/individual',[PerfomanceController::class, 'PerfomanceIndividual'])->name('admin.individualperfomance');
    Route::get('/perfomance/compare',[PerfomanceController::class, 'PerfomanceCompare'])->name('admin.perfomancecompare');
    Route::get('/perfomance/individual/months/{Id}',[PerfomanceController::class, 'PerfomanceAttendance'])->name('admin.attenperfomace');
    Route::get('/perfomance/individual/months/attendance/{Id}/{Month}',[PerfomanceController::class, 'AttendanceGet'])->name('admin.getattendance');
    Route::get('/perfomance/individual/overtime/months/{Id}',[PerfomanceController::class, 'PerfomanceOvertime'])->name('admin.overperfomance');
    Route::get('/perfomance/individual/overtime/months/{Id}/{Month}',[PerfomanceController::class, 'OvertimeGet'])->name('admin.getovertime');
    Route::get('/perfomance/individual/productivity/months/{Id}',[PerfomanceController::class, 'PerfomanceProduct'])->name('admin.productperfomance');
    Route::get('/perfomance/individual/productivity/months/{Id}/{Month}',[PerfomanceController::class, 'ProductGet'])->name('admin.getproductivity');
    //Perfomance Compare
    Route::get('/perfomance/compare/attendance/{Id}',[PerfomanceController::class, 'CompareAttendance'])->name('admin.attencompare');
    Route::post('/perfomance/compare/attendance/emps/{Id}',[PerfomanceController::class, 'CompareAttenEmp'])->name('admin.compareemps');
    Route::post('/perfomance/compare/attendance/months/{Id}',[PerfomanceController::class, 'CompareAttenMonths'])->name('admin.comparemonths');
    Route::get('/perfomance/compare/overtime/{Id}',[PerfomanceController::class, 'CompareOvertime'])->name('admin.otcompare');
    Route::get('/perfomance/compare/productivity/{Id}',[PerfomanceController::class, 'CompareProductivity'])->name('admin.productcompare');
    Route::get('/perfomance/compare/Salery/{Id}',[PerfomanceController::class, 'CompareSalery'])->name('admin.salerycompare');
    //Evaluation
    Route::get('/perfomance/evaluation',[PerfomanceController::class, 'PerfomanceEvo'])->name('admin.perevaluation');

    //Loyalty Points
    Route::get('/loyaltypoint',[LoyaltyPointController::class, 'LoyalPointView'])->name('admin.loyalpoint');


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
    Route::get('/department/delete/{Id}',[EmployeeController::class, 'ManagerDeleteDep'])->name('manager.depdelete');
    //Employee View/Edit/Delete
    Route::get('/view/profile/{Id}',[EmployeeController::class, 'ManagerViewEmp'])->name('manager.viewEmp');
    Route::get('/employee/delete/{Id}',[EmployeeController::class, 'ManagerDeleteEmp'])->name('manager.deleteEmp');
    Route::get('/employee/edit/{Id}',[EmployeeController::class, 'ManagerUpdateEmp'])->name('manager.editEmp');
    Route::put('/employee/edit/done/{Id}',[EmployeeController::class, 'ManagerUpdateEmpDone'])->name('manager.updateEmpDone');
    //Attendance
    Route::get('/attendance',[AttendanceController::class, 'AttendanceView'])->name('manager.attendance');
    Route::get('/attendance/mark/{Id}',[AttendanceController::class, 'AttendanceMark'])->name('manager.attmark');
    Route::get('/attendance/view',[AttendanceController::class, 'AttendanceEmps'])->name('manager.attendanceview');
    Route::get('/attendance/view/pdf',[AttendanceController::class, 'AttendancePDF'])->name('manager.attendancepdf');
    Route::get('/attendance/view/off/{Id}',[AttendanceController::class, 'AttendanceOff'])->name('manager.attendanceoff');
    //leaves
    Route::get('/attendance/leaves',[AttendanceController::class, 'LeavesView'])->name('manager.leavesview');
    Route::get('/attendance/leaves/accept/{Id}',[AttendanceController::class, 'LeavesAccept'])->name('manager.leaveaccept');
    Route::get('/attendance/leaves/rejcet/{Id}',[AttendanceController::class, 'LeavesReject'])->name('manager.leavereject');
    //shortleaves
    Route::get('/attendance/leaves/shortleave/accept/{Id}',[AttendanceController::class, 'ShortLeavesAccept'])->name('manager.acceptshort');
    Route::get('/attendance/leaves/shortleave/reject/{Id}',[AttendanceController::class, 'ShortLeavesReject'])->name('manager.rejectshort');
    //absant
    Route::get('/attendance/absant/{Id}',[AttendanceController::class, 'AttendanceAbsantMark'])->name('manager.attabsant');
    Route::get('/attendance/absantview',[AttendanceController::class, 'AbsantView'])->name('manager.absantview');
    //Workforce
    Route::get('/workforce',[WorkforceController::class, 'AttendanceView'])->name('manager.workforce');
    Route::get('/workforce/shifts',[WorkforceController::class, 'ShiftView'])->name('manager.shift');
    Route::post('/workforce/shifts/register',[WorkforceController::class, 'ManagerShiftReg'])->name('manager.shiftreg');
    Route::get('/workforce/shifts/{Id}',[WorkforceController::class, 'ManagerShiftEdit'])->name('manager.shiftedit');
    Route::put('/workforce/shifts/done/{Id}',[WorkforceController::class, 'ManagerUpdateShift'])->name('manager.updateshift');
    Route::get('/workforce/shifts/delete/{Id}',[WorkforceController::class, 'ManagerDeleteShift'])->name('manager.shiftdelete');
    //department Manage
    Route::get('/workforce/depmanage',[WorkforceController::class, 'DepartmentManage'])->name('manager.depmanage');
    Route::get('/workforce/depmanage/active/{Id}',[WorkforceController::class, 'DepartmentActive'])->name('manager.depactive');
    Route::get('/workforce/depmanage/Shutdown/{Id}',[WorkforceController::class, 'DepartmentShutdown'])->name('manager.depshutdown');
    //Employee Assignment
    Route::get('/workforce/employeeassign',[WorkforceController::class, 'EmployeeAssignView'])->name('manager.empassign');
    Route::get('/workforce/employeeassign/assignwork/{Id}',[WorkforceController::class, 'EmployeeAssignBoth'])->name('manager.assignboth');
    Route::post('/workforce/employeeassign/assignwork/done/{Id}',[WorkforceController::class, 'ManagerAssignEmp'])->name('manager.assignbothdone');
    Route::get('/workforce/employeeassign/resignwork/{Id}',[WorkforceController::class, 'EmployeeResign'])->name('manager.resignwork');
    //Overtime
    Route::get('/overtime',[OverTimeController::class, 'OverTimeView'])->name('manager.overtime');
    Route::get('/overtime/assign',[OverTimeController::class, 'OverTimeAssign'])->name('manager.assignot');
    Route::post('/overtime/assign/done/{Id}',[OverTimeController::class, 'OverTimeAssignDone'])->name('manager.otassigndone');
    Route::get('/overtime/reasign/{Id}',[OverTimeController::class, 'OverTimeResign'])->name('manager.otresign');
    Route::get('/overtime/info',[OverTimeController::class, 'OverTimeInfo'])->name('manager.otinfo');




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



/* ------- User Routes -------  */

//attendance
Route::get('/attendance', [EmpattendanceController::class, 'AttendanceView'])->middleware(['auth', 'verified'])->name('emp.attendance');
Route::post('/attendance/leaves/{Id}', [EmpattendanceController::class, 'LeaveRequest'])->middleware(['auth', 'verified'])->name('emp.leaverequest');
Route::get('/inbox', [InboxController::class, 'InboxView'])->middleware(['auth', 'verified'])->name('emp.inboxview');
Route::get('/attendance/shortleave/{Id}', [EmpattendanceController::class, 'ShortLeave'])->middleware(['auth', 'verified'])->name('emp.shortleave');
Route::get('/inbox/clearall', [InboxController::class, 'ClearAll'])->middleware(['auth', 'verified'])->name('emp.clearall');
Route::get('/attendance/clearleave/{Id}', [EmpattendanceController::class, 'ClearLeave'])->middleware(['auth', 'verified'])->name('emp.leavecancel');
//salery
Route::get('/salery', [SaleryController::class, 'SaleryView'])->middleware(['auth', 'verified'])->name('emp.saleryview');
Route::get('/salery/advance/{Id}', [SaleryController::class, 'AdvanceReq'])->middleware(['auth', 'verified'])->name('emp.advancereq');



/* ------- End of User Routes -------  */



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
