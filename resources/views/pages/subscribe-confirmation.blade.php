@extends('template.base')

@section('content')

@include('partials.navbar_multi')
<div class=" alert-success text-center">
<h1><strong>Succès</strong> Votre inscription à notre Newsletter a bien été envoyé</h1>
</div>

@endsection

@push('script')
<script>
    function redirect_homepage(){
        setTimeout(function () {
        window.location.href = "{{route('pages.index')}}";
        }, 3000); 
    }
$table->timestamp('confirmed_at')->nullable();
$table->string('confirmation_token')->nullable();

    redirect_homepage()
</script>
@endpush