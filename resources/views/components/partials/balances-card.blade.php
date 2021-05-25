<div @click="open = !open" class="border flex flex-col shadow p-2 space-y-3 bg-white" x-data="{open:false}">
    <div class="flex space-x-2">
        <img src="{{$img}}" class="self-center object-contain h-6" alt="sth">
        <h2 class="text-xs font-black self-center tracking-wider">{{$name}}</h2>
    </div>
    <div class="flex flex-col">
        {{-- <h2 class="text-xs font-black">1.3654234 BTC</h2> --}}
        <p class="text-xs font-blACK tracking-wider">{{$price}}</p>
    </div>
    <div x-show="open"  class="mt-3 grid grid-cols-2 gap-2">
        <a href="" class="bg-purple-500 hover:bg-purple-700 text-white px-2 py-1 rounded-sm text-xs uppercase flex justify-center font-bold"><small>Deposit</small></a>
        <a href="" class="bg-gray-500 hover:bg-gray-700 text-white px-2 py-1 rounded-sm text-xs uppercase flex justify-center font-bold"><small>Withdraw</small></a>
    </div>
</div>