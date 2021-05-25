<div class="mt-5">
    <x-modals.confirmation name="select-coin">
        <x-slot name="title">
            <h2 class="capitalize text-xs font-bold">Select currency</h2>
        </x-slot>
        <x-slot name="body">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($cryptos as $crypto)
                <button onclick="$modals.show('')" wire:click="selectCrypto('{{$crypto['id']}}')" class="cursor-pointer {{$activeWallet == $crypto['id'] ? 'bg-purple-500 text-white' : ' text-gray-500'}} p-2 border rounded flex flex-col space-y-1 items-center justify-center">
                    <img src="{{$crypto['logo_url']}}" class="h-5 w-5 self-center" alt="{{$crypto['currency']}}">
                    <p class="text-xs font-bold text-center self-center mt-1" style="font-size: 0.55rem">{{$crypto['currency']}}</p>
                </button>
                @endforeach           
            </div>
        </x-slot>
        <x-slot name="footer"></x-slot>
    </x-modals.confirmation>
    <br>
    <h2 class="text-sm tracking-wider font-black text-indigo-900 mb-1">Send crypto currency to an external wallet the fastest way possible</h2>
    <p class="text-gray-500 text-xs font-semibold">Select the coin and amount you want to send, then indicate the destination to complete your transaction. </p>
    <br>
    <div class="flex justify-between">
        <a href="" class="flex bg-gray-100 rounded-sm self-center px-1 text-xs border font-black text-indigo-900 rounded-sm"> <i class="self-center mr-1 fas fa-long-arrow-alt-left"></i>Go Back</a>
        <div wire:loading class="self-center">
          <i class="text-green-500 fas fa-spinner fa-pulse"></i>
      </div>
      </div>
    <br>
    <div class="py-3 px-2" x-data="{show:false}">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-2">
                <div class="overflow-hidden sm:rounded-sm">
                  <table class="min-w-full">
                    <thead class="border-t border-b">
                      <tr>
                        <th scope="col" class="flex space-x-2 px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                          <small>Coin</small>
                          <a onclick="$modals.show('select-coin')" class="cursor-pointer self-center text-xs text-gray-500"><i class="fas fa-sort"></i></a>
                        </th>
                        <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                          <small>Holding (usd)</small>
                        </th>
                        <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                          <small>Holding (crypto)</small>
                        </th>
                        <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                          <small>Withdrawal Amount</small>
                        </th>
                        <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            <small>Destination</small>
                        </th>                        
                      </tr>
                    </thead>
                    
                    @if($selectedCrypto && $cryptos->count())
                    <tbody class="bg-white border-b">
                      {{-- @foreach ($responses as $response) --}}
                      <tr>
                        <td class="px-6 py-2 whitespace-nowrap">
                          <div class="flex space-x-4">
                              <img class="h-5 w-5 rounded-full" src="{{$selectedCrypto['logo_url']}}" alt="">
                              <div class="text-sm self-center font-semibold text-gray-900">
                                {{$selectedCrypto['name']}}
                              </div>                     
                          </div>
                        </td>
                        <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                            <small>1.234 </small>
                        </td>
                        <td class="px-6 py-2 text-semibold whitespace-nowrap text-sm text-gray-500">
                         <small> 0</small>
                        </td>
                        <td class="px-6 py-2 text-semibold whitespace-nowrap">
                            <div class="">
                                @error('amount') <span class="text-xs text-red-700 mt-1">{{ $message }} <br></span> @enderror
                                <x-input wire:model.lazy="amount" class="block py-1 w-full text-xs" type="number" :value="old('amount')" required autofocus />
                                <small x-show="show" class="text-xs text-gray-500 font-semibold uppercase">1.23 btc</small>
                            </div>
                        </td>
                        <td class="px-6 py-2 text-semibold whitespace-nowrap">
                            @error('walletAddress') <span class="text-xs text-red-700 mt-1">{{ $message }} <br></span> @enderror
                            <x-input wire:model.lazy="walletAddress" class="block py-1 w-full text-xs" type="text" :value="old('walletAddress')" required autofocus />
                            <small x-show="show" class="text-xs text-indigo-900 font-semibold">valid wallet</small>
                          </td>                            
                      </tr>
                      {{-- @endforeach --}}
                      </tbody>
                      @else
                        <x-modals.refresh/>
                      @endif
                  </table>
                </div>
              </div>
            </div>
            <div class="flex space-x-2 justify-end mt-3">
                <button wire:click="confirmWithdrawal" class="focus:outline-none rounded-lg text-white focus:bg-purple-800 bg-purple-500 px-3 text-sm"><small class="flex">continue <i class="ml-1 text-xs self-center fas fa-long-arrow-alt-right"></i></small></button>
                <small class="self-center font-black" style="font-size:0.55rem;">press enter</small>
            </div>
          </div>
    </div>
</div>