<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Trang chủ', url('/'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Tin tức', url('blog'));
});

// Home > Blog > bài viết
Breadcrumbs::for('post', function (BreadcrumbTrail $trail, $title, $slug) {
    $trail->parent('blog');
    $trail->push($title,url('post')."/{{slug}}");
});


// Home > About us
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Về chúng tôi', url('about-us'));
});