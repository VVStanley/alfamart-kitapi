<form action="{{ route('admin.kit.calculate') }}" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Расчет стоимости</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-element-select {{ $errors->has('city_pickup_code') ? 'has-error' : '' }}">
                        <label for="city_pickup_code" class="control-label">Откуда</label>
                        <select id="city_pickup_code" name="city_pickup_code" class="form-control select2">
                            <option value="0">Выберите</option>
                            @forelse($cities as $city)
                                <option value="{{ $city->code }}">{{ $city->name }}</option>
                            @empty
                                <option>что-то пошло не так</option>
                            @endforelse
                        </select>
                        @if($errors->has('city_pickup_code'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-select {{ $errors->has('city_delivery_code') ? 'has-error' : '' }}">
                        <label for="city_delivery_code" class="control-label">Куда</label>
                        <select id="city_delivery_code" name="city_delivery_code" class="form-control select2">
                            <option value="0">Выберите</option>
                            @forelse($cities as $city)
                                <option value="{{ $city->code }}">{{ $city->name }}</option>
                            @empty
                                <option>что-то пошло не так</option>
                            @endforelse
                        </select>
                        @if($errors->has('city_delivery_code'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row kit-flex-center">
                <div class="col-md-6">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input id="pick_up" name="pick_up" type="checkbox" checked="checked">
                                Забор груза по городу
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input id="delivery" name="delivery" type="checkbox">
                                Доставка груза по городу
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Укажите параметры мест</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input id="all_places_same" name="all_places_same" type="checkbox">
                                Все места одинаковы по размеру
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row kit-position" id="kit-position">
                <div class="col-md-12 kit-flex-end">
                    <div class="form-group form-element-text col-md-3 {{ $errors->has('count_place.*') ? 'has-error' : '' }}">
                        <label for="count_place" class="control-label">Количество мест</label>
                        <input id="count_place" name="count_place[]" type="text" class="form-control">
                        @if($errors->has('count_place.*'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                    <div class="form-group form-element-text col-md-3 {{ $errors->has('weight.*') ? 'has-error' : '' }}">
                        <label for="weight" class="control-label">Масса КГ</label>
                        <input id="weight" name="weight[]" type="text" class="form-control">
                        @if($errors->has('weight.*'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                    <div class="form-group form-element-text col-md-3 {{ $errors->has('volume.*') ? 'has-error' : '' }}">
                        <label for="volume" class="control-label">Объем груза</label>
                        <input id="volume" name="volume[]" type="text" class="form-control">
                        @if($errors->has('volume.*'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <input type="hidden" class="number" value="1">
                        <button class="btn btn-success" id="kit-add-position">Добавить позицию</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Страхование перевозки</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-element-text {{ $errors->has('declared_price') ? 'has-error' : '' }}">
                        <label for="declared_price" class="control-label">Стоимость груза</label>
                        <input id="declared_price" name="declared_price" type="text" class="form-control">
                        @if($errors->has('declared_price'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text">
                        <div class="form-group form-element-select">
                            <label for="cargo_type_code" class="control-label">Код характера груза</label>
                            <select id="cargo_type_code" name="cargo_type_code" class="form-control">
                                <option value="03">Без особых условий</option>
                                <option value="01">Хрупкий</option>
                                <option value="02">Стекло</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row kit-flex-center">
                <div class="col-md-6">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input id="insurance" name="insurance" type="checkbox" checked="checked">
                                Страхование груза
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-select">
                        <label for="insurance_agent_code" class="control-label">Страховая компания 8001468510</label>
                        <select id="insurance_agent_code" name="insurance_agent_code" class="form-control">
                            @forelse($insurance as $item)
                                <option value="{{ $item->code }}"

                                @if($item->code == '8001468510')
                                    selected="selected"
                                @endif

                                >{{ $item->name }}</option>
                            @empty
                                <option>что-то пошло не так</option>
                            @endforelse
                        </select>
                    </div>
                </div>
            </div>
            <div class="row kit-flex-center">
                <div class="col-md-12">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input id="have_doc" name="have_doc" type="checkbox" checked="checked">
                                Есть документы подтверждающие стоимость груза
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Дополнительные услуги</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[S026]" type="checkbox">
                                Пломбирование
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[T001]" type="checkbox" checked="checked">
                                Жесткая доупаковка груза
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[T002]" type="checkbox">
                                Паллетирование (прозр. пленка)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[T003]" type="checkbox">
                                Паллетирование (черн. пленка)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[S082]" type="checkbox">
                                Растентовка при доставке
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[S083]" type="checkbox">
                                Растентовка при заборе
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="service[S089]" type="checkbox">
                                Упаковка в сборный паллетный борт
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    @if (isset($cost))
                        <p class="lead text-center">Стоимость доставки: <span class="kit-cost">{{ $cost }}</span></p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="kit-submit-block">
                        <button type="submit" class="btn btn-success kit-submit-button">Расчитать</button>
                    </div>
                </div>
                <div class="col-md-6">
                    @if (isset($cost))
                        <div class="kit-submit-block">
                            <a href="{{ route('admin.kit.order.second') }}"
                               class="btn btn-success kit-submit-button">Оформить</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
