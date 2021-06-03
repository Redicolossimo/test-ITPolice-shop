<?php

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/{any}', function(){
    return view('landing');
})->where('any', '.*');
