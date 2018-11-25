<?php

namespace Admin\Http\Sections;

use SleepingOwl\Admin\Form\Buttons\Delete;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use App\Models\Goods;
use App\Models\KitOrder;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Facades\Admin;
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
class KitOrders extends Section implements Initializable
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
        $display = \AdminDisplay::datatablesAsync()
            ->setDatatableAttributes(['bInfo' => false])
            ->setDisplaySearch(true)->paginate(10)
            ->setHtmlAttribute('class', 'table-info table-hover');

        $display->setFilters(
            \AdminDisplayFilter::related('datetime')
        );

        $display->setColumns([
             \AdminColumn::datetime('datetime', 'Дата заказа')
            ->setFormat('d.m.Y'),
            \AdminColumn::text('goods', 'Товары'),
            \AdminColumn::text('service', 'Доп. услуги'),
            \AdminColumn::text('city_pickup_code', 'Откуда'),
            \AdminColumn::text('city_delivery_code', 'Куда'),
            \AdminColumn::text('cargo_number', 'Номер заказа'),
        ]);

        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $mOrder = KitOrder::findOrFail($id);

        $service = new KitService();
        $cities = $service->cityTdd()->cities();

        $form = \AdminForm::form()->setHtmlAttribute('class', 'panel panel-default');

        $form->setElements(
            [
                new FormElements(['<div class="text-center lead">Оформление заказа от ' . $mOrder->datetime . '</div>']),
                \AdminFormElement::columns()
                    ->addColumn(function () use ($cities) {
                        return [
                            \AdminFormElement::select('city_pickup_code', 'Откуда', $cities),
                            \AdminFormElement::select('city_delivery_code', 'Куда', $cities),
                        ];
                    })
                    ->addColumn(function () use ($mOrder) {
                        return [
                            new FormElements(['<div class="text-center lead">Товар в заказе</div><br>' . $mOrder->goods])
                        ];
                    }),
                new FormElements(['<div class="text-center lead">Дополнительные услуги</div>']),
                \AdminFormElement::multiselect('service[]', '', $this->service()),
                new FormElements(['<div class="text-center lead">Здесь будет выбор заказчика отправителя и получателя</div>']),
            ]
        );

        $form->getButtons()->replaceButtons(
            [
                'delete' => null,
                'save'   => (new Save())->setGroupElements([
                    'save_and_create' => null,
                    'save_and_close'  => (new SaveAndClose())->setText('Оформить и закрыть'),
            ])->setText('Оформить'),
                'cancel'  => (new Cancel())->setText('Отменить'),
            ]
        );

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
