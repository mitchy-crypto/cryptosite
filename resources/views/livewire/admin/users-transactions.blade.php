<div class="">
  <div class="grid grid-cols-3">
    <div class="flex space-x-2">
        <input wire:model.debounce.1000ms="search" type="text" value="old('search')" placeholder='search transaction e.g deposit 2000 "John Doe"...' required autofocus class="self-center block py-1 w-full text-xs tracking-wider rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <div wire:loading class="self-center">
            <i class="text-green-500 fas fa-spinner fa-pulse"></i>
        </div>
    </div>
    <div class=""></div>
    <div class="flex justify-end">
        <a onclick="$modals.show('add-new-transaction')" class="cursor-pointer p-2 bg-gray-100 border rounded text-xs">Add Transaction</a>
    </div>
</div>
<br>
  <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-200">
                <tr>
                  <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    User
                  </th>
                  <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                      Currency
                    </th>
                  <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                      amount (usd/btc)
                  </th>
                  <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                      Time
                  </th>
                  <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    transaction
                  </th>
                  <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    Roi
                  </th>
                  <th scope="col" class="relative px-6 py-2">
                    <span class="sr-only">Actions</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                  @forelse ($transactions as $transaction)
                  <x-modals.confirmation name="confirm-transaction">
                    <x-slot name="title">
                        <h2 class="text-left  text-xs font-bold tracking-wider">{{!$transaction->status ? 'Confirm' : 'Reverse'}} this transaction</h2>
                    </x-slot>
                    <x-slot name="body">
                        <small class="text-xs tracking-wider block">Are you sure you want to {{!$transaction->status ? 'confirm' : 'reverse'}} </small>
                        <small class="text-xs tracking-wider">this transaction.</small>
                    </x-slot>
                
                    <x-slot name="footer">
                      @if ($transaction->status)
                        <button  wire:click="reverse({{ $transaction->id }})" class="disabled:opacity-25 transition ease-in-out duration-150 self-center text-xs rounded bg-red-400 text-white py-1 px-3">Confirm <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
                      @else
                        <button  wire:click="confirm({{ $transaction->id }})" class="disabled:opacity-25 transition ease-in-out duration-150 self-center text-xs rounded bg-green-400 text-white py-1 px-3">Confirm <i class="ml-2 fas fa-long-arrow-alt-right"></i></button>
                      @endif
                    </x-slot>
                  </x-modals.confirmation>
                    <tr>
                      <td class="px-3 py-4">
                          <div class="font-bold">
                              <div class="tracking-wider text-xs text-gray-900">
                                  {{$transaction->user->name}}
                              </div>
                              <div class="tracking-wider text-xs text-gray-900">
                                  {{$transaction->user->email}}
                              </div>
                          </div>
                      </td>
  
                      <td class="px-3 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 h-5 w-5">
                            <img class="h-5 w-5 self-center rounded-full" src="{{$transaction->cryp_image}}" alt="">
                          </div>
                          <div class="ml-3 font-bold">
                            <div class="tracking-wider text-xs text-gray-900">
                              {{$transaction->currency}}
                            </div>
                          </div>
                        </div>
                      </td>
              
                      <td class="px-3 py-4">
                          <div class="font-medium">
                              <div class="tracking-wider text-xs text-gray-900">
                                  {{$transaction->amount}} usd
                              </div>
                              <div class="tracking-wider text-xs text-gray-900">
                                  0.012 btc
                              </div>
                          </div>
                      </td>
                      <td class="px-3 py-4">
                          <div class="text-xs text-gray-500 tracking-wider">{{$transaction->created_at->diffForHumans()}}</div>
                        </td>
                      <td class="px-3 py-4">
                        <div class="text-xs font-black tracking-wider">{{$transaction->type}}</div>
                      </td>
                      <td class="px-3 py-4">
                        <div class="text-xs text-gray-500 tracking-wider">{{$transaction->roi}}</div>
                      </td>
                      {{-- <td class="px-6 py-4">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          Active
                        </span>
                      </td> --}}
                      <td class="px-3 mt-2 flex space-x-2 py-4 whitespace-nowrap text-right text-xs font-semibold">
                        <a onclick="$modals.show('confirm-transaction')" class="cursor-pointer self-center rounded px-2 {{$transaction->status ? ' hover:text-green-900 text-green-700 bg-green-200' : ' hover:text-yellow-900 text-yellow-700 bg-yellow-200'}}">{{$transaction->status ? 'Confirmed' : 'Pending'}}</a>
                        <a href="#" class="self-center text-purple-600 hover:text-purple-900">View</a>
                        <a href="#" class="self-center text-red-600 hover:text-red-900">Delete</a>
                      </td>
                    </tr>
                  @empty
                  <tr>
                      <td colspan="7">
                        <div class="flex flex-col space-y-4 justify-center items-center py-8">
                          <div class="space-x-4 flex justify-center items-center">
                            <i class="fas fa-inbox text-xs self-center text-gray-500"></i>
                            <span class="text-gray-500 self-center text-xs font-medium">No records found</span>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>