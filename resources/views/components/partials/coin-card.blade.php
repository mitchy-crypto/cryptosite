<div class="space-y-2 p-3 bg-white hover:shadow">
    <div class="flex space-x-2">
        {{$logo}}
        <div class="flex flex-col self-center">
            <h2 class="text-xs font-black">{{$coinName}}</h2>
            <p class="text-xs">{{$date}}</p>
        </div>
    </div>
    <h2 class="text-sm text-gray-800 font-black">{{$currentPrice}}</h2>
    {{$status}}
</div>