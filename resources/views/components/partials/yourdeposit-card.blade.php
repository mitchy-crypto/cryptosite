<div class="border flex flex-col shadow p-2 space-y-3 bg-white">
    <div class="flex space-x-2">
        <img src="{{$crypto['logo_url']}}" class="self-center object-contain h-6" alt="sth">
        <h2 class="text-xs font-black self-center">{{$crypto['name']}}</h2>
    </div>
    <div class="flex flex-col">
        <small class="text-xs font-semibold text-gray-500"  style="font-size: 0.65rem">Deposit amount :</small>
        <h2 class="text-xs font-black"  style="font-size: 0.65rem">1.3654234 BTC</h2>
        <p class="text-xs" style="font-size: 0.65rem">11,234 usd</p>
    </div>
    <div class="flex flex-col">
        <small class="text-xs font-semibold text-gray-500"  style="font-size: 0.65rem">Date of creation :</small>
        <p class="text-xs font-black"  style="font-size: 0.65rem">{{now()}}</p>
    </div>
    <div class="flex justify-between">
        <small class="text-xs font-semibold text-gray-500 self-center" style="font-size: 0.65rem">Reinvestment :</small>
        <button class="rounded-sm self-center px-3 text-gray-500 text-xs border border-gray-500 bg-gren-500 text-wite" style="font-size: 0.75rem">off</button>
    </div>
    <div class="flex flex-col">
        <small class="text-xs font-semibold text-gray-500"  style="font-size: 0.65rem">Your Profit :</small>
        <p class="text-xs font-black"  style="font-size: 0.65rem">1% to 1.8%</p>
    </div>
    <div class="flex flex-col">
        <small class="text-xs font-semibold text-gray-500"  style="font-size: 0.65rem">Profit Today :</small>
        <p class="text-xs font-black"  style="font-size: 0.65rem">0.0000012 BTC</p>
    </div>
    <div class="flex flex-col">
        <small class="text-xs font-semibold text-gray-500"  style="font-size: 0.65rem">Total Profit :</small>
        <p class="text-xs font-black"  style="font-size: 0.65rem">0.00723345 BTC</p>
    </div>
</div>