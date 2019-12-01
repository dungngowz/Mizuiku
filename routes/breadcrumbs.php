<?php
    // Dashboard
    Breadcrumbs::for('dashboard.index', function ($breadcrumbs) {
        $breadcrumbs->push(trans('dashboard.titleBreadcrumb'), route('dashboard.index'));
    });

    // Introduction
    Breadcrumbs::for('intro.index', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('introduction.titleBreadcrumb'));
    });
    Breadcrumbs::for('intro.program', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('introduction.titleBreadcrumb'));
        $trail->push(trans('introduction.titleProgramBreadcrumb'));
    });
    Breadcrumbs::for('intro.partner', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('introduction.titleBreadcrumb'));
        $trail->push(trans('introduction.titlePartnerBreadcrumb'));
    });

    // News
    Breadcrumbs::for('news.index', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('news.titleBreadcrumb'));
    });
    Breadcrumbs::for('news.program', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('news.titleBreadcrumb'));
        $trail->push(trans('news.titleProgramBreadcrumb'));
    });
    Breadcrumbs::for('news.environment', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('news.titleBreadcrumb'));
        $trail->push(trans('news.titleEnvironmentBreadcrumb'));
    });

    // Library
    Breadcrumbs::for('library.index', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('library.titleBreadcrumb'));
    });
    Breadcrumbs::for('library.image', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('library.titleBreadcrumb'));
        $trail->push(trans('library.titleImageBreadcrumb'));
    });
    Breadcrumbs::for('library.video', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('library.titleBreadcrumb'));
        $trail->push(trans('library.titleVideoBreadcrumb'));
    });

    // Schedule
    Breadcrumbs::for('schedule.index', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('schedule.titleBreadcrumb'));
    });

    // E-Learning
    Breadcrumbs::for('eLearning.index', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('eLearning.titleBreadcrumb'));
    });

    // E-Learning
    Breadcrumbs::for('contact-us.index', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push(trans('contact.titleBreadcrumb'));
    });
?>