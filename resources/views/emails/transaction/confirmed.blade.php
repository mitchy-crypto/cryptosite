@component('mail::message')
# Introduction

The body of your message for confirmed transaction.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
