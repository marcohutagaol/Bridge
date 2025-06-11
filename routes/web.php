<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyLearningController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SelectedCourseController;
use App\Http\Controllers\UtbkController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\ChartController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
// use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\WishlistController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\MyLearningController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\AdminCreateController;
use App\Http\Controllers\UniversitasController;
// use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\LearningPageController;
// use App\Http\Controllers\SelectedCourseController;
use App\Http\Controllers\LearningProgressController;


Route::get('/welcome', function () {
    return view('pages.welcomemain');
})->name('welcome');

Route::get('/', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('index');
Route::get('/', function () {
    return view('pages.index');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/profil', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ADMIN
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', [AdminController::class, 'users'])->name('admin.list.users');
    Route::get('/career-list', [AdminController::class, 'careers'])->name('admin.list.career_list');
    Route::get('/course-list', [AdminController::class, 'courses'])->name('admin.list.course_list');
    Route::get('/degree-list', [AdminController::class, 'degrees'])->name('admin.list.degree_list');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/career-create', [AdminController::class, 'createCareer'])->name('admin.list.create.career_create');
    Route::post('/career-create', [AdminController::class, 'storeCareer'])->name('admin.list.create.career_store');
    Route::get('/degree-create', [AdminController::class, 'createDegree'])->name('admin.list.create.degreee_create');
    Route::post('/degree-create', [AdminController::class, 'storeDegree'])->name('admin.list.create.degree_store');
    Route::get('/course-create', [AdminController::class, 'createCourse'])->name('admin.list.create.course_create');
    Route::post('/course-create', [AdminController::class, 'storeCourse'])->name('admin.list.create.course_store');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/career-edit/{id}', [AdminController::class, 'editCareer'])->name('admin.list.edit.career_edit');
    Route::put('/career-edit/{id}', [AdminController::class, 'updateCareer'])->name('admin.list.edit.career_update');
    Route::get('/degree-edit/{id}', [AdminController::class, 'editDegree'])->name('admin.list.edit.degree_edit');
    Route::put('/degree-edit/{id}', [AdminController::class, 'updateDegree'])->name('admin.list.edit.degree_update');
    Route::get('/course-edit/{id}', [AdminController::class, 'editCourse'])->name('admin.list.edit.course_edit');
    Route::put('/course-edit/{id}', [AdminController::class, 'updateCourse'])->name('admin.list.edit.course_update');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::delete('/career-destroy/{id}', [AdminController::class, 'destroyCareer'])->name('admin.list.career_destroy');
    Route::delete('/degree-destroy/{id}', [AdminController::class, 'destroyDegree'])->name('admin.list.degree_destroy');
    Route::delete('/course-destroy/{id}', [AdminController::class, 'destroyCourse'])->name('admin.list.course_destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/ranking-chart', [ChartController::class, 'ranking'])->name('admin.ranking_chart');
    Route::get('/product-chart', [ChartController::class, 'product'])->name('admin.product_chart');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/degree-payment', [AdminPaymentController::class, 'degreePayment'])->name('admin.payment.degree_payment');
    Route::get('/career-payment', [AdminPaymentController::class, 'careerPayment'])->name('admin.payment.career_payment');
    Route::get('/course-payment', [AdminPaymentController::class, 'coursePayment'])->name('admin.payment.course_payment');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/progress', [ProgressController::class, 'index'])->name('admin.progress.index');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/nilai', [NilaiController::class, 'index'])->name('admin.progress.nilai');
});


// UTBK Routes
Route::get('/utbk', [UtbkController::class, 'index'])->name('utbk.index');
Route::get('/materi/{sub_kategori}', [UtbkController::class, 'show'])->name('materi.detail');
Route::post('/utbk/submit-jawaban', [UtbkController::class, 'submitJawaban'])->name('utbk.submit');

// Alternative route jika menggunakan nama lain
Route::get('/topic-detail', [UtbkController::class, 'index'])->name('topic.detail');

Route::get('/learning-page/{type}/{id}', [App\Http\Controllers\LearningPageController::class, 'show'])
    ->name('learning.page')
    ->where(['type' => 'course|career|module', 'id' => '[0-9]+']);


// Wishlist routes (require authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
    Route::post('/wishlist/check', [WishlistController::class, 'check'])->name('wishlist.check');
    Route::get('/wishlist/count', [WishlistController::class, 'count'])->name('wishlist.count');
    Route::delete('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');

});



