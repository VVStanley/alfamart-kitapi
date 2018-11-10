<form action="{{ route('admin.kit.pickup.post') }}" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Забор груза</p>
                </div>
            </div>
            <div class="row kit-flex-center">
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input type="radio" id="pick_up-no" name="pick_up" value="0">
                            Самостоятельно доставлю в офис ТК КИТ
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input type="radio" id="pick_up-yes" name="pick_up" value="1" checked="checked">
                            Необходимо забрать груз по городу
                        </label>
                    </div>
                </div>
            </div>
            <div class="pick_up-block">
                <div class="row kit-flex-center">
                    <div class="col-md-6">
                        <div class="radio">
                            <label>
                                <input type="radio" id="pickup_r-no" name="pickup_r" value="0">
                                С фактического адреса отправителя
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label>
                                <input type="radio" id="pickup_r-yes" name="pickup_r" value="1" checked="checked">
                                С другого адреса
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead text-center">Адрес забора груза</p>
                    </div>
                </div>
                <div class="pickup_r-address">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-element-text">
                                <label for="pickup_street" class="control-label">Улица</label>
                                <input id="pickup_street" name="pickup_street" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-element-text">
                                <label for="pickup_house" class="control-label">Дом</label>
                                <input id="pickup_house" name="pickup_house" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text">
                                <label for="pickup_supp" class="control-label">Корпус</label>
                                <input id="pickup_supp" name="pickup_supp" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text">
                                <label for="pickup_room" class="control-label">Кв/Офис</label>
                                <input id="pickup_room" name="pickup_room" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead text-center">Дата и время забора груза</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-element-date ">
                            <label for="pickup_date" class="control-label">
                                Дата забора
                            </label>
                            <div class="input-date input-group">
                                <input data-date-format="DD-MM-YYYY" data-date-pickdate="true"
                                       data-date-picktime="false"
                                       data-date-useseconds="false" class="form-control" type="text" id="pickup_date"
                                       name="pickup_date"
                                       value="20-08-2027">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-element-text">
                            <label for="pickup_time_start" class="control-label">Со скольки</label>
                            <input id="pickup_time_start" name="pickup_time_start" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-element-text">
                            <label for="pickup_time_end" class="control-label">До скольки</label>
                            <input id="pickup_time_end" name="pickup_time_end" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-element-textarea">
                            <label for="pickup_comment" class="control-label">Коментарий к доставке</label>
                            <textarea id="pickup_comment" name="pickup_comment" rows="3"
                                      class="form-control"></textarea>
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
