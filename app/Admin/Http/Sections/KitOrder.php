<?php

namespace App\Admin\Http\Sections;

use App\Models\Goods;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Save;
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

        $cities = $service->cityTdd()->cities();

        $form = \AdminForm::form()->setHtmlAttribute('class', 'panel panel-default');

        $form->setElements(
            [
                new FormElements(['<div class="text-center lead">Расчет стоимости</div>']),
                \AdminFormElement::columns()
                    ->addColumn(function () use ($cities) {
                        return [
                            \AdminFormElement::select('city_pickup_code', 'откуда', $cities),
                        ];
                    })
                    ->addColumn(function () use ($cities) {
                        return [
                            \AdminFormElement::select('city_delivery_code', 'откуда', $cities),
                        ];
                    }),
                new FormElements(['<hr><div class="text-center lead">Укажите параметры мест</div>']),
                \AdminFormElement::columns()
                    ->addColumn([
                        \AdminFormElement::multiselect('service[]', '', $this->service())
                    ]),
                new FormElements(['<hr><div class="text-center lead">Данные по отправлению</div>']),
                \AdminDisplay::datatablesAsync()->setModelClass(Goods::class)
                    ->setColumns([
                        \AdminColumn::custom('№',function( )use (&$i) {return ++$i;}),
                        \AdminColumn::text('brand', 'Бренд'),
                        \AdminColumn::text('products', 'Товары'),
                        \AdminColumn::text('price', 'Цена'),
                        \AdminColumn::custom('Отправитель', function () { $this->sender(); } ),
                        \AdminColumn::custom('Заказчик', function () { $this->customer(); }),
                        \AdminColumn::custom('Получатель', function () { $this->receiver(); }),
                    ])
            ]
        );

        $form->getButtons()->setButtons([
            'send_order' => (new Save())->setText('отправить ордер')
        ]);

        return $form;
    }
    
    //  отправляем для расчета данные
    private function order()
    {

    }

    //  Здесь получим отправителей
    private function sender()
    {
        return 'Отправителев Иван Иваныч';
    }

    //  Здесь получим заказчиков
    private function customer()
    {
        return 'Заказчиков Иван Иваныч';
    }

    //  Здесь получим получателей
    private function receiver()
    {
        return 'Получателев Иван Иваныч';
    }

    private function service()
    {
        return [
            'S026' => 'Пломбирование',
            'T001' => 'Жесткая доупаковка груза',
            'T002' => 'Паллетирование (прозр. пленка)',
            'T003' => 'Паллетирование (черн. пленка)',
            'S082' => 'Растентовка при доставке',
            'S083' => 'Растентовка при заборе',
            'S089' => 'Упаковка в сборный паллетный борт',
        ];
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
