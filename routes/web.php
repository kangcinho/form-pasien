<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('formpasien',[
	'uses' => 'PasienController@showPasien'
]);

Route::post('formpasien',[
	'uses' => 'PasienController@savePasien'
]);

Route::get('getPasienIndividual/{nrm}', array(
  'uses' => 'PasienController@getPasienIndividual',
));

Route::get('formpasien/print', [
	'uses' => 'PrinterController@print'
]);

Route::get('getKabupaten/{idKabupaten}',array(
	'uses' => 'PasienController@getKabupatenAjax'
));

Route::get('getKecamatan/{idKecamatan}',array(
	'uses' => 'PasienController@getKecamatanAjax'
));

Route::get('getPerusahaanBPJS', array(
	'uses' => 'PasienController@getPerusahaanBPJS'
));

Route::get('getPerusahaanIKS', array(
	'uses' => 'PasienController@getPerusahaanIKS'
));

Route::get('printGeneralConsent', function(){
	return view('print.GeneralConsentRI');
});

Route::get('/', function () {
    return redirect('formpasien');
});

Route::get('formpasien/global',[
	'uses' => 'PasienController@showGlobal'
]);

