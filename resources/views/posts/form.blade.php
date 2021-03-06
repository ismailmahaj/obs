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
<div id="ajoutarticle" class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Date</strong>
            {!! Form::date('date', null, array('placeholder' => 'Date','class' => 'form-control' ,'' => 'id')) !!}
        </div>
        <div class="form-group">
            <strong>Lieu</strong>
            {!! Form::text('lieu', null, array('placeholder' => 'Lieu','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Adresse</strong>
            {!! Form::text('adresse', null, array('placeholder' => 'Adresse','class' => 'form-control')) !!}
   
        </div>
        <div class="form-group">
            <strong>Description</strong>
            {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Lien Billetterie</strong>
            {!! Form::text('lien_billetterie', null, array('placeholder' => 'Lien Billetterie','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Lien Image</strong>
<!-- <<<<<<< HEAD
            <!-- {!! Form::file('lien_image', null, array('placeholder' => 'Lien Image','class' => 'form-control')) !!} -->
            <!-- <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
    <label>Sélectionner l'image à uploader</label>
    <input type="file" name="lien_image" id="file">
    <input type="submit" value="test" name="submit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form> --> -->
             {!! Form::file('lien_image', null, array('class' => 'form-control', 'enctype' => 'multipart/form-data')) !!}
            <!--<input type="file" name="lien_image" id="file">-->
    <input type="hidden" value="{{ csrf_token() }}" name="_token">

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            {!! Form::textarea('content', null, array('placeholder' => 'Contenu','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" value="Upload" name="submit" class="btn btn-primary">Envoyer</button>
    </div>
</div>