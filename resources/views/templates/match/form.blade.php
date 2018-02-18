<div class="row">
    <div class="form-group col-md-6{{ $errors->has('player_one') ? ' has-error' : ''}}">
        <div class="input-group mb-0">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            {!! Form::text('player_one', null, ['class' => 'form-control', 'placeholder' => Lang::get('match.player') .' '. Lang::get('match.one'), 'required' => 'required']) !!}
        </div>
        {!! $errors->first('player_one', '<p class="help-block text-danger">:message</p>') !!}
    </div>
    <div class="form-group col-md-6{{ $errors->has('player_two') ? ' has-error' : ''}}">
        <div class="input-group mb-0">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            {!! Form::text('player_two', null, ['class' => 'form-control', 'placeholder' => Lang::get('match.player') .' '. Lang::get('match.two'), 'required' => 'required']) !!}
        </div>
        {!! $errors->first('player_two', '<p class="help-block text-danger">:message</p>') !!}
    </div>
</div>
<div class="form-group row mb-0">
    <div class="col-md-12 text-center">
        {{ Form::button('<i class="fa fa-bowling-ball"></i>' .' '. Lang::get('match.start'), ['type' => 'submit', 'class' => 'btn btn-primary px-5 mt-4'] )  }}
    </div>
</div>


