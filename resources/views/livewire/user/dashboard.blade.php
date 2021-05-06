<div class="">
    <small class="text-xs font-bold" style="font-size:0.65rem;">Your active deposit :</small>
    <h2 class="text-xl font-black">$ 17,350.00</h2>
</div>
<br>
<small class="text-xs font-bold">Balances</small>
<div class="grid grid-cols-5 gap-6">
    <div class="">
        <x-partials.balances-card>
            <x-slot name="img">https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/btc.svg</x-slot>
            <x-slot name="name">Bitcoin</x-slot>
        </x-partials.balances-card>
    </div>
    <div class="">
        <x-partials.balances-card>
            <x-slot name="img">https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/eth.svg</x-slot>
            <x-slot name="name">Ethereum</x-slot>
        </x-partials.balances-card>
    </div>
    <div class="">
        <x-partials.balances-card>
            <x-slot name="img">https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/BCH.png</x-slot>
            <x-slot name="name">Bitcoin Cash</x-slot>
        </x-partials.balances-card>
    </div>
    <div class="">
        <x-partials.balances-card>
            <x-slot name="img">https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/ltc.svg</x-slot>
            <x-slot name="name">Litecoin</x-slot>
        </x-partials.balances-card>
    </div>
    <div class="">
        <x-partials.balances-card>
            <x-slot name="img">https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/XRP.svg</x-slot>
            <x-slot name="name">Ripple</x-slot>
        </x-partials.balances-card>
    </div>
</div>
<br>
<small class="text-xs font-bold">Wallet stats</small>
{{-- <x-partials.wallet-stat/> --}}
@livewire('user.walletstat')