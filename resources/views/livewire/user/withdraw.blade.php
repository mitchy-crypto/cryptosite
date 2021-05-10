@if (session('confirmwithdrawal'))
    <x-user.confirm-withdrawal :activeWallet="$activeWallet" :cryptoequi="$cryptoequivalent" :withdrawalAmount="$amount"/>    
@else
    <x-user.transferdetails :selectedCrypto="$selectedCrypto" :coin="$coin" :cryptos="$cryptos" :activeWallet="$activeWallet"/>
@endif