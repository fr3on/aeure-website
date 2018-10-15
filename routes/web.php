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
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('aeures', function(Request $request, Response $response){
    include("aeure.php");
	return curl_wrap("method/bench_manager.bench_manager.doctype.site.site.drop_site", ['site_name' => $request->domain, 'mysql_password' => 'Pharao0h,','key' => date('Y-m-d h:i:s')], "POST", "application/json");

	$sites = json_decode(curl_wrap("resource/Site", null, "GET", "application/json"), true);
	//return date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d'))));
	//array_search($request->domain, $sites['data'], true);
	foreach ($sites['data'] as $key => $value) {
		if($request->domain == $value['name']){
			$status = true;
		}else{
			$create_site = json_decode(curl_wrap("method/bench_manager.bench_manager.doctype.site.site.create_site", ['site_name' => $request->domain, 'admin_password' => 'motion', 'mysql_password' => 'Pharao0h,', 'install_erpnext' => false, 'key' => date('Y-m-d h:i:s')], "POST", "application/json"), true);
			if($create_site['message'] == $request->domain){
				curl_wrap("method/bench_manager.bench_manager.doctype.site.site.site_plan", ['site_name' => $request->domain, 'expiry' => date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d')))), 'space' => 10, 'emails' => 1000, 'users' => 5,'key' => date('Y-m-d h:i:s')], "POST", "application/json");
			}
			
		}
	}

	
	return $request->domain;
	
});


Route::get('create-site', function(Request $request){
	include("aeure.php");
	$create_site = curl_wrap("method/bench_manager.bench_manager.doctype.site.site.create_site", ['site_name' => $request->domain, 'admin_password' => 'motion', 'mysql_password' => 'Pharao0h,', 'install_erpnext' => 'true', 'key' => date('Y-m-d h:i:s')], "POST", "application/json");
	$site_name =  json_decode($create_site, true)['message'];
	/*if($site_name == $request->domain){*/
		curl_wrap("method/bench_manager.bench_manager.doctype.site.site.site_plan", ['site_name' => $request->domain, 'expiry' => date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d')))), 'space' => 10, 'emails' => 1000, 'users' => 5,'key' => date('Y-m-d h:i:s')], "POST", "application/json");
	//}
	return $site_name;
});

Route::get('update-plan', function(Request $request){
	include("aeure.php");

	return curl_wrap("method/bench_manager.bench_manager.doctype.site.site.site_plan", ['site_name' => $request->domain, 'expiry' => date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d')))), 'space' => 10, 'emails' => 1000, 'users' => 5,'key' => date('Y-m-d h:i:s')], "POST", "application/json");
});

Route::get('drop-site', function(Request $request){
	include("aeure.php");
	return curl_wrap("method/bench_manager.bench_manager.doctype.site.site.drop_site", ['site_name' => $request->domain, 'mysql_password' => 'Pharao0h,','key' => date('Y-m-d h:i:s')], "POST", "application/json");
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'],function() {
    Route::get('/plan/{type}', ['uses' => 'HomeController@plans']);
    Route::get('checkout', function () {
        return view('checkout');
    });

});

Route::get('/{page}', function (Request $request, $page) {
    if($page == "demo"){ return redirect('https://demo.aeure.com'); }elseif($page == ""){  return view('home'); }else{ return view($page); }
});
