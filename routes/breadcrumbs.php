<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Application
Breadcrumbs::for('#', function (BreadcrumbTrail $trail) {
    $trail->push('Application', '/');
});

// Application > User
Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('User', route('admin.user.index'));
});

// Application > Role
Breadcrumbs::for('role.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Role', route('admin.role.index'));
});

// Application > Home
Breadcrumbs::for('static.home', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Home', route('admin.static.home'));
});

// Application > About Us
Breadcrumbs::for('static.aboutUs', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('About Us', route('admin.static.aboutUs'));
});

// Application > Contact Us
Breadcrumbs::for('static.contactUs', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Contact Us', route('admin.static.contactUs'));
});

// Application > Projects
Breadcrumbs::for('projects.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Projects', route('admin.projects.index'));
});

// Application > Services
Breadcrumbs::for('services.index', function (BreadcrumbTrail $trail) {
    $trail->parent('#');
    $trail->push('Services', route('admin.services.index'));
});
