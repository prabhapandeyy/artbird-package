<?php
use Illuminate\Support\Facades\Route;

Route::get('calculator',function(){
    echo "hlw from calculator package";
});
// inventory module
Route::get('inventory/index',[ARTBIRD\Module\InventoryController::class,'index'])->name('inventory.index');
Route::get('inventory/create',[ARTBIRD\Module\InventoryController::class,'create'])->name('inventory.create');
Route::post('inventory/store',[ARTBIRD\Module\InventoryController::class,'store'])->name('inventory.store');
Route::get('inventory/edit/{id}',[ARTBIRD\Module\InventoryController::class,'edit'])->name('inventory.edit');
Route::post('inventory/update/{id}', [ARTBIRD\Module\InventoryController::class, 'update'])->name('inventory.update');
Route::DELETE('inventory/destroy/{id}', [ARTBIRD\Module\InventoryController::class, 'destroy'])->name('inventory.destroy');