<?php
// Home
Breadcrumbs::register('home', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
});

// Home > About Us
Breadcrumbs::register('about_us', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About Us', route('about_us'));
});

// Home > Contact Us
Breadcrumbs::register('contact_us', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact Us', route('contact_us'));
});

// Home > Login
Breadcrumbs::register('login', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Login', route('login'));
});

// Home > Contact Us
Breadcrumbs::register('sign_up', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Sign Up', route('sign_up'));
});

Breadcrumbs::register('hospital', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Hospital', route('hospital'));
});
Breadcrumbs::register('hospital_info', function($breadcrumbs)
{
    $breadcrumbs->parent('hospital');
    $breadcrumbs->push('Hospital Info', route('hospital_info'));
});

Breadcrumbs::register('doctor', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Doctor', route('doctor'));
});
Breadcrumbs::register('doctor_info', function($breadcrumbs)
{
    $breadcrumbs->parent('doctor');
    $breadcrumbs->push('Doctor Info', route('doctor_info'));
});

?>