<?php
Route::resource('resource/{table}/resource', 'ResourceController')->names([
    'index'     => 'resource.index',
    'create'    => 'resource.create',
    'store'     => 'resource.store',
    'show'      => 'resource.show',
    'edit'      => 'resource.edit',
    'update'    => 'resource.update',
    'destroy'   => 'resource.destroy'
]);
