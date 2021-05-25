<div class="flex justify-between">            
    @if (request()->route()->named('deposit'))
    <x-deposit-steps/>
    @elseif(request()->route()->named('your-deposits'))
    <h2 class="self-center font-bold text-xs uppercase text-gray-500 tracking-wider">{{Str::of(url()->current())->afterLast('/')->replace('-', ' ')}}</h2>
    @else
    <h2 class="self-center font-bold text-xs uppercase text-gray-500 tracking-wider">{{Str::of(url()->current())->afterLast('/')}}</h2>
    @endif

    <div class="hidden md:flex self-center tracking-wider text-gray-500" style="font-size: .8rem">
        <small class="self-center"><i class="fas fa-shield-alt"></i></small> |
        <small class="self-center">{{auth()->user()->name}}</small> |
        <small class="self-center">{{date('Y-m-d H:i:s')}}</small>
    </div>
</div>