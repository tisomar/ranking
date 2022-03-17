<?php

use Illuminate\Support\Facades\DB;

Route::get('email-test', function(){



    $details['email'] = 'tisomar@gmail.com';



    dispatch(new App\Jobs\SendEmailJob($details));



    dd('done');

});
