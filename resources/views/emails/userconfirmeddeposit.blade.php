@component('mail::message')
# Deposit Transaction
<br>

Dear {{$user}},

Your request for investment has been received. Send {{$amount}}usd worth of {{$coin}} to the wallet address below, or scsan the QRcode below to make payment.

@component('mail::button', ['url' => ''])
Go Back
@endcomponent

Thanks for investing with us,<br>
{{ config('app.name') }}
@endcomponent
