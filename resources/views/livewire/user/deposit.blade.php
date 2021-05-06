@if (session('confirmdeposit'))
    <x-user.confirm-deposit :activeWallet="$activeWallet" :cryptoEquivalentOfDeposit="$cryptoEquivalentOfDeposit" :depositAmount="$depositAmount"/>    
@else
    <x-user.deposit :responses="$responses" :activeWallet="$activeWallet"/>
@endif