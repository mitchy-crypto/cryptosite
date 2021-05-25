<x-guest-layout>
    <x-header/>
    @if (request()->route()->named('index'))
        <x-main/>
    @elseif(request()->is('how-to-invest'))
        @include('howtoinvest')
    @elseif(request()->route()->named('about-us'))
        @include('about-us')
    @endif
</x-guest-layout>