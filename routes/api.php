<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/get-all-invoices', [InvoiceController::class, 'getAllInvoices']);
Route::get('/add-invoice', [InvoiceController::class, 'addInvoice']);
Route::get('/search_invoice', [InvoiceController::class, 'searchInvoice']);
Route::get('/create_invoice', [InvoiceController::class, 'createInvoice']);
Route::get('/customers', [CustomerController::class, 'getAllCustomers']);
Route::get('/products', [ProductController::class, 'getAllProducts']);