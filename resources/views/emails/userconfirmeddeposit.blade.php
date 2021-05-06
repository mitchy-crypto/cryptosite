@component('mail::message')
# Make Deposit

Dear {{$user}},

Your request for investment has been received. Send {{$amount}} worth of {{$coin}} to the wallet address below, or scsan the QRcode below to make payment.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
