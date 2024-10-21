<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipalityBudgetController;

use App\Http\Controllers\postController;
use App\Http\Controllers\categoryController;

use App\Models\postModel;
use App\Models\categoryModel;

// Route::get('/', function () {
//     return redirect('/login');
// });



Route::get('/', function () {return view('/website.index'); });
Route::get('/details', function () {return view('/website.details'); });
Route::get('/about-us', function () {return view('/website.about'); });
Route::get('/apply', function () {return view('/website.howtoapply'); });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/browse');
    });

    // Route::get('/application/applicant', function () {return view('/pages.apply.applicant-index'); });
    Route::get('/application/spouse', function () {return view('/pages.apply.spouse-index'); });
    Route::get('/browse', function () {return view('/pages.apply.browse'); });
    Route::get('/active/loans', function () {return view('/pages.recipient.actived'); });
    Route::get('/history/loans', function () {return view('/pages.recipient.history'); });
    Route::get('/active/loans/payment', function () {return view('/pages.recipient.payment'); });


    Route::get('/pending-loans', function () {return view('/pages.lender.pending'); });
    Route::get('/approved-loans', function () {return view('/pages.lender.approved'); });
    Route::get('/payment-loans', function () {return view('/pages.lender.payment'); });

    Route::get('/accounts', function () {return view('/pages.users.index'); });
    Route::get('/reports', function () {return view('/pages.reports.index'); });

    Route::get('/motorcycle', [postController::class, 'index']);
    Route::get('/motorcycle/new', [postController::class, 'create']);
    Route::post('/motorcycle/save', [postController::class, 'save'])->name('motorcycle.save');

    Route::get('/comaker', [AllController::class, 'comaker_index']);
    Route::post('/comaker/save', [AllController::class, 'comaker_store'])->name('comaker.save');

    Route::get('/income', [AllController::class, 'co_income_index']);
    Route::post('/income/save', [AllController::class, 'co_income_store'])->name('comakerincome.save');


    Route::get('/informant', [AllController::class, 'informants_index']);
    Route::post('/informant/save', [AllController::class, 'informants_store'])->name('informants.save');

    Route::get('/family', [AllController::class, 'family_index']);
    Route::post('/family/save', [AllController::class, 'family_store'])->name('family.save');

    Route::get('/brosis', [AllController::class, 'bro_sis_index']);
    Route::post('/brosis/save', [AllController::class, 'bro_sis_store'])->name('brosis.save');

    Route::get('/applicant', [AllController::class, 'applicant_index']);
    Route::post('/applicant/save', [AllController::class, 'applicant_store'])->name('apply.save');


    // ** Projects ** //
    // Route::get('/projects', [ProjectController::class, 'index']);
    // Route::get('/projects/details/{id}', [ProjectController::class, 'details']);
    // Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    // Route::post('/projects/update', [ProjectController::class, 'update'])->name('projects.update');

    // // ** Employee ** //
    // Route::get('/employee', [EmployeeController::class, 'index']);
    // Route::post('/employee/registration', [EmployeeController::class, 'store'])->name('employee.save');

    // // ** Reports ** //
    // Route::get('/reports', [ReportsController::class, 'index']);
    // Route::get('/reports/print', [ReportsController::class, 'print']);
    // Route::get('/projects/print/{id}', [ProjectController::class, 'print_checklist']);

    // // ** Resources ** //
    // Route::get('/resources', [ResourcesController::class, 'index']);
    // Route::post('/resources/registration', [ResourcesController::class, 'store'])->name('resources.save');
});
