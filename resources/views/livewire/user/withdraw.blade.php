@if (session('confirmwithdrawal'))
    <x-user.confirm-withdrawal :walletAddress="$walletAddress" :selectedCrypto="$selectedCrypto" :activeWallet="$activeWallet" :cryptoequi="$cryptoequivalent" :withdrawalAmount="$amount"/>    
@else
    <x-user.transferdetails :selectedCrypto="$selectedCrypto" :cryptos="$cryptos" :activeWallet="$activeWallet"/>
@endif