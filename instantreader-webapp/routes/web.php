<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--------------------------------------------------------------------------
SPA ROUTES
--------------------------------------------------------------------------*/
// Admin routes

//// Manage Users
Route::get('/crm/admin/manage-users', function () {
    return Inertia::render('ManageUsers');
});

Route::get('/crm/admin/manage-users/create-user', function () {
    return Inertia::render('CreateUser');
});

Route::get('/crm/admin/manage-users/edit-user', function () {
    return Inertia::render('EditUser');
});

//// Manage Calendar
Route::get('/crm/admin/manage-calendar', function () {
    return Inertia::render('Test');
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
    return Inertia::render('Test');
});

Route::get('/crm/operations/tutors-lounge', function () {
    return Inertia::render('TutorsLounge');
});

Route::get('/crm/operations/ir-calendar', function () {
    return Inertia::render('Test');
});


// Sales routes
Route::get('/crm/sales/contact-management', function () {
    return Inertia::render('Test');
});

Route::get('/crm/sales/client-interaction-tracking', function () {
    return Inertia::render('Test');
});

Route::get('/crm/sales/lead-management', function () {
    return Inertia::render('Test');
});

Route::get('/crm/sales/customer-analytics', function () {
    return Inertia::render('Test');
});

Route::get('/crm/sales/sales-forecast', function () {
    return Inertia::render('Test');
});

Route::get('/crm/sales/sales-activity', function () {
    return Inertia::render('Test');
});

/*--------------------------------------------------------------------------
Non-SPA ROUTES
--------------------------------------------------------------------------*/

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