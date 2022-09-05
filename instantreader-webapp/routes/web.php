<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\LogController;

/*
--------------------------------------------------------------------------
ADMIN ROUTES
--------------------------------------------------------------------------
*/

// Redirect
Route::get('/admin', function () { return redirect()->route('marketing-admin.home'); });
Route::get('/admin/about-us', function () { return redirect()->route('marketing-admin.about-us.founder'); });
Route::get('/admin/contact-us', function () { return redirect()->route('marketing-admin.contact-us.consultation'); });
Route::get('/admin/learn-more', function () { return redirect()->route('marketing-admin.learn-more.reading-assessment'); });

// GET Routes
Route::get('/admin/home', [HomeController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.home');

Route::get('/admin/learn-more/reading-assessment', [ReadingAssessmentController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.learn-more.reading-assessment');
Route::get('/admin/learn-more/reading-programs', [ReadingProgramController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.learn-more.reading-programs');
Route::get('/admin/learn-more/kids-club', [KidsClubController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.learn-more.kids-club');
Route::get('/admin/learn-more/faq', [FaqController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.learn-more.faq');

Route::get('/admin/contact-us/consultation', [ConsultationController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.contact-us.consultation');
Route::get('/admin/contact-us/career', [CareerController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.contact-us.career');

Route::get('/admin/about-us/founder', [FounderController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.about-us.founder');
Route::get('/admin/about-us/testimonials', [TestimonialController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.about-us.testimonials');

Route::get('/admin/additional-resources', [AdditionalResourceController::class, 'admin_index'])->middleware(['auth'])->name('marketing-admin.additional-resources');


Route::get('/logs', [LogController::class, 'create'])->middleware(['auth'])->name('marketing-admin.logs');
// Add User
Route::get('/add-user', [AddUserController::class, 'create'])->middleware(['auth'])->name('marketing-admin.user.add');
Route::post('/add-user', [AddUserController::class, 'store'])->middleware(['auth'])->name('marketing-admin.user.create');

/*
--------------------------------------------------------------------------
MARKETING SITE ROUTES
--------------------------------------------------------------------------
*/

// GET Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/learn-more/reading-assessment', [ReadingAssessmentController::class, 'index'])->name('learn-more.reading-assessment');
Route::get('/learn-more/reading-programs', [ReadingProgramController::class, 'index'])->name('learn-more.program-overview');
Route::get('/learn-more/faq', [FaqController::class, 'index'])->name('learn-more.faq');
Route::get('/learn-more/kids-club', [KidsClubController::class, 'index'])->name('learn-more.kids-club');

Route::get('/about-us/founder-and-developer', [FounderController::class, 'index'])->name('about-us.founder');
Route::get('/about-us/testimonials', [TestimonialController::class, 'index'])->name('about-us.testimonials');

Route::get('/contact-us/book-consultation', [ConsultationController::class, 'index'])->name('contact-us.book-consultation');
Route::get('/contact-us/application', [CareerController::class, 'index'])->name('contact-us.application');

Route::get('/additional-resources', [AdditionalResourceController::class, 'index'])->name('additional-resources');


// POST Form Routes
Route::post('/', [FormController::class, 'store_orientation'])->name('home.store_orientation');
Route::post('/learn-more/reading-assessment', [FormController::class, 'store_ora'])->name('learn-more.store_ora');
Route::post('/about-us/founder-and-developer', [FormController::class, 'store_founder'])->name('about-us.store_founder');
Route::post('/learn-more/book-consultation', [FormController::class, 'store_consultation'])->name('contact-us.store_consultation');
Route::post('/learn-more/application', [FormController::class, 'store_application'])->name('contact-us.store_application');


/*
--------------------------------------------------------------------------
API ENDPOINTS
--------------------------------------------------------------------------
*/
Route::post('/api/home/update-page', [HomeController::class, 'update_page'])->middleware(['auth'])->name('home.update_page');
Route::post('/api/home/upload-media-single', [HomeController::class, 'store_media_single'])->middleware(['auth'])->name('home.store_media_single');
Route::post('/api/home/upload-media-mutiple', [HomeController::class, 'store_media_multiple'])->middleware(['auth'])->name('home.store_media_multiple');

Route::post('/api/learn-more/assessment/update-page', [ReadingAssessmentController::class, 'update_page'])->middleware(['auth'])->name('learn-more.assessment.update_page');
Route::post('/api/learn-more/assessment/upload-media-single', [ReadingAssessmentController::class, 'store_media_single'])->middleware(['auth'])->name('learn-more.assessment.store_media_single');

Route::post('/api/learn-more/reading-programs/update-page', [ReadingProgramController::class, 'update_page'])->middleware(['auth'])->name('learn-more.reading-programs.update_page');
Route::post('/api/learn-more/reading-programs/upload-media-single', [ReadingProgramController::class, 'store_media_single'])->middleware(['auth'])->name('learn-more.reading-programs.store_media_single');

Route::post('/api/learn-more/kids-club/update-page', [KidsClubController::class, 'update_page'])->middleware(['auth'])->name('learn-more.kids-club.update_page');
Route::post('/api/learn-more/kids-club/upload-media-single', [KidsClubController::class, 'store_media_single'])->middleware(['auth'])->name('learn-more.kids-club.store_media_single');

Route::post('/api/learn-more/faq/update-page', [FaqController::class, 'update_page'])->middleware(['auth'])->name('learn-more.faq.update_page');
Route::post('/api/learn-more/faq/store-question-and-answer', [FaqController::class, 'store_question_and_answer'])->middleware(['auth'])->name('learn-more.faq.store_question_and_answer');
Route::post('/api/learn-more/faq/update-question-and-answer', [FaqController::class, 'update_question_and_answer'])->middleware(['auth'])->name('learn-more.faq.update_question_and_answer');
Route::post('/api/learn-more/faq/delete-question-and-answer', [FaqController::class, 'delete_question_and_answer'])->middleware(['auth'])->name('learn-more.faq.delete_question_and_answer'); 

Route::post('/api/about-us/founder/update-page', [FounderController::class, 'update_page'])->middleware(['auth'])->name('about-us.founder.update_page');
Route::post('/api/about-us/founder/upload-media-single', [FounderController::class, 'store_media_single'])->middleware(['auth'])->name('about-us.founder.store_media_single');

Route::post('/api/about-us/testimonials/update-page', [TestimonialController::class, 'update_page'])->middleware(['auth'])->name('about-us.testimonials.update_page');
Route::post('/api/about-us/testimonials/upload-media-single', [TestimonialController::class, 'store_media_single'])->middleware(['auth'])->name('about-us.testimonials.store_media_single');
Route::post('/api/about-us/testimonials/upload-media-mutiple', [TestimonialController::class, 'store_media_multiple'])->middleware(['auth'])->name('about-us.testimonials.store_media_multiple');
Route::post('/api/about-us/testimonials/store-individual-testimonial', [TestimonialController::class, 'store_individual_testimonial'])->middleware(['auth'])->name('about-us.testimonials.store_individual_testimonial');
Route::post('/api/about-us/testimonials/update-individual-testimonial', [TestimonialController::class, 'update_individual_testimonial'])->middleware(['auth'])->name('about-us.testimonials.update_individual_testimonial');
Route::post('/api/about-us/testimonials/delete-individual-testimonial', [TestimonialController::class, 'delete_individual_testimonial'])->middleware(['auth'])->name('about-us.testimonials.delete_individual_testimonial');

Route::post('/api/contact-us/consultation/update-page', [ConsultationController::class, 'update_page'])->middleware(['auth'])->name('contact-us.consultation.update_page');
Route::post('/api/contact-us/consultation/upload-media-single', [ConsultationController::class, 'store_media_single'])->middleware(['auth'])->name('contact-us.consultation.store_media_single');

Route::post('/api/contact-us/career/update-page', [CareerController::class, 'update_page'])->middleware(['auth'])->name('contact-us.career.update_page');
Route::post('/api/contact-us/career/upload-media-single', [CareerController::class, 'store_media_single'])->middleware(['auth'])->name('contact-us.career.store_media_single');

Route::post('/api/additional-resources/update-page', [AdditionalResourceController::class, 'update_page'])->middleware(['auth'])->name('additional-resources.update_page'); 
Route::post('/api/additional-resources/upload-media-single', [AdditionalResourceController::class, 'store_media_single'])->middleware(['auth'])->name('additional-resources.store_media_single'); 
Route::post('/api/additional-resources/upload-media-mutiple', [AdditionalResourceController::class, 'store_media_multiple'])->middleware(['auth'])->name('additional-resources.store_media_multiple');

Route::post('/api/booking/store-schedules', [BookingController::class, 'store_schedules'])->middleware(['auth'])->name('booking.store_schedules');
Route::post('/api/booking/delete-schedule', [BookingController::class, 'delete_schedule'])->middleware(['auth'])->name('booking.delete_schedule');

require __DIR__.'/auth.php';
