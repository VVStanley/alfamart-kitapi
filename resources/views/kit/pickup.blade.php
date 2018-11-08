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
                <div class="col-md-6"></div>
            </div>

        </div>
    </div>

</form>