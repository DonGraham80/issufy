<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Firstname:</strong>
            {!! Form::text('Fname', null, array('placeholder' => 'Firstname','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Surname:</strong>
            {!! Form::text('Sname', null, array('placeholder' => 'Surname','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::email('Email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <hr>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>House number:</strong>
            {!! Form::number('House', null, array('placeholder' => 'House NUmber','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Street:</strong>
            {!! Form::text('Street', null, array('placeholder' => 'Street','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>State:</strong>
            {!! Form::text('State', null, array('placeholder' => 'Street','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zip:</strong>
            {!! Form::text('Zip', null, array('placeholder' => 'Street','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Country:</strong>
            {!! Form::text('Country', null, array('placeholder' => 'Street','class' => 'form-control')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> <span class="    glyphicon glyphicon-floppy-save"></span> Submit</button>
    </div>
</div>
