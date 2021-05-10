<div>
    <x-modals.confirmation name="proceed-to-confirm-deposit">
        <x-slot name="title">
            <h2 class="capitalize text-xs font-bold tracking-wider">Proceed to confirmation?</h2>
        </x-slot>
        <x-slot name="body">
            <small class="text-xs tracking-wider">Click confirm to complete transaction.</small>
        </x-slot>
    
        <x-slot name="footer">
            <button onclick="$modals.show('')" class="self-center text-xs rounded bg-gray-400 text-white py-1 px-3">Cancel</i></button>
            <button wire:click="confirmdeposit" class="disabled:opacity-25 transition ease-in-out duration-150 self-center text-xs rounded bg-green-400 text-white py-1 px-3">Confirm <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
        </x-slot>
    </x-modals.confirmation>
    <br>
    <div class="">
        <small class="text-xs font-bold tracking-wider">Your active deposit:</small>
        <h2 class="text-2xl font-black tracking-wider">0.00 usd</h2>
    </div>
    <div class="my-3">
        <small class="font-bold text-xs text-gray-700 tracking-wider" style="font-size: 0.75rem">Top-up Amount or make New Deposit:</small>
    </div>
    <div class="flex space-x-2">
        <div class="p-0.5 flex md:w-64 h-8 border bg-gray-100 border-gray-200 rounded">
            <input wire:model.debounce.1000ms="amount" placeholder="amount in usd" type="number" step=".01" class='text-sm py-1 bg-gray-100 shadow-none focus:bg-gray-100 border-none focus:ring-gray-100 focus:ring-opacity-50'>
            <x-selectinput wire:model.defer="coin" :items="App\Models\Wallet::all()">
                <x-slot name="selected">
                    <span x-text="item.code" class="self-center ml-1 block"></span>
                </x-slot>
                <x-slot name="itemArray">
                    <img x-bind:src="`${item.image}`" alt="" class="flex-shrink-0 h-5 w-5 rounded-full self-center"> 
                    <span :class="{ 'font-semibold': activeItem === item.id }" class="self-center ml-1 block font-normal" x-text="item.code"></span>
                </x-slot>
            </x-selectinput>
        </div>
        <div wire:loading class="self-center">
            <i class="text-green-500 fas fa-spinner fa-pulse"></i>
        </div>
    </div>
    @error('amount') <span class="text-xs text-red-700 mt-1">{{ $message }} <br></span> @enderror
    <br>
    <div class="grid grid-cols-5 gap-6">
        @foreach ($responses as $response) 
            <div class="flex flex-col shadow p-2 space-y-3 bg-white {{$activeWallet === $response['currency'] ? 'border border-green-300 ring-2 ring-green-500' : ''}}}">
                <div class="flex space-x-2">
                    <img src="{{$response['logo_url']}}" class="self-center object-contain h-6" alt="sth">
                    <h2 class="text-xs font-black self-center tracking-wider">{{$response['name']}}</h2>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-xs font-black">1 {{$response['currency']}}</h2>
                    <p class="text-xs tracking-wider">{{number_format($response['price'], 3)}} usd</p>
                    <p class="text-xs mt-2 font-semibold tracking-wider">Your deposit: 0 usd</p>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <div class="flex justify-between">
        <small class="self-center text-xs font-bold">If you have any questions, please go to the <b class="text-green-500">video representation section</b></small>
        <button onclick="$modals.show('proceed-to-confirm-deposit')" class="self-center text-xs rounded bg-green-400 text-white py-1 px-3">Next <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
    </div>
    <br>
</div>
