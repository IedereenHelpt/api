<?php

use Illuminate\Support\Facades\Route;

Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
