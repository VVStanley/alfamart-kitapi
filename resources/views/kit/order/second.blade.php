<form action="" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">

            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">2 шаг - Заказчик</p>
                </div>
            </div>
            <div class="row kit-flex-center">
                <div class="col-md-12">
                    <div class="form-group form-element-checkbox ">
                        <div class="checkbox">
                            <label>
                                <input name="debitor_type[3]" type="checkbox" checked="checked">
                                Юридическое лицо
                            </label>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</form>


