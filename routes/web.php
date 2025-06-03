<?php
use App\Http\Controllers\MyLearningController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\SelectedCourseController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtbkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MateriController;

Route::get('/', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('index');

Route::get('/profil', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});




//online deggre
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::get('/module', [UniversityController::class, 'index'])->name('module.detail');
Route::get('/module/{id}', [UniversityController::class, 'show'])->name('module.show');

Route::get('/program/bachelor', [UniversityController::class, 'bachelor'])->name('universities.bachelor');
Route::get('/program/master', [UniversityController::class, 'master'])->name('universities.master');
Route::get('/program/all', [UniversityController::class, 'all'])->name('universities.all');
Route::get('/program/postgraduate', [UniversityController::class, 'postgraduate'])->name('universities.postgraduate');

//carrer
Route::get('/exam', [CareerController::class, 'showCareers'])->name('careers');
Route::get('/career/{id}', [CareerController::class, 'show'])->name('career.detail');
//certifikat

Route::get('/certificate-detail', [CourseController::class, 'index'])->name('certificate.detail');
Route::get('/certificate-detail/{id}', [CourseController::class, 'show'])->name('certificate.detail.show');
     // Halaman checkout
Route::get('/course/{id}/checkout', [CourseController::class, 'checkout'])->name('course.checkout');

// Proses checkout
Route::get('/course/{id}/checkout', [CheckoutController::class, 'showCourseCheckout'])
    ->name('course.checkout')
    ->middleware('auth');

// Route untuk checkout careers
Route::get('/career/{id}/checkout', [CheckoutController::class, 'showCareerCheckout'])
    ->name('career.checkout')
    ->middleware('auth');

// Routes untuk checkout - Method baru (recommended)
Route::get('/{itemType}/{itemId}/checkout', [CheckoutController::class, 'show'])
    ->where(['itemType' => 'course|career|module', 'itemId' => '[0-9]+'])
    ->name('checkout.show');

// Routes untuk backward compatibility - Method lama
Route::get('/course/{courseId}/checkout', [CheckoutController::class, 'showCourseCheckout'])
    ->where('courseId', '[0-9]+')
    ->name('course.checkout');

Route::get('/career/{careerId}/checkout', [CheckoutController::class, 'showCareerCheckout'])
    ->where('careerId', '[0-9]+')
    ->name('career.checkout');

Route::get('/module/{moduleId}/checkout', [CheckoutController::class, 'showModuleCheckout'])
    ->where('moduleId', '[0-9]+')
    ->name('module.checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success/{checkoutId}', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/history', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/my-learning', [MyLearningController::class, 'index'])->name('mylearning');

//kursus
Route::get('/next', function () {
    return view('pages.detail.nextkursus.learning_goals');
});




Route::get('/message', function () {
    return view('pages.message');
});

// HOME
Route::get('/home', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/topic-listing', function () {
    return view('pages.topic_listing');
});

//MASUK SECTION 1
Route::get('/topic-detail', [UtbkController::class, 'index']);

Route::get('/materi/{sub_kategori}', [MateriController::class, 'show'])->name('materi.detail');

Route::post('/submit-jawaban', [UtbkController::class, 'submitJawaban'])->name('jawaban.submit');

// MASUK SECTION 1
Route::get('/courses', [SelectedCourseController::class, 'index']);
 
// SECTION 2
Route::get('/info-kampus', function () {
    return view('section2.info_kampus');
});

Route::get('/direktori-kampus', [KampusController::class, 'index'])->name('section2.direktori_kampus');

Route::get('/detail-kampus/{id}', [KampusController::class, 'show'])->name('section2.detail_kampus');
// SECTION 2

require __DIR__ . '/auth.php';
