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

Route::get('/', function () {
    return view('welcome');
});

Route::get('instructions', function() {
    return view('test-instructions');
});

Route::get('/getMedian',function(){

    $random_array = ArrayUtilities::generateRandomArray();
    $median_value = ArrayUtilities::getArrayMedian($random_array);
    $data_obj = new \stdClass;
    $data_obj->random_array = $random_array;
    $data_obj->median_value = $median_value;
    return view('getMedian',["data_obj"=>$data_obj]);
})->middleware('logRequest');

Route::get('/getAverage',function(){
    $random_array = ArrayUtilities::generateRandomArray();
    $average_value = ArrayUtilities::getArrayAverage($random_array);
    $data_obj = new class{};
    $data_obj->random_array = $random_array;
    $data_obj->average_value = $average_value;
    return view('getAverage',["data_obj"=>$data_obj]);
})->middleware('logRequest');

//curl --header "magical-header: 123" http://grand-backend-test.dev/aHeaderInLife 
Route::get('/aHeaderInLife',function(){
    return Response::json(['status'=>'you done it!']);
})->middleware('logRequest','checkHeader');
