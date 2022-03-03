@component('mail::message')
# Introduction

The body of your message.


@component('mail::button', ['url' => 'http://localhost:8000/ResetPasswordForm/'.$token])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent