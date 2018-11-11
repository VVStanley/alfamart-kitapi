<form action="{{ route('admin.kit.confirmation.post') }}" method="POST" class="panel panel-default">
    {{ csrf_field() }}
    <div class="form-elements">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center">Подтверждение</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="kit-submit-block">
                        <button type="submit" class="btn btn-success kit-submit-button">Отправить заявку на перевозку</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <pre>
                    {{ var_dump($request) }}
                    </pre>
                </div>
            </div>
        </div>
    </div>
</form>