//learning page 

Route::get('/learning-page', function () {
    return view('pages.detail.learningpage.course_learningpage');
});

//online degree
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::get('/module', [UniversityController::class, 'index'])->name('module.detail');
Route::get('/module/{id}', [UniversityController::class, 'show'])->name('module.show');

Route::get('/program/bachelor', [UniversityController::class, 'bachelor'])->name('universities.bachelor');
Route::get('/program/master', [UniversityController::class, 'master'])->name('universities.master');
Route::get('/program/all', [UniversityController::class, 'all'])->name('universities.all');
Route::get('/program/postgraduate', [UniversityController::class, 'postgraduate'])->name('universities.postgraduate');

//career
Route::get('/exam', [CareerController::class, 'showCareers'])->name('careers');
Route::get('/career/{id}', [CareerController::class, 'show'])->name('career.detail');

//certificate
Route::get('/certificate-detail', [CourseController::class, 'index'])->name('certificate.detail');
Route::get('/certificate-detail/{id}', [CourseController::class, 'show'])->name('certificate.detail.show');
// Halaman checkout

// COURSES ROUTES - FIXED
// Main courses page using SelectedCourseController (contains $recentCourses)
Route::get('/courses', [SelectedCourseController::class, 'index'])->name('courses.index');

// Individual course detail (if needed)
Route::get('/courses/{id}', [SelectedCourseController::class, 'show'])->name('courses.show');

// CHECKOUT ROUTES - CLEANED UP
// Main checkout routes (recommended method)
Route::get('/{itemType}/{itemId}/checkout', [CheckoutController::class, 'show'])
    ->where(['itemType' => 'course|career|module', 'itemId' => '[0-9]+'])
    ->name('checkout.show');

// Specific checkout routes for backward compatibility
Route::get('/course/{courseId}/checkout', [CheckoutController::class, 'showCourseCheckout'])
    ->where('courseId', '[0-9]+')
    ->name('course.checkout')
    ->middleware('auth');

Route::get('/career/{careerId}/checkout', [CheckoutController::class, 'showCareerCheckout'])
    ->where('careerId', '[0-9]+')
    ->name('career.checkout')
    ->middleware('auth');

Route::get('/module/{moduleId}/checkout', [CheckoutController::class, 'showModuleCheckout'])
    ->where('moduleId', '[0-9]+')
    ->name('module.checkout')
    ->middleware('auth');

// Checkout processing routes
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success/{checkoutId}', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/history', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/my-learning', [MyLearningController::class, 'index'])->name('my.learning');

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

// UTBK Routes
Route::get('/utbk', [UtbkController::class, 'index'])->name('utbk.index');
// Route::get('/materi/{sub_kategori}', [UtbkController::class, 'show'])->name('materi.detail');
// Route::post('/utbk/submit-jawaban', [UtbkController::class, 'submitJawaban'])->name('utbk.submit');

// Alternative route jika menggunakan nama lain
// Route::get('/topic-detail', [UtbkController::class, 'index'])->name('topic.detail');

// SECTION 2
Route::get('/info-kampus', function () {
    return view('section2.info_kampus');
});

Route::get('/direktori-kampus', [KampusController::class, 'index'])->name('section2.direktori_kampus');

Route::get('/detail-kampus/{id}', [KampusController::class, 'show'])->name('section2.detail_kampus');
// SECTION 2


//INOVOICE

// Invoice routes
Route::prefix('invoice')->name('invoice.')->group(function () {
    // Download PDF invoice
    Route::get('/download/{orderId}', [InvoiceController::class, 'downloadInvoice'])
        ->name('download');

    // View PDF invoice in browser
    Route::get('/view/{orderId}', [InvoiceController::class, 'viewInvoice'])
        ->name('view');

    // Generate and save invoice
    Route::post('/generate/{orderId}', [InvoiceController::class, 'generateInvoice'])
        ->name('generate');

    // Email invoice
    Route::post('/email/{orderId}', [InvoiceController::class, 'emailInvoice'])
        ->name('email');

    // Bulk generate invoices
    Route::post('/bulk-generate', [InvoiceController::class, 'bulkGenerateInvoices'])
        ->name('bulk.generate');
});



Route::post('/learning-progress/save', [LearningProgressController::class, 'store'])->name('learning-progress.store');




require __DIR__ . '/auth.php';