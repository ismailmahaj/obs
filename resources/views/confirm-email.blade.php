@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => url('/confirm/' . $user->confirmation_token)]])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
