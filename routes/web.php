<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminSellerRequestController;
use App\Http\Controllers\Backend\AssignedOrderController;
use App\Http\Controllers\Backend\AssignedRequestController;
use App\Http\Controllers\Backend\BuyerController;
use App\Http\Controllers\Backend\EmployeeAssignOrderController;
use App\Http\Controllers\Backend\EmployeeAssignRequestController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PostProductController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\SellerController;
use App\Http\Controllers\Backend\SellRequestController;
use App\Http\Controllers\Backend\SellRequestManageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('products', 'index')->name('products');
    Route::get('product-details/{id}', 'productDetails')->name('product.details');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');

    Route::get('/user/profile', function () {
        return view('backend.pages.profile.show');
    })->name('profile.show');

    Route::get('/user/password/edit', function () {
        return view('backend.pages.profile.password');
    })->name('password.edit');

    //Admin Routes
    Route::resource('admin', AdminController::class);

    //Employee Routes
    Route::resource('employee', EmployeeController::class);

    //Seller Routes
    Route::resource('seller', SellerController::class);

    //Buyer Routes
    Route::resource('buyer', BuyerController::class);

    //products all routes
    Route::resource('product', PostProductController::class);

    //Sell Request Routes 
    Route::post('sell-request/store', [SellRequestController::class, 'store'])->name('sell-request.store');
    Route::post('sell-request/update/{id}', [SellRequestController::class, 'update'])->name('sell-request.update');
    //price
    Route::get('sell-request/price/{id}', [SellRequestController::class, 'price'])->name('sell-request.price');
    //Sell Request Routes
    Route::get('sell-request/pending', [SellRequestController::class, 'pending'])->name('sell-request.pending');
    //accepted
    Route::get('sell-request/accepted', [SellRequestController::class, 'accepted'])->name('sell-request.accepted');
    //completed
    Route::get('sell-request/completed', [SellRequestController::class, 'completed'])->name('sell-request.completed');
    //rejected
    Route::get('sell-request/rejected', [SellRequestController::class, 'rejected'])->name('sell-request.rejected');

    //assign employee all routes
    Route::controller(EmployeeAssignRequestController::class)->group(function () {
        //assign employee
        Route::get('employee-assign-request', 'index')->name('employee-assign-request.index');
        Route::post('employee-assign-request/assigned', 'assigned')->name('employee-assign-request.assigned');
        //completed assign employee
        Route::get('employee-assign-request/picked', 'picked')->name('employee-assign-request.picked');
    });

    //assigned request all routes
    Route::controller(AssignedRequestController::class)->group(function () {
        //assign employee
        Route::get('assigned-request', 'index')->name('assigned-request.index');
        Route::get('assigned-request/accept/{id}', 'accept')->name('assigned-request.accept');
        //picked    
        Route::get('assigned-request/picked', 'picked')->name('assigned-request.picked');
        Route::get('assigned-request/pick/{id}', 'pick')->name('assigned-request.pick');
    });

    Route::controller(AssignedOrderController::class)->group(function () {
        //assign employee
        Route::get('assigned-order', 'index')->name('assigned-order.index');
        Route::get('assigned-order/accept/{id}', 'accept')->name('assigned-order.accept');
        //picked    
        Route::get('assigned-order/delivered', 'delivered')->name('assigned-order.delivered');
        Route::get('assigned-order/deliver/{id}', 'deliver')->name('assigned-order.deliver');
    });



    //admin Sell Request
    Route::controller(AdminSellerRequestController::class)->group(function () {
        Route::get('seller-sell-request/pending', 'pending')->name('seller-sell-request.pending');
        Route::get('seller-sell-request/accepted', 'accepted')->name('seller-sell-request.accepted');
        Route::get('seller-sell-request/rejected', 'rejected')->name('seller-sell-request.rejected');
        //route accept status
        Route::get('seller-sell-request/accept/{id}', 'accept')->name('seller-sell-request.accept');
        //route reject status
        Route::post('seller-sell-request/reject/{id}', 'reject')->name('seller-sell-request.reject');
    });

    Route::post('checkout', [SslCommerzPaymentController::class, 'checkout'])->name('checkout');

    //buyer order
    Route::controller(OrderController::class)->group(function () {
        Route::get('order/pending', 'pending')->name('order.pending');
        Route::get('order/assigned', 'assigned')->name('order.assigned');
        Route::get('order/delivered', 'delivered')->name('order.delivered');

        //employee assign
        Route::post('order/employee-assign', 'employeeAssign')->name('order.employee-assign');
    });


    Route::controller(ReportController::class)->group(function () {
        //sell-report
        Route::get('sell-report', 'sell_report')->name('sell.report');
        Route::get('sell-reports/{day}', 'sell_reports')->name('sell.reports');
        Route::post('sell-report/date-wise', 'date_wise')->name('sell.date-wise');
        Route::get('sell-report/delivered', 'delivered')->name('sell.delivered');

        //sell-pending-report
        Route::get('sell-pending-report', 'sell_pending_report')->name('sell.pending-report');
        Route::get('sell-pending-reports/{day}', 'sell_pending_reports')->name('sell.pending-reports');
        Route::post('sell-pending-report/date-wise', 'sell_pending_date_wise')->name('sell.pending-date-wise');
        Route::get('sell-pending-report/pending', 'pending')->name('sell.pending');


        //purchase-report
        Route::get('purchase-report', 'purchase_report')->name('purchase.report');
        Route::get('purchase-reports/{day}', 'purchase_reports')->name('purchase.reports');
        Route::post('purchase-report/date-wise', 'purchase_date_wise')->name('purchase.date-wise');
        Route::get('purchase-report/bought', 'bought')->name('purchase.bought');
        Route::get('purchase-report/pending', 'purchase_pending')->name('purchase.pending');

        //purchase-pending-report
        Route::get('purchase-pending-report', 'purchase_pending_report')->name('purchase.pending-report');
        Route::get('purchase-pending-reports/{day}', 'purchase_pending_reports')->name('purchase.pending-reports');
        Route::post('purchase-pending-report/date-wise', 'purchase_pending_date_wise')->name('purchase.pending-date-wise');
        Route::get('purchase-pending-report/pending', 'purchase_pending')->name('purchase.pending');
        
    });
});