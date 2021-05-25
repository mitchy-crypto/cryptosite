@props(['name'])

<div class="fixed grid place-items-center inset-0" x-show="show" x-data="{show:true}">
    <div class="z-10 inset-0 bg-gray-800 opacity-60 fixed"></div>
    <div x-show.transition="show" class="rounded bg-white p-3 mt-3 text-center sm:mt-0 shadow-md mx-3 max-w-xs z-30 sm:text-left">
        <div class="flex space-x-2 text-xs font-black tracking-wider">
            An Error Occured!
        </div>
        <div class="mt-2 text-xs tracking-wider">
            please click the refesh button to continue.
        </div>
        <div class="flex space-x-4 mt-2">
            <button wire:click="refreshComponent" class="disabled:opacity-25 transition ease-in-out duration-150 self-center text-xs rounded bg-green-400 text-white py-1 px-3">Refresh <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
        </div>
    </div>
</div>