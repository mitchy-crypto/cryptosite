<div class="fixed px-5 md:px-8 pt-5 pb-3 w-full md:w-10/12 bg-white">
        <div class="flex justify-between">
            <div class="flex">
                <div class="flex  md:hidden flex-col space-y-1">
                    <div style="border-radius: 30%" class="h-0.5 w-5 bg-purple-500"></div>
                    <div style="border-radius: 30%" class="h-0.5 w-4 bg-purple-500"></div>
                    <div style="border-radius: 30%" class="h-0.5 w-3 bg-purple-500"></div>
                </div>
                <a href="/" class="hidden md:block text-sm font-semibold">COINAREA</a>
                <div class="hidden ml-28 md:flex space-x-6">
                    <p class="text-sm font-bold flex"><small class="mr-1">BTC/USD</small> <small class="text-green-500 mr-1">9,920</small> <i class="text-green-500 self-center fas fa-caret-up"></i></p>
                    <p class="text-sm font-bold flex"><small class="mr-1">ETH/USD</small> <small class="text-green-500 mr-1">1,920</small> <i class="text-green-500 self-center fas fa-caret-up"></i></p>
                    <p class="text-sm font-bold flex"><small class="mr-1">LTC/USD</small> <small class="text-green-500 mr-1">920</small> <i class="text-green-500 self-center fas fa-caret-up"></i></p>
                    <p class="text-sm font-bold flex"><small class="mr-1">XRP/USD</small> <small class="text-red-500 mr-1">420.23</small> <i class="text-red-500 self-center fas fa-caret-down"></i></p>

                </div>
            </div>
            <span class="md:hidden -mt-2">
                <x-partials.route-nav-indicator/>
            </span>
            <div class="md:flex md:space-x-2">
                <h2 class="hidden md:block font-semibold capitalize text-sm self-center">{{auth()->user()->name}}</h2>
                <img class="mr-3 md:mr-0 self-center h-5 w-5 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                @role('admin-user')
                <i class="fas fa-bell font-bold text-purple-600 self-center"></i>
                @endrole
            </div>
        </div>
</div>