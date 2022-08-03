<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearnMoreController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AddtlResourcesController;

/*
This is the routes file for both the marketing site (Non-SPA) and CRM (SPA).
The comments divide the routes in sections according to their nature and use.
Use the default laravel routing technique for Non-SPAs and use Inertia's routing technique for the SPA.

Note: Using Inertia's technique, only one page is sent. 
The SPA will utilize AJAX calls instead to fetch the needed data to render a screen dynamically.

IMPORTANT: Do not use <a></a> tags for linking pages in SPAs. Use inertia's <Link></Link> tags instead.
Please see the README file for more information.

by rmhizon
*/

/*--------------------------------------------------------------------------
SPA ROUTES
--------------------------------------------------------------------------*/
Route::get('/crm', function () {
    return redirect()->route('admin-manage-users');
});


// Admin routes

//// Manage Users
Route::get('/crm/admin/manage-users', function () {
    return Inertia::render('ManageUsers');
})->name('admin-manage-users');

Route::get('/crm/admin/manage-users/create-user', function () {
    return Inertia::render('CreateUser');
});

Route::get('/crm/admin/manage-users/edit-user', function () {
    return Inertia::render('EditUser');
});

//// Manage Calendar
Route::get('/crm/admin/manage-calendar', function () {
    return Inertia::render('ManageCalendar');
});

//// Manage Classrooms
Route::get('/crm/admin/manage-classrooms', function () {
    return Inertia::render('ManageClassrooms');
});

Route::get('/crm/admin/manage-classrooms/create-classroom', function () {
    return Inertia::render('CreateClassroom');
});

Route::get('/crm/admin/manage-classrooms/edit-classroom', function () {
    return Inertia::render('EditClassroom');
});

Route::get('/crm/admin/manage-classrooms/students', function () {
    return Inertia::render('ViewStudents');
});

Route::get('/crm/admin/manage-classrooms/students/create-student', function () {
    return Inertia::render('CreateStudent');
});

Route::get('/crm/admin/manage-classrooms/students/edit-student', function () {
    return Inertia::render('EditStudent');
});

Route::get('/crm/admin/manage-classrooms/students/parent', function () {
    return Inertia::render('ViewParent');
});

Route::get('/crm/admin/manage-classrooms/students/parent/edit-parent', function () {
    return Inertia::render('EditParent');
});

//// Manage Tutors
Route::get('/crm/admin/manage-tutors', function () {
    return Inertia::render('ManageTutors');
});

Route::get('/crm/admin/manage-tutors/create-tutor', function () {
    return Inertia::render('CreateTutor');
});

Route::get('/crm/admin/manage-tutors/edit-tutor', function () {
    return Inertia::render('EditTutor');
});


// Operations routes
Route::get('/crm/operations/bulletin-board', function () {
    return Inertia::render('BulletinBoard');
});

Route::get('/crm/operations/classrooms', function () {
    return Inertia::render('Classrooms');
});

Route::get('/crm/operations/tutors-lounge', function () {
    return Inertia::render('TutorsLounge');
});

Route::get('/crm/operations/ir-calendar', function () {
    return Inertia::render('IrCalendar');
});


// Sales routes

//// Contact Management 
Route::get('/crm/sales/contact-management', function () {
    return Inertia::render('ContactManagement');
});

Route::get('/crm/sales/contact-management/create-prospect', function () {
    return Inertia::render('CreateProspect');
});

Route::get('/crm/sales/contact-management/create-lead', function () {
    return Inertia::render('CreateLead');
});

Route::get('/crm/sales/contact-management/edit-prospect', function () {
    return Inertia::render('EditProspect');
});

Route::get('/crm/sales/contact-management/edit-lead', function () {
    return Inertia::render('EditLead');
});


Route::get('/crm/sales/client-interaction-tracking', function () {
    return Inertia::render('ClientInteractionTracking');
});

Route::get('/crm/sales/lead-management', function () {
    return Inertia::render('LeadManagement');
});

Route::get('/crm/sales/customer-analytics', function () {
    return Inertia::render('CustomerAnalytics');
});

Route::get('/crm/sales/sales-forecast', function () {
    return Inertia::render('SalesForecast');
});

Route::get('/crm/sales/sales-activity', function () {
    return Inertia::render('SalesActivityLog');
});

/*--------------------------------------------------------------------------
Non-SPA ROUTES
--------------------------------------------------------------------------*/

// admin routes

//// Redirect
Route::get('/admin', function () {
    return redirect()->route('marketing-admin.home');
});

Route::get('/admin/about-us', function () {
    return redirect()->route('marketing-admin.about-us.founder');
});

Route::get('/admin/contact-us', function () {
    return redirect()->route('marketing-admin.contact-us.consultation');
});

//// Routes
Route::get('/admin/home', [HomeController::class, 'admin_index'])->name('marketing-admin.home');

Route::get('/admin/learn-more', function () {
    return view('marketing-admin.learn-more');
})->name('marketing-admin.learn-more');

Route::get('/admin/contact-us/consultation', [ContactUsController::class, 'book_consultation_admin_index'])->name('marketing-admin.contact-us.consultation');

Route::get('/admin/contact-us/career', [ContactUsController::class, 'application_admin_index'])->name('marketing-admin.contact-us.career');

Route::get('/admin/about-us/founder', [AboutUsController::class, 'founder_admin_index'])->name('marketing-admin.about-us.founder');

Route::get('/admin/about-us/testimonials', [AboutUsController::class, 'testimonials_admin_index'])->name('marketing-admin.about-us.testimonials');

Route::get('/admin/additional-resources', [AddtlResourcesController::class, 'admin_index'])->name('marketing-admin.additional-resources');

// main site
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/', [FormController::class, 'store_orientation'])->name('home.store_orientation');

Route::get('/learn-more/reading-assessment', [LearnMoreController::class, 'reading_assessment_index'])->name('learn-more.reading-assessment');

Route::post('/learn-more/reading-assessment', [FormController::class, 'store_ora'])->name('learn-more.store_ora');

Route::get('/learn-more/reading-programs', [LearnMoreController::class, 'reading_program_index'])->name('learn-more.program-overview');

Route::get('/learn-more/faq', [LearnMoreController::class, 'faq_index'])->name('learn-more.faq');

Route::get('/learn-more/kids-club', [LearnMoreController::class, 'kids_club_index'])->name('learn-more.kids-club');

Route::get('/about-us/founder-and-developer', [AboutUsController::class, 'founder_index'])->name('about-us.founder');

Route::post('/about-us/founder-and-developer', [FormController::class, 'store_founder'])->name('about-us.store_founder');

Route::get('/about-us/testimonials', [AboutUsController::class, 'testimonials_index'])->name('about-us.testimonials');

Route::get('/contact-us/book-consultation', [ContactUsController::class, 'book_consultation_index'])->name('contact-us.book-consultation');

Route::post('/learn-more/book-consultation', [FormController::class, 'store_consultation'])->name('contact-us.store_consultation');

Route::get('/contact-us/application', [ContactUsController::class, 'application_index'])->name('contact-us.application');

Route::post('/learn-more/application', [FormController::class, 'store_application'])->name('contact-us.store_application');

Route::get('/additional-resources', [AddtlResourcesController::class, 'index'])->name('additional-resources');

Route::get('/log-in', function () {
    return view('account.log-in');
})->name('account.log-in');

Route::get('/sign-up', function () {
    return view('account.sign-up');
})->name('account.sign-up');

Route::post('/sign-up', [FormController::class, 'store_user'])->name('account.store_user');