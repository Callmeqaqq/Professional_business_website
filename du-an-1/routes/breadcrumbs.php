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

//Home > Shop
Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Cửa Hàng', url('shop'));
});

//Home > ProductDetail
Breadcrumbs::for('products', function (BreadcrumbTrail $trail) {
    $trail->parent('shop');
    $trail->push('Chi tiết sản phẩm', url('products')."/{{slug}}");
});

//Shop > ProductDetails

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
