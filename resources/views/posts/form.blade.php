@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titre:</strong>
            {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>date:</strong>
            {!! Form::text('date', null, array('placeholder' => 'date','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>lieu:</strong>
            {!! Form::text('lieu', null, array('placeholder' => 'lieu','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>adresse:</strong>
            {!! Form::text('adresse', null, array('placeholder' => 'adresse','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>description:</strong>
            {!! Form::text('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>lien_billetterie:</strong>
            {!! Form::text('lien_billetterie', null, array('placeholder' => 'lien_billetterie','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>lien_image:</strong>
            {!! Form::text('lien_image', null, array('placeholder' => 'lien_image','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content:</strong>
            {!! Form::textarea('content', null, array('placeholder' => 'Content','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>