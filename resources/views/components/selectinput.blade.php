
<div @click.away="open = false" class="cursor-pointer relative" x-data="{ open:false, activeItem: @entangle($attributes->wire('model')), items: {{ $items }} }">
    <template x-for="item in items" :key="item.id">
        <button @click="open = !open" x-show="activeItem === item.id" type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" class="cursor-pointer relative w-full bg-gray-100 pr-10 text-left cursor-default focus:outline-none sm:text-xs">
            <span class="flex items-left" style="width: 1.4rem">
                {{-- <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="border h-6 w-6 rounded-full"> --}}
                {{$selected}}
            </span>
            <span class="absolute inset-y-0 right-2 flex pointer-events-none text-xs">
                <i class="fas fa-caret-down self-center"></i>
            </span>
        </button>
    </template>
    <div style="z-index: 9999;display:none;" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute mt-1 w-full rounded-md bg-white shadow-lg h-100 overflow-auto">
        <ul wire:click="updateCoin" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="overflow-auto rounded text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
            <template x-for="item in items" :key="item.id">
                <li :class="{ 'text-white bg-green-600': activeItem === item.id }" @click="activeItem = item.id, open = !open" id="listbox-item-0" role="option" class="rounded cursor-default select-none relative py-2 pl-1 pr-9">
                    <div class="flex items-left">
                        {{$itemArray}}
                    </div>
                </li>
            </template>
        </ul>
        {{-- <div class="mt-4"></div> --}}
    </div>
</div>
