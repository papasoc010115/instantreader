<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadingProgramController;
use App\Http\Controllers\ReadingAssessmentController;
use App\Http\Controllers\KidsClubController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AdditionalResourceController;

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

Route::get('/admin/learn-more', function () {
    return redirect()->route('marketing-admin.learn-more.reading-assessment');
});

//// Routes
Route::get('/admin/home', [HomeController::class, 'admin_index'])->name('marketing-admin.home');

Route::get('/admin/learn-more/reading-assessment', [ReadingAssessmentController::class, 'admin_index'])->name('marketing-admin.learn-more.reading-assessment');

Route::get('/admin/learn-more/reading-programs', [ReadingProgramController::class, 'admin_index'])->name('marketing-admin.learn-more.reading-programs');

Route::get('/admin/learn-more/kids-club', [KidsClubController::class, 'admin_index'])->name('marketing-admin.learn-more.kids-club');

Route::get('/admin/learn-more/faq', [FaqController::class, 'admin_index'])->name('marketing-admin.learn-more.faq');

<<<<<<< HEAD
Route::get('/admin/contact-us/consultation', [ConsultationController::class, 'admin_index'])->name('marketing-admin.contact-us.consultation');

Route::get('/admin/contact-us/career', [CareerController::class, 'admin_index'])->name('marketing-admin.contact-us.career');

Route::get('/admin/about-us/founder', [FounderController::class, 'admin_index'])->name('marketing-admin.about-us.founder');

Route::get('/admin/about-us/testimonials', [TestimonialController::class, 'admin_index'])->name('marketing-admin.about-us.testimonials');
=======
Route::get('/admin/contact-us/consultation', [ContactUsController::class, 'book_consultation_admin_index'])->name('marketing-admin.contact-us.consultation');
Route::post('/admin/contact-us/consultation/update-page-title', [ContactUsController::class, 'update_consultation_page_title'])->name('contact-us.update_consultation_page_title');
Route::post('/admin/contact-us/consultation/update-page-desc', [ContactUsController::class, 'update_consultation_page_desc'])->name('contact-us.update_consultation_page_desc');
Route::post('/admin/contact-us/consultation/update-page-keywords', [ContactUsController::class, 'update_consultation_page_keywords'])->name('contact-us.update_consultation_page_keywords');
Route::post('/admin/contact-us/consultation/update-page-author', [ContactUsController::class, 'update_consultation_page_author'])->name('contact-us.update_consultation_page_author');
Route::post('/admin/contact-us/consultation/update-sect1-heading', [ContactUsController::class, 'update_consultation_sect1_heading'])->name('contact-us.update_consultation_sect1_heading');
Route::post('/admin/contact-us/consultation/update-sect1-para1', [ContactUsController::class, 'update_consultation_sect1_para1'])->name('contact-us.update_consultation_sect1_para1');
Route::post('/admin/contact-us/consultation/update-sect1-para2', [ContactUsController::class, 'update_consultation_sect1_para2'])->name('contact-us.update_consultation_sect1_para2');
Route::post('/admin/contact-us/consultation/update-sect2-heading', [ContactUsController::class, 'update_consultation_sect2_heading'])->name('contact-us.update_consultation_sect2_heading');
Route::post('/admin/contact-us/consultation/update-sect2-para', [ContactUsController::class, 'update_consultation_sect2_para'])->name('contact-us.update_consultation_sect2_para');
Route::post('/admin/contact-us/consultation/update-sect1-image1', [ContactUsController::class, 'update_consultation_sect1_image1'])->name('contact-us.update_consultation_sect1_image1');
Route::post('/admin/contact-us/consultation/update-sect1-image2', [ContactUsController::class, 'update_consultation_sect1_image2'])->name('contact-us.update_consultation_sect1_image2');

Route::get('/admin/contact-us/career', [ContactUsController::class, 'career_admin_index'])->name('marketing-admin.contact-us.career');
Route::post('/admin/contact-us/career/update-page-title', [ContactUsController::class, 'update_career_page_title'])->name('contact-us.update_career_page_title');
Route::post('/admin/contact-us/career/update-page-desc', [ContactUsController::class, 'update_career_page_desc'])->name('contact-us.update_career_page_desc');
Route::post('/admin/contact-us/career/update-page-keywords', [ContactUsController::class, 'update_career_page_keywords'])->name('contact-us.update_career_page_keywords');
Route::post('/admin/contact-us/career/update-page-author', [ContactUsController::class, 'update_career_page_author'])->name('contact-us.update_career_page_author');
Route::post('/admin/contact-us/career/update-sect1-heading', [ContactUsController::class, 'update_career_sect1_heading'])->name('contact-us.update_career_sect1_heading');
Route::post('/admin/contact-us/career/update-sect1-title1', [ContactUsController::class, 'update_career_sect1_title1'])->name('contact-us.update_career_sect1_title1');
Route::post('/admin/contact-us/career/update-sect1-para1', [ContactUsController::class, 'update_career_sect1_para1'])->name('contact-us.update_career_sect1_para1');
Route::post('/admin/contact-us/career/update-sect1-title2', [ContactUsController::class, 'update_career_sect1_title2'])->name('contact-us.update_career_sect1_title2');
Route::post('/admin/contact-us/career/update-sect1-para2', [ContactUsController::class, 'update_career_sect1_para2'])->name('contact-us.update_career_sect1_para2');
Route::post('/admin/contact-us/career/update-sect1-image1', [ContactUsController::class, 'update_career_sect1_image1'])->name('contact-us.update_career_sect1_image1');
Route::post('/admin/contact-us/career/update-sect1-image2', [ContactUsController::class, 'update_career_sect1_image2'])->name('contact-us.update_career_sect1_image2');


Route::get('/admin/about-us/founder', [AboutUsController::class, 'founder_admin_index'])->name('marketing-admin.about-us.founder');
Route::post('/admin/about-us/founder/update-sect1-image', [AboutUsController::class, 'update_founder_sect1_image'])->name('about-us.update_founder_sect1_image');
Route::post('/admin/about-us/founder/update-sect2-image1', [AboutUsController::class, 'update_founder_sect2_image1'])->name('about-us.update_founder_sect2_image1');
Route::post('/admin/about-us/founder/update-sect2-image2', [AboutUsController::class, 'update_founder_sect2_image2'])->name('about-us.update_founder_sect2_image2');
Route::post('/admin/about-us/founder/update-sect3-image', [AboutUsController::class, 'update_founder_sect3_image'])->name('about-us.update_founder_sect3_image');
Route::post('/admin/about-us/founder/update-sect4-image', [AboutUsController::class, 'update_founder_sect4_image'])->name('about-us.update_founder_sect4_image');
Route::post('/admin/about-us/founder/update-sect5-images', [AboutUsController::class, 'update_founder_sect5_images'])->name('about-us.update_founder_sect5_images');

Route::get('/admin/about-us/testimonials', [AboutUsController::class, 'testimonials_admin_index'])->name('marketing-admin.about-us.testimonials');
Route::post('/admin/about-us/testimonials/update-sect1-image1', [AboutUsController::class, 'update_testimonials_sect1_image1'])->name('about-us.update_testimonials_sect1_image1');
Route::post('/admin/about-us/testimonials/update-sect1-image2', [AboutUsController::class, 'update_testimonials_sect1_image2'])->name('about-us.update_testimonials_sect1_image2');
Route::post('/admin/about-us/testimonials/update-sect1-image3', [AboutUsController::class, 'update_testimonials_sect1_image3'])->name('about-us.update_testimonials_sect1_image3');
Route::post('/admin/about-us/testimonials/update-sect1-image4', [AboutUsController::class, 'update_testimonials_sect1_image4'])->name('about-us.update_testimonials_sect1_image4');
Route::post('/admin/about-us/testimonials/update-sect2-image1', [AboutUsController::class, 'update_testimonials_sect2_image1'])->name('about-us.update_testimonials_sect2_image1');
Route::post('/admin/about-us/testimonials/update-sect2-image2', [AboutUsController::class, 'update_testimonials_sect2_image2'])->name('about-us.update_testimonials_sect2_image2');
Route::post('/admin/about-us/testimonials/update-sect2-image3', [AboutUsController::class, 'update_testimonials_sect2_image3'])->name('about-us.update_testimonials_sect2_image3');
Route::post('/admin/about-us/testimonials/update-sect2-image4', [AboutUsController::class, 'update_testimonials_sect2_image4'])->name('about-us.update_testimonials_sect2_image4');
Route::post('/admin/about-us/testimonials/update-sect3-images', [AboutUsController::class, 'update_testimonials_sect3_images'])->name('about-us.update_testimonials_sect3_images');
>>>>>>> 46f9318678b28b5df5a240fcde16fa70b54fd659

