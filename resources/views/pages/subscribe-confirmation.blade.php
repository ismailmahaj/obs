@extends('template.base')

@section('content')
<h1>Merci pour votre inscription</h1>
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