<div class="">
    <small class="text-xs font-bold tracking-wider" style="font-size:0.65rem;">Your active deposit :</small>
    <h2 class="text-xl font-black flex tracking-wider"><small class="self-center">$</small> 0.00</h2>
</div>
<br>
<small class="text-xs font-bold tracking-wider">Balances</small>
<div class="grid grid-cols-5 gap-6">
    @foreach ($selectedCryptos as $crypto)
        <div class="">
            <x-partials.balances-card>
                <x-slot name="img">{{$crypto['logo_url']}}</x-slot>
                <x-slot name="name">{{$crypto['name']}}</x-slot>
                <x-slot name="price">{{round($crypto['price'],3)}} usd</x-slot>
            </x-partials.balances-card>
        </div>
    @endforeach
</div>
<br>
<small class="text-xs font-bold tracking-wider">Wallet stats</small>
{{-- <x-partials.wallet-stat/> --}}
@livewire('user.walletstat')