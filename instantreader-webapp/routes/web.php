<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/admin', function () {
    return redirect()->route('marketing-admin.home');
});

Route::get('/admin/home', function () {
    return view('marketing-admin.home');
})->name('marketing-admin.home');

Route::get('/admin/learn-more', function () {
    return view('marketing-admin.learn-more');
})->name('marketing-admin.learn-more');

Route::get('/admin/contact-us', function () {
    return view('marketing-admin.contact-us');
})->name('marketing-admin.contact-us');

Route::get('/admin/about-us', function () {
    return view('marketing-admin.about-us');
})->name('marketing-admin.about-us');

Route::get('/admin/additional-resources', function () {
    return view('marketing-admin.additional-resources');
})->name('marketing-admin.additional-resources');

// Route::get('/admin/home', AdminController@home)->name('marketing.admin.home');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/learn-more/reading-assessment', function () {
    return view('learn-more.reading-assessment');
})->name('learn-more.reading-assessment');

Route::get('/learn-more/reading-programs', function () {
    return view('learn-more.program-overview');
})->name('learn-more.program-overview');

Route::get('/learn-more/faq', function () {
    return view('learn-more.faq');
})->name('learn-more.faq');

Route::get('/learn-more/kids-club', function () {
    return view('learn-more.kids-club');
})->name('learn-more.kids-club');

Route::get('/about-us/founder-and-developer', function () {
    return view('about-us.founder');
})->name('about-us.founder');

Route::get('/about-us/testimonials', function () {
    return view('about-us.testimonials');
})->name('about-us.testimonials');

Route::get('/contact-us/book-consultation', function () {
    return view('contact-us.book-consultation');
})->name('contact-us.book-consultation');

Route::get('/contact-us/application', function () {
    return view('contact-us.application');
})->name('contact-us.application');

Route::get('/additional-resources', function () {
    return view('additional-resources');
})->name('additional-resources');

Route::get('/log-in', function () {
    return view('account.log-in');
})->name('account.log-in');

Route::get('/sign-up', function () {
    return view('account.sign-up');
})->name('account.sign-up');