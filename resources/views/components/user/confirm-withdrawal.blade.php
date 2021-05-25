<div class="">
    <x-modals.confirmation name="cancel-withdrawal-modal">
        <x-slot name="title">
            <h2 class="capitalize text-xs font-bold tracking-wider">Cancel Withdrawal?</h2>
        </x-slot>
        <x-slot name="body">
            <small class="text-xs tracking-wider">This action can not be reversed.</small>
        </x-slot>
    
        <x-slot name="footer">
            {{-- <button onclick="$modals.show('')" class="self-center text-xs rounded bg-gray-400 text-white py-1 px-3">Cancel</i></button> --}}
            <button onclick="$modals.show('')" wire:click="cancelWithdrawal" class="disabled:opacity-25 transition ease-in-out duration-150 self-center text-xs rounded bg-green-400 text-white py-1 px-3">Confirm <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
        </x-slot>
    </x-modals.confirmation>
    <br>
    <h2 class="text-sm tracking-wider font-black text-indigo-900 mb-1">Your transfer <b>confirmation</b></h2>
    <br>
    <div class="border rounded">
        <div class="py-1 px-3 bg-gray-100 flex justify-between rounded-t">
            <h5 class="text-xs font-semibold text-purple-500 self-center tracking-wider">Confirm and complete your withdrawal request.</h5>
            <div class="flex space-x-4 self-center">
                <i class="fas fa-redo text-xs text-gray-500 self-center"></i>
                <small class="px-4 py-1 rounded-sm border text-purple-500 border-purple-500 font-bold text-xs tracking-wider self-center">submit</small>
            </div>
        </div>
        <div class="p-3 grid grid-cols-3 gap-6">
            <div class="space-y-2">
                <small class="text-xs text-gray-500 tracking-wider">Coin</small>
                <div class="flex space-x-2">
                    <img class="h-5 w-5 self-center" src="{{$selectedCrypto['logo_url'] ?? false}}" alt="{{$selectedCrypto['name'] ?? false}}">
                    <p class="text-xs self-center font-bold tracking-wider text-indigo-900">{{$selectedCrypto['name'] ?? false}}</p>
                </div>
                <br>
                <small class="text-xs text-gray-500 tracking-wider">Amount</small>
                <div class="">
                    <p class="text-xs font-bold tracking-wider text-indigo-900">{{$withdrawalAmount}} usd</p>
                    <p class="text-xs font-semibold tracking-wider text-gray-500">{{number_format($cryptoequi, 5, '.', '')}} {{$selectedCrypto['currency']}}</p>
                </div>
            </div>
            <div class="space-y-4">
                <small class="text-xs text-gray-500">Destination</small>
                <div class="">
                    <p class="text-xs font-semibold tracking-wider text-gray-500">valid wallet address</p>
                    <p class="text-xs font-bold tracking-wider text-indigo-900">{{$walletAddress}}</p>
                </div>
                <br>
                <small class="text-xs text-gray-500 tracking-wider">Transaction timing : </small>
            </div>
            <div class="pl-2 border-l space-y-4">
                <div class="flex justify-between">
                    <small class="text-xs text-gray-500">Transaction Details</small>
                    <small onclick="$modals.show('cancel-withdrawal-modal')" class="text-xs text-gray-500 cursor-pointer underline">cancel transaction</small>
                </div>
                <div class="space-y-2">
                    <small class="text-xs text-gray-500 tracking-wider flex">Time : <small class="text-purple-900 font-bold ml-1">5:55pm (UTC)</small></small>
                    <small class="text-xs text-gray-500 tracking-wider">Initiation date : <small class="text-purple-900 font-bold">Sept 20, 2021</small></small>
                    <small class="text-xs text-gray-500 tracking-wider">Confirmation date : <small class="text-purple-900 font-bold">Sept 20, 2021</small></small>
                </div>
                <div class="flex justify-betweeen space-x-2">
                    <small class="text-xs text-gray-500 tracking-wider self-center">Verification :</small>
                    <button class="py-1 px-2 rounded-sm bg-purple-600 text-white text-xs flex self-center">resend mail</i></button>
                </div>
            </div>
        </div>
    </div>
</div>