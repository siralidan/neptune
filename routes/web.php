<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jurisdictions', function () {
    return view('jurisdictions');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::prefix('corporate')->group(function () {
    Route::get('/ibc-formation', function () {
        return view('corporate/ibc-formation');
    })->name('corporate.ibc-formation');

    Route::get('/registered-agent-services', function () {
        return view('corporate/registered-agent-services');
    })->name('corporate.registered-agent-services');

    Route::get('/trust-and-foundation-registration', function () {
        return view('corporate/trust-and-foundation-registration');
    })->name('corporate.trust-and-foundation-registration');

    Route::get('/nominee-director-and-shareholder-access', function () {
        return view('corporate/nominee-director-and-shareholder-access');
    })->name('corporate.nominee-director-and-shareholder-access');

    Route::get('/bank-account-opening', function () {
        return view('corporate/bank-account-opening');
    })->name('corporate.bank-account-opening');

    Route::get('/accounting-and-auditing', function () {
        return view('corporate/accounting-and-auditing');
    })->name('corporate.accounting-and-auditing');

    Route::get('/legal-opinions-of-distinction', function () {
        return view('corporate/legal-opinions-of-distiction');
    })->name('corporate.legal-opinions-of-distiction');
});

Route::prefix('licensing')->group(function () {
    Route::get('/brokerage-forex', function () {
        return view('licensing/brokerage-forex');
    })->name('licensing.brokerage-forex');

    Route::get('/gaming-and-gambling', function () {
        return view('licensing/gaming-and-gambling');
    })->name('licensing.gaming-and-gambling');

    Route::get('/insurance', function () {
        return view('licensing/insurance');
    })->name('licensing.insurance');

    Route::get('/banking', function () {
        return view('licensing/banking');
    })->name('licensing.banking');

    Route::get('/digital-assets', function () {
        return view('licensing/digital-assets');
    })->name('licensing.digital-assets');
});

Route::prefix('other-services')->group(function () {
    Route::get('/aircraft-and-shipping-registration', function () {
        return view('other-services/aircraft-and-shipping-registration');
    })->name('other-services.aircraft-and-shipping-registration');

    Route::get('/assets-and-investments-advisory', function () {
        return view('other-services/assets-and-investments-advisory');
    })->name('other-services.assets-and-investments-advisory');

    Route::get('/credit-and-bond-institutions', function () {
        return view('other-services/credit-and-bond-institutions');
    })->name('other-services.credit-and-bond-institutions');

    Route::get('/data-reporting', function () {
        return view('other-services/data-reporting');
    })->name('other-services.data-reporting');

    Route::get('/electronic-and-money-services-business', function () {
        return view('other-services/electronic-and-money-services-business');
    })->name('other-services.electronic-and-money-services-business');

    Route::get('/investment-funds', function () {
        return view('other-services/investment-funds');
    })->name('other-services.investment-funds');

    Route::get('/limited-liability-companies', function () {
        return view('other-services/limited-liability-companies');
    })->name('other-services.limited-liability-companies');

    Route::get('/pension-services', function () {
        return view('other-services/pension-services');
    })->name('other-services.pension-services');

    Route::get('/trademark-registration', function () {
        return view('other-services/trademark-registration');
    })->name('other-services.trademark-registration');

    Route::get('/trust-services', function () {
        return view('other-services/trust-services');
    })->name('other-services.trust-services');

    Route::get('/virtual-office-services', function () {
        return view('other-services/virtual-office-services');
    })->name('other-services.virtual-office-services');
});



