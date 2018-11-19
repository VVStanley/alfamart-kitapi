<form action="{{ route('admin.kit.sender.post') }}" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Отправитель</p>
                </div>
            </div>
            <div class="row kit-flex-end mb-1">
                <div class="col-md-6">
                    <label for="country_code" class="control-label">Страна</label>
                    <select id="country_code" name="country_code" class="form-control">
                        @forelse($countries as $country)
                            <option value="{{ $country->code }}"

                                @if($country->code == 'RU')
                                    selected="selected"
                                @endif

                            >{{ $country->name }}</option>
                        @empty
                            <option>что-то пошло не так</option>
                        @endforelse
                    </select>
                    @if($errors->has('country_code'))
                        <ul class="form-element-errors">
                            <li>Обязательное поле</li>
                        </ul>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-checkbox mt-2">
                        <div class="checkbox">
                            <label>
                                <input name="debitor_type[3]" type="checkbox" checked="checked">
                                Юридическое лицо
                            </label>
                            @if($errors->has('debitor_type'))
                                <ul class="form-element-errors">
                                    <li>Обязательное поле</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Введите данные юридического лица</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-element-text ">
                        <label for="name_ur" class="control-label">ФИО контактного лица</label>
                        <input id="name_ur" name="name_ur" type="text" value="" class="form-control">
                        @if($errors->has('name_ur'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text ">
                        <label for="phone_ur" class="control-label">Телефон контактного лица</label>
                        <input id="phone_ur" name="phone_ur" type="text" value="" class="form-control">
                        @if($errors->has('phone_ur'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-element-text ">
                        <label for="organization_name_ur" class="control-label">Название организации</label>
                        <input id="organization_name_ur" name="organization_name_ur" type="text" value="" class="form-control">
                        @if($errors->has('organization_name_ur'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text ">
                        <label for="organization_phone_ur" class="control-label">Телефон организации</label>
                        <input id="organization_phone_ur" name="organization_phone_ur" type="text" value="" class="form-control">
                        @if($errors->has('organization_phone_ur'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-element-text ">
                        <label for="inn_ur" class="control-label">ИНН</label>
                        <input id="inn_ur" name="inn_ur" type="text" value="" class="form-control">
                        @if($errors->has('inn_ur'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-element-text ">
                        <label for="kpp" class="control-label">КПП</label>
                        <input id="kpp" name="kpp" type="text" value="" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Юридический адрес</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="legal_country" class="control-label">Страна</label>
                    <select id="legal_country" name="legal_country" class="form-control">
                        @forelse($countries as $country)
                            <option value="{{ $country->code }}"
                                    @if($country->code == 'RU')
                                    selected="selected"
                                @endif
                            >{{ $country->name }}</option>
                        @empty
                            <option>что-то пошло не так</option>
                        @endforelse
                    </select>
                    @if($errors->has('legal_country'))
                        <ul class="form-element-errors">
                            <li>Обязательное поле</li>
                        </ul>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="legal_city" class="control-label">Город</label>
                        <input id="legal_city" name="legal_city" type="text" value="" class="form-control">
                        @if($errors->has('legal_city'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="legal_street" class="control-label">Улица</label>
                        <input id="legal_street" name="legal_street" type="text" value="" class="form-control">
                        @if($errors->has('legal_street'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="legal_house" class="control-label">Дом</label>
                        <input id="legal_house" name="legal_house" type="text" value="" class="form-control">
                        @if($errors->has('legal_house'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="legal_supp" class="control-label">Корпус</label>
                        <input id="legal_supp" name="legal_supp" type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="legal_room" class="control-label">Квартира</label>
                        <input id="legal_room" name="legal_room" type="text" value="" class="form-control">
                    </div>
                </div>
            </div>
            {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
            {{--<div class="form-group form-element-checkbox mt-2">--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input name="debitor_type[3]" type="checkbox" checked="checked">--}}
            {{--Юридический адрес равен фактическому--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Фактический адрес</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="real_country" class="control-label">Страна</label>
                    <select id="real_country" name="real_country" class="form-control">
                        @forelse($countries as $country)
                            <option value="{{ $country->code }}"
                                    @if($country->code == 'RU')
                                    selected="selected"
                                @endif
                            >{{ $country->name }}</option>
                        @empty
                            <option>что-то пошло не так</option>
                        @endforelse
                    </select>
                    @if($errors->has('real_country'))
                        <ul class="form-element-errors">
                            <li>Обязательное поле</li>
                        </ul>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="real_city" class="control-label">Город</label>
                        <input id="real_city" name="real_city" type="text" value="" class="form-control">
                        @if($errors->has('real_city'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="real_street" class="control-label">Улица</label>
                        <input id="real_street" name="real_street" type="text" value="" class="form-control">
                        @if($errors->has('real_street'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="real_house" class="control-label">Дом</label>
                        <input id="real_house" name="real_house" type="text" value="" class="form-control">
                        @if($errors->has('real_house'))
                            <ul class="form-element-errors">
                                <li>Обязательное поле</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="real_supp" class="control-label">Корпус</label>
                        <input id="real_supp" name="real_supp" type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-element-text ">
                        <label for="real_room" class="control-label">Квартира</label>
                        <input id="real_room" name="real_room" type="text" value="" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
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
