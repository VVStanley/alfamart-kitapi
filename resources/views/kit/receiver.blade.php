<form action="{{ route('admin.kit.receiver.post') }}" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Получатель</p>
                </div>
            </div>

            <div class="row kit-flex-center">
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input type="radio" id="receiver-no" name="receiver" value="0">
                            Получатель является заказчиком
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input type="radio" id="receiver-yes" name="receiver" value="1" checked="checked">
                            Получатель не является заказчиком
                        </label>
                    </div>
                </div>
            </div>

            <div class="receiver">
                <div class="row">
                    <div class="col-md-12">
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" id="debitor-physical" name="debitor_type" value="1" checked="checked">
                                Физическое лицо
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" id="debitor-individual" name="debitor_type" value="2">
                                Индивидуальный прдприниматель (ИП)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" id="debitor-legal" name="debitor_type" value="3">
                                Юридическое лицо
                            </label>
                        </div>
                    </div>
                </div>

                <div class="kit-physical">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead text-center">Введите данные физического лица</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-element-text">
                                <label for="real_contact_name" class="control-label">ФИО</label>
                                <input id="real_contact_name" name="real_contact_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-element-text">
                                <label for="real_contact_phone" class="control-label">Телефон</label>
                                <input id="real_contact_phone" name="real_contact_phone" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
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
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_city" class="control-label">Город</label>
                                <input id="real_city" name="real_city" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_street" class="control-label">Улица</label>
                                <input id="real_street" name="real_street" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_house" class="control-label">Дом</label>
                                <input id="real_house" name="real_house" type="text" value="" class="form-control">
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
                </div>

                <div class="kit-individual">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead text-center">Введите данные индивидуального предпринимателя</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="name_ip" class="control-label">ФИО контактного лица</label>
                                <input id="name_ip" name="name_ip" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="phone_ip" class="control-label">Телефон контактного лица</label>
                                <input id="phone_ip" name="phone_ip" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="organization_name_ip" class="control-label">ФИО ИП полностью</label>
                                <input id="organization_name_ip" name="organization_name_ip" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="organization_phone_ip" class="control-label">Телефон организации</label>
                                <input id="organization_phone_ip" name="organization_phone_ip" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="inn_ip" class="control-label">ИНН</label>
                                <input id="inn_ip" name="inn_ip" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_city" class="control-label">Город</label>
                                <input id="legal_city" name="legal_city" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_street" class="control-label">Улица</label>
                                <input id="legal_street" name="legal_street" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_house" class="control-label">Дом</label>
                                <input id="legal_house" name="legal_house" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_supp" class="control-label">Корпус</label>
                                <input id="legal_supp" name="legal_supp" type="text" class="form-control">
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
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_city" class="control-label">Город</label>
                                <input id="real_city" name="real_city" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_street" class="control-label">Улица</label>
                                <input id="real_street" name="real_street" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_house" class="control-label">Дом</label>
                                <input id="real_house" name="real_house" type="text" value="" class="form-control">
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
                </div>

                <div class="kit-legal">
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
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="phone_ur" class="control-label">Телефон контактного лица</label>
                                <input id="phone_ur" name="phone_ur" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="organization_name_ur" class="control-label">Название организации</label>
                                <input id="organization_name_ur" name="organization_name_ur" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="organization_phone_ur" class="control-label">Телефон организации</label>
                                <input id="organization_phone_ur" name="organization_phone_ur" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-element-text ">
                                <label for="inn_ur" class="control-label">ИНН</label>
                                <input id="inn_ur" name="inn_ur" type="text" value="" class="form-control">
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
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_city" class="control-label">Город</label>
                                <input id="legal_city" name="legal_city" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_street" class="control-label">Улица</label>
                                <input id="legal_street" name="legal_street" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_house" class="control-label">Дом</label>
                                <input id="legal_house" name="legal_house" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="legal_supp" class="control-label">Корпус</label>
                                <input id="legal_supp" name="legal_supp" type="text" class="form-control">
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
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_city" class="control-label">Город</label>
                                <input id="real_city" name="real_city" type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_street" class="control-label">Улица</label>
                                <input id="real_street" name="real_street" type="text" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-element-text ">
                                <label for="real_house" class="control-label">Дом</label>
                                <input id="real_house" name="real_house" type="text" value="" class="form-control">
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