Route::get('/admin/additional-resources', [AdditionalResourceController::class, 'admin_index'])->name('marketing-admin.additional-resources');

// main site
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [FormController::class, 'store_orientation'])->name('home.store_orientation');

Route::get('/learn-more/reading-assessment', [ReadingAssessmentController::class, 'index'])->name('learn-more.reading-assessment');
Route::post('/learn-more/reading-assessment', [FormController::class, 'store_ora'])->name('learn-more.store_ora');
Route::get('/learn-more/reading-programs', [ReadingProgramController::class, 'index'])->name('learn-more.program-overview');
Route::get('/learn-more/faq', [FaqController::class, 'index'])->name('learn-more.faq');
Route::get('/learn-more/kids-club', [KidsClubController::class, 'index'])->name('learn-more.kids-club');

Route::get('/about-us/founder-and-developer', [FounderController::class, 'index'])->name('about-us.founder');
Route::post('/about-us/founder-and-developer', [FormController::class, 'store_founder'])->name('about-us.store_founder');
Route::get('/about-us/testimonials', [TestimonialController::class, 'index'])->name('about-us.testimonials');

Route::get('/contact-us/book-consultation', [ConsultationController::class, 'index'])->name('contact-us.book-consultation');
Route::post('/learn-more/book-consultation', [FormController::class, 'store_consultation'])->name('contact-us.store_consultation');
Route::get('/contact-us/application', [CareerController::class, 'index'])->name('contact-us.application');
Route::post('/learn-more/application', [FormController::class, 'store_application'])->name('contact-us.store_application');

Route::get('/additional-resources', [AdditionalResourceController::class, 'index'])->name('additional-resources');

Route::get('/log-in', function () {
    return view('account.log-in');
})->name('account.log-in');

Route::get('/sign-up', function () {
    return view('account.sign-up');
})->name('account.sign-up');

Route::post('/sign-up', [FormController::class, 'store_user'])->name('account.store_user');

/*--------------------------------------------------------------------------
API ENDPOINTS
--------------------------------------------------------------------------*/
Route::post('/api/home/update-page', [HomeController::class, 'update_page'])->name('home.update_page');
Route::post('/api/learn-more/assessment/update-page', [ReadingAssessmentController::class, 'update_page'])->name('learn-more.assessment.update_page');
Route::post('/api/learn-more/reading-programs/update-page', [ReadingProgramController::class, 'update_page'])->name('learn-more.reading-programs.update_page');
Route::post('/api/learn-more/kids-club/update-page', [KidsClubController::class, 'update_page'])->name('learn-more.kids-club.update_page');
Route::post('/api/learn-more/faq/update-page', [FaqController::class, 'update_page'])->name('learn-more.faq.update_page');
Route::post('/api/about-us/founder/update-page', [FounderController::class, 'update_page'])->name('about-us.founder.update_page');
Route::post('/api/about-us/testimonials/update-page', [TestimonialController::class, 'update_page'])->name('about-us.testimonials.update_page');
Route::post('/api/contact-us/consultation/update-page', [ConsultationController::class, 'update_page'])->name('contact-us.consultation.update_page');
Route::post('/api/contact-us/career/update-page', [CareerController::class, 'update_page'])->name('contact-us.career.update_page');
Route::post('/api/additional-resources/update-page', [AdditionalResourceController::class, 'update_page'])->name('additional-resources.update_page');