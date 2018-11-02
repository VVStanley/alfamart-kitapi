<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'ТК КИТ',
        'icon'  => 'fa fa-truck',
        'url'   => route('admin.kit.index'),
    ],

];