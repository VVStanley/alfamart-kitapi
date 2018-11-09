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
                                <input type="radio" id="debitor-physical" name="receiver-debitor" checked="checked">
                                Физическое лицо
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" id="debitor-individual" name="receiver-debitor">
                                Индивидуальный прдприниматель (ИП)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" id="debitor-legal" name="receiver-debitor">
                                Юридическое лицо
                            </label>
                        </div>
                    </div>
                </div>



                <div class="physical">


                </div>
                <div class="individual">


                </div>
                <div class="legal">


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