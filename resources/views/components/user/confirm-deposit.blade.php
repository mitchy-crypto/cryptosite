<div class="">
    <br>
    <h2 class="capitalize text-sm font-bold">Deposit Confirmation</h2>
    <br>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3 border p-3">
            <div class="grid grid-cols-3 gap-12">
                <div class="space-y-4 flex flex-col">
                    <div class="flex flex-col space-y-1">
                        <small class="font-semibold text-xs text-gray-500" style="font-size: 0.75rem">Deposit amount :</small>
                        <small class="font-bold text-xs" style="font-size: 0.8rem">{{$cryptoEquivalentOfDeposit}} {{$activeWallet}}</small>
                        <small class="font-bold text-xs text-gray-500" style="font-size: 0.75rem">{{$depositAmount}} usd</small>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <small class="font-semibold text-xs text-gray-500" style="font-size: 0.75rem">Send :</small>
                        <small class="font-bold text-xs" style="font-size: 0.8rem">{{$cryptoEquivalentOfDeposit}} {{$activeWallet}}</small>
                        <small class="font-bold text-xs text-blue-500 underline truncate" style="font-size: 0.75rem">sa12Awq2rfdxxcAxsQ252WSFSXx44wgdkngg</small>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <small class="font-semibold text-xs text-gray-500" style="font-size: 0.75rem">Scan To Pay :</small>
                    <img src="{{asset('img/qrcode.png')}}" class="h-28 w-28" alt="">
                </div>
                <div class="flex flex-col space-y-4" x-data="timer(new Date().getTime() + 10*60000)" x-init="init()">
                    <small class="font-semibold text-xs text-gray-500" style="font-size: 0.75rem">Valid for :</small>
                    <div class="flex space-x-4">
                        <div class="flex flex-col">
                            <div x-text="time().minutes" class="font-black flex justify-center items-center text-xs bg-white h-8 w-8 border border-4 border-green-500 rounded-full"></div>
                            <small class="font-medium text-xs text-gray-500" style="font-size: 0.65rem">minutes</small>
                        </div>
                        <div class="flex flex-col">
                            <div x-text="time().seconds" class="font-black flex justify-center items-center text-xs bg-white h-8 w-8 border border-green-500 rounded-full"></div>
                            <small class="font-medium text-xs text-gray-500" style="font-size: 0.65rem">seconds</small>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-col">
                    <small class="font-semibold text-xs text-gray-500" style="font-size: 0.75rem">Acccount status:</small>
                    <small class="font-semibold text-xs text-red-500" style="font-size: 0.75rem">pending transfer</small>
                </div>
                <div class="flex flex-end space-x-4">
                    <button class="self-center font-semibold text-xs rounded border border-red-500 text-red-500 hover:bg-red-500 hover:text-white py-1 px-3">Cancel and return </button>
                    <button wire:click="storeDeposit" class="self-center active:border-green-400 border focus:border-green-400 font-semibold text-xs rounded bg-green-400 text-white py-1 px-3">Confirm <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
                    <div wire:loading class="self-center">
                        <i class="text-green-500 fas fa-spinner fa-pulse"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>