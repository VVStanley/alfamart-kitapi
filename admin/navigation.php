<?php

/**
* @var \SleepingOwl\Admin\Contracts\Navigation\NavigationInterface $navigation
* @see http://sleepingowladmin.ru/docs/menu_configuration
 */

use SleepingOwl\Admin\Navigation\Page;

$navigation->setFromArray([
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
]);



