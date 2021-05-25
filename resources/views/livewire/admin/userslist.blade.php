<div class="">
    <x-modals.confirmation name="add-new-user">
        <x-slot name="title">
            <h2 class="text-left mb-3 text-lg font-bold tracking-wider">Add New User</h2>
        </x-slot>
        <x-slot name="body">
            <form method="POST" wire:submit.prevent="store">
                @csrf
            
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('FullName')" />
            
                    <x-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.1000ms="name" name="name" :value="old('name')" required autofocus />
                    @error('name') <span class="block mt-1 text-xs font-semibold text-red-600">{{$message}}</span>@enderror
                </div>
            
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />
            
                    <x-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.1000ms="email" name="email" :value="old('email')" required />
                    @error('email') <span class="block mt-1 text-xs font-semibold text-red-600">{{$message}}</span>@enderror
            
                </div>

                <div class="mt-4">
                    <x-label for="role" :value="__('Role')" />

                    <x-selectinput wire:model.defer="role" :items="App\Models\Role::all()">
                        <x-slot name="selected">
                            <span x-text="item.name" class="whitespace-nowrap py-3 self-center ml-2 font-black tracking-wider block"></span>
                        </x-slot>
                        <x-slot name="itemArray">
                            <span :class="{ 'font-semibold': activeItem === item.id }" class="self-center ml-1 block font-normal" x-text="item.name"></span>
                        </x-slot>
                    </x-selectinput>
                </div>
            
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
            
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    wire:model.debounce.1000ms="password"
                                    required autocomplete="new-password" />
                                    @error('password') <span class="block mt-1 text-xs font-semibold text-red-600">{{$message}}</span>@enderror
                </div>
                
            
                <div class="flex items-center justify-end mt-4">
                    <label for="terms" class="flex items-center">
                        <input id="terms" type="checkbox" class="rounded form-checkbox" name="terms">
                        <span class="ml-2 text-xs text-gray-500 tracking-wider">{{__('Lorem ipsum dolor sit, amet consecteteur ing elit.')}}</span>
                    </label>
                </div>
            
                <button type="submit" class="tracking-wider mt-4 cursor-pointer bg-purple-500 block w-full text-center justify-center items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus-rind ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{__('Register')}}
                </button>
            </form>
        </x-slot>
    
        <x-slot name="footer">
            
        </x-slot>
    </x-modals.confirmation>
    <div class="grid grid-cols-3">
        <div class="flex space-x-2">
            <input wire:model.debounce.1000ms="search" type="text" value="old('search')" placeholder='search users e.g "John Doe"...' required autofocus class="self-center block py-1 w-full text-xs tracking-wider rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <div wire:loading class="self-center">
                <i class="text-green-500 fas fa-spinner fa-pulse"></i>
            </div>
        </div>
        <div class=""></div>
        <div class="flex justify-end">
            <a onclick="$modals.show('add-new-user')" class="cursor-pointer p-2 bg-gray-100 border rounded text-xs">New User</a>
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
                      Name
                    </th>
                    <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        balance(usd)
                    </th>
                    <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        withdrawable(usd)
                    </th>
                    <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                      Joined@
                    </th>
                    <th scope="col" style="font-size: 0.65rem" class="px-3 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                      Referrer
                    </th>
                    <th scope="col" class="relative px-6 py-2">
                      <span class="sr-only">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($users as $user)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-5 w-5">
                              <img class="h-5 w-5 self-center rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            </div>
                            <div class="ml-4 font-bold">
                              <div class="tracking-wider text-xs text-gray-900">
                                {{$user->name}}
                              </div>
                              <div class="tracking-wider text-xs text-gray-900">
                                {{$user->email}}
                              </div>
                            </div>
                          </div>
                        </td>
                
                        <td class="px-3 py-4">
                          <div class="text-xs text-gray-500 tracking-wider">{{number_format($user->total_deposits)}}</div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="text-xs text-gray-500 tracking-wider">{{number_format($user->withdrawable_deposits)}}</div>
                          </td>
                        <td class="px-3 py-4">
                          <div class="text-xs text-gray-500 tracking-wider">{{$user->created_at->diffForHumans()}}</div>
                        </td>
                        <td class="px-3 py-4">
                          <div class="text-xs text-gray-500 tracking-wider"></div>
                        </td>
                        {{-- <td class="px-6 py-4">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Active
                          </span>
                        </td> --}}
                        <td class="px-3 mt-2 flex space-x-2 py-4 whitespace-nowrap text-right text-xs font-semibold">
                          <a href="#" class="self-center text-green-600 hover:text-green-900">View</a>
                          <a href="#" class="self-center text-purple-600 hover:text-purple-900">Edit</a>
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