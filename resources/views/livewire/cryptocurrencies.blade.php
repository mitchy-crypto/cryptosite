<div class="relative mb-12 overflow-hidden">
    <div class="scroller">
        <div class="flex whitespace-nowrap space-x-8">
            
           @foreach ($response as $i)
           <x-partials.coin-card>
                <x-slot name="logo"><img src="{{$i['logo_url']}}" class="object-contain h-6" alt="sth"></x-slot>
                <x-slot name="coinName">{{$i['name']}}</x-slot>
                <x-slot name="date">{{\Illuminate\Support\Str::of($i['price_date'])->before('T')}}</x-slot>
                <x-slot name="currentPrice">
                    {{round($i['price'],3)}} usd
                </x-slot>
                <x-slot name="status">
                    <small style="font-size:0.6rem"
                     class="px-1 {{Illuminate\Support\Str::startsWith(end($i)['price_change'], '-') ? 'bg-red-100 text-red-500':'bg-green-100 text-green-500'}} rounded">
                     {{round(end($i)['price_change'],2)}} ({{end($i)['price_change_pct']}}%) 24h</small>
                </x-slot>
            </x-partials.coin-card>
           @endforeach
        </div>
    </div>
</div>