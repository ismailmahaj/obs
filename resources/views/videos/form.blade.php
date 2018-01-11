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

           {{ Form::open(array('route' => 'videos.store', 'files' => true, 'enctype' => 'multipart/form-data')) }}

    
    {{ Form::file('img_video', ['class' => 'form-control']) }}
    {{ Form::text('lien_video') }}
    {{ Form::submit('Upload') }}
{{ Form::close() }}
</div>