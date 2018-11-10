<form action="{{ route('admin.kit.additional.post') }}" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Дополнительные сведения</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="additional_payment_shipping" class="control-label">Перевозку груза и доп. услуги
                        оплачивает</label>
                    <select id="additional_payment_shipping" name="additional_payment_shipping" class="form-control">
                        <option value="AG" selected="selected">Заказчик</option>
                        <option value="SE">Отправитель</option>
                        <option value="WE">Получатель</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text">
                        <label for="additional_payment_shipping_email" class="control-label">Email</label>
                        <input id="additional_payment_shipping_email" name="additional_payment_shipping_email"
                               type="email" class="form-control" value="dostavka@alfamart24.ru">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="additional_payment_pickup" class="control-label">Забор груза оплачивает</label>
                    <select id="additional_payment_pickup" name="additional_payment_pickup" class="form-control">
                        <option value="AG" selected="selected">Заказчик</option>
                        <option value="SE">Отправитель</option>
                        <option value="WE">Получатель</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text">
                        <label for="additional_payment_pickup_email" class="control-label">Email</label>
                        <input id="additional_payment_pickup_email" name="additional_payment_pickup_email"
                               type="email" class="form-control" value="dostavka@alfamart24.ru">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="additional_payment_delivery" class="control-label">Доставку груза оплачивает</label>
                    <select id="additional_payment_delivery" name="additional_payment_delivery" class="form-control">
                        <option value="AG" selected="selected">Заказчик</option>
                        <option value="SE">Отправитель</option>
                        <option value="WE">Получатель</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text">
                        <label for="additional_payment_delivery_email" class="control-label">Email</label>
                        <input id="additional_payment_delivery_email" name="additional_payment_delivery_email"
                               type="email" class="form-control" value="dostavka@alfamart24.ru">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input id="additional_get_message" name="additional_get_message" type="checkbox"
                                       checked="checked">
                                Получать уведомления о движении груза по телефону и ⁄ или email
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="additional-message">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-element-text">
                            <label for="additional_phone" class="control-label">Телефон</label>
                            <input id="additional_phone" name="additional_phone" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-element-text">
                            <label for="additional_email" class="control-label">Email</label>
                            <input id="additional_email" name="additional_email"
                                   type="email" class="form-control" value="dostavka@alfamart24.ru">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="kit-submit-block">
                        <button type="submit" class="btn btn-success kit-submit-button">Следующий шаг</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
