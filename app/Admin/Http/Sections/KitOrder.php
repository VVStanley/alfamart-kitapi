<?php

namespace App\Admin\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\FormElements;
use SleepingOwl\Admin\Section;
use Wstanley\Kitapi\KitService;

/**
 * Class KitOrder
 *
 * @property \App\Models\KitOrder $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class KitOrder extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'ТК КИТ секция';

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-truck');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return $this->fireEdit($id = null);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $service = new KitService();

        $city = [];
        foreach ($service->cityTdd()->all() as $item) {
            $city[$item->code] = $item->name;
        }

        $form = \AdminForm::form();

        $form->setHtmlAttribute('class', 'panel panel-default');

        $form->setElements(
            [
                new FormElements(['<div class="text-center lead">Расчет стоимости</div>']),
                \AdminFormElement::columns()
                    ->addColumn(function () use ($city) {
                        return [
                            \AdminFormElement::select('city_pickup_code', 'откуда', $city),
                        ];
                    })
                    ->addColumn(function () use ($city) {
                        return [
                            \AdminFormElement::select('city_delivery_code', 'откуда', $city),
                        ];
                    }),
            ]
        );

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
