@extends('template.base')

@section('content')
@include('partials.navbar_multi')
<h3 class="text-center">Votre message a bien été envoyé.</h3>
@endsection

@push('script')
<script>
    function redirect_homepage(){
        setTimeout(function () {
        window.location.href = "{{route('pages.index')}}";
        }, 3000); 
    }
    redirect_homepage()
</script>
@endpush