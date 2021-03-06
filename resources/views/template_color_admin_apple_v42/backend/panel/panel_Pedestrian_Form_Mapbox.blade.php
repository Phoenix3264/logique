{!!color_admin_apple_v42_open_form_enctype_with_id($id)!!}
@csrf

<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.'.$controller.'.panel_heading')
    </div>
    <div class="panel-body">
        <div class="form-group row">
            <label class="col-md-2 col-form-label">
                Locate by GPS
            </label>
            <div class="col-md-10">
                <div id='map' style='width: 100%; height: 420px;'></div>
            </div>
        </div>
        <div id="form">
        </div>
    </div>
</div>

{!!color_admin_apple_v42_submit('submit',$id,'submit','SUBMIT',$dmha_271)!!}

{!!UI_FORM_close_form()!!}