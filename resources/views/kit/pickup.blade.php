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
                </div>
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input checked="checked" type="radio" name="pick_up" value="1">
                            Необходимо забрать груз по городу
                        </label>
                    </div>
                </div>
            </div>
            <div class="row kit-flex-center">
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input checked="checked" type="radio" name="pickup_r" value="0">
                            С фактического адреса отправителя
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input checked="checked" type="radio" name="pickup_r" value="1">
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
            <div class="kit-address">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-element-text">
                            <label for="declared_price" class="control-label">Улица</label>
                            <input id="declared_price" name="declared_price" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-element-text">
                            <label for="declared_price" class="control-label">Дом</label>
                            <input id="declared_price" name="declared_price" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-element-text">
                            <label for="declared_price" class="control-label">Корпус</label>
                            <input id="declared_price" name="declared_price" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-element-text">
                            <label for="declared_price" class="control-label">Кв/Офис</label>
                            <input id="declared_price" name="declared_price" type="text" class="form-control">
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
                        <label for="date" class="control-label">
                            Дата забора
                        </label>
                        <div class="input-date input-group">
                            <input  data-date-format="DD-MM-YYYY" data-date-pickdate="true" data-date-picktime="false" data-date-useseconds="false" class="form-control" type="text" id="date" name="date" value="20-08-2027">
                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text">
                            <label for="declared_price" class="control-label">Со скольки</label>
                            <input id="declared_price" name="declared_price" type="text" class="form-control">
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text">
                            <label for="declared_price" class="control-label">До скольки</label>
                            <input id="declared_price" name="declared_price" type="text" class="form-control">
                        </div>
                </div>
            </div>


        </div>
    </div>

</form>
