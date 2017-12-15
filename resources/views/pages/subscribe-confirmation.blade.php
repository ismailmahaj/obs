@extends('template.base')

@section('content')
@include('partials.navbar_multi')
<h1>Merci pour votre inscription</h1>
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