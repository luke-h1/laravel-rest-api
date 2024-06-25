<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
  return $request->user();
});


Route::group(["prefix" => "v1", "namespace" => "App\Http\Controllers\Api\V1"], function () {
  Route::apiResource("customers", CustomerController::class);
  Route::apiResource("invoices", InvoiceController::class);

  Route::post("invoices/bulk", ["uses" => "InvoiceController@bulkStore"]);
});
