<div class="flex justify-between md:px-44 py-4 bg-purple-500">
    <div class="">logo</div>
    <div class="flex md:space-x-4">
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">Home</a>
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">about us</a>
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">How to invest</a>
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">affiliate</a>
        <a href="" class="uppercase text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 self-center">contact</a>
        
        @if(Route::has('login'))
        @auth
        <a href="{{route('dashboard')}}" class="text-xs font-bold text-white hover:bg-white visited:text-red-400 hover:text-green-400 active:green-600 border border-gray-400 rounded px-4 py-1">Dashboard</a>
        @else

        <a href="{{route('login')}}" class="text-xs font-bold text-white visited:text-red-400 hover:text-green-400 active:green-600 border border-gray-400 rounded px-4 py-1">Login</a>
        @if(Route::has('register'))
        <a href="{{route('register')}}" class="text-xs font-bold text-white rounded-sm visited:text-red-400 hover:text-green-400 active:green-600 px-4 py-1 bg-green-500">Register</a>
    
        @endif
        @endauth
        @endif
    
    </div>
</div>