<div class="">
    <small class="text-xs font-bold tracking-wider" style="font-size:0.65rem;">Your active deposit :</small>
    <h2 class="text-xl font-black flex tracking-wider"><small class="self-center">$</small> 0.00</h2>
</div>
<br>
<small class="text-xs font-bold tracking-wider">Balances</small>
<div class="grid grid-cols-5 gap-6">
    @foreach ($selectedCryptos as $crypto)
        @if ($crypto['name'] === "Bitcoin")
            <div class="">
                <div @click="open = !open" class="borderflex flex-col shadow p-2 space-y-3 bg-white" x-data="{open:true}">
                    <div class="flex space-x-2">
                        <img src="{{$crypto['logo_url']}}" class="self-center object-contain h-6" alt="{{$crypto['name']}}">
                        <h2 class="text-xs font-black self-center tracking-wider">{{$crypto['name']}}</h2>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs font-blACK tracking-wider">{{round($crypto['price'],3)}} usd</p>
                    </div>
                    <div x-show="open"  class="mt-3 grid grid-cols-2 gap-2">
                        <a href="" class="bg-purple-500 hover:bg-purple-700 text-white px-2 py-1 rounded-sm text-xs uppercase flex justify-center font-bold"><small>Deposit</small></a>
                        <a href="" class="bg-gray-500 hover:bg-gray-700 text-white px-2 py-1 rounded-sm text-xs uppercase flex justify-center font-bold"><small>Withdraw</small></a>
                    </div>
                </div>
            </div>
        @else
            <div class="">
                <x-partials.balances-card>
                    <x-slot name="img">{{$crypto['logo_url']}}</x-slot>
                    <x-slot name="name">{{$crypto['name']}}</x-slot>
                    <x-slot name="price">{{round($crypto['price'],3)}} usd</x-slot>
                </x-partials.balances-card>
            </div>
        @endif
        
    @endforeach
</div>
<br>
<small class="text-xs font-bold tracking-wider">Wallet stats</small>
{{-- <x-partials.wallet-stat/> --}}
@livewire('user.walletstat')