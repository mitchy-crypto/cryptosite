<div class="flex space-x-2">
    <div class="flex flex-col">
        <h2 class="self-center  {{session('confirmdeposit') ? 'text-gray-500' : '' }} font-bold text-xs uppercase tracking-wider">Make deposit</h2>
        <small class="text-xs tracking-wider {{session('confirmdeposit') ? 'text-gray-500' : 'text-green-500' }}">Step 1</small>
    </div>
    <div class="w-28 bg-gray-300 mt-2" style="height: 0.1rem"></div>
    <div class="flex flex-col" >
        <h2 class="self-center {{session('confirmdeposit') ? '' : 'text-gray-500' }} font-bold text-xs uppercase tracking-wider">confirm deposit</h2>
        <small class="text-xs tracking-wider {{session('confirmdeposit') ? 'text-green-500' : 'text-gray-500' }}">Step 2</small>
        
    </div>
</div>