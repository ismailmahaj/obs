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

           {{ Form::open(array('route' => 'galerieimg.store', 'files' => true, 'enctype' => 'multipart/form-data')) }}

    <!--{{ Form::text('titre_video',null) }} -->
    {!! Form::file('galerie_img', null, array('class' => 'form-control', 'enctype' => 'multipart/form-data')) !!}}
    {{ Form::submit('Upload') }}
{{ Form::close() }}
</div>