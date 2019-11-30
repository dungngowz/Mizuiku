<?php
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
?>