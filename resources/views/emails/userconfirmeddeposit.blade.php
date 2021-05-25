@component('mail::message')
# Deposit Transaction
<br>

Dear {{$user}},

Your request for investment has been received. Send {{$amount}}usd worth of {{$coin}} to the wallet address below, or scan the QRcode below to make payment.<br>

# {{$wallet}}

Thanks for investing with us,<br>
{{ config('app.name') }}
@endcomponent
