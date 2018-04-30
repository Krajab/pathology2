<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [

    	'/get_sub_districts',
    	'/get_facility_list',
        '/get_facility_info',
        '/get_facility_personnel'
        //
    ];
}
