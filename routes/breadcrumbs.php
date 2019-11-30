<?php
    Breadcrumbs::for('home', function ($breadcrumbs) {
        $breadcrumbs->push('Home', route('dashboard.index'));
    });
?>