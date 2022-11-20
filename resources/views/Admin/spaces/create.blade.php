<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex p-2">
                <a href="{{route('admin.spaces.index')}}" class="px-2 py-2 bg-red-400 hover:bg-green-700 rounded-lg text-white">Space /home</a>
            </div>
            <div class="m-2 p-2">
                
<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
     <form method="POST"class="space-y-6" enctype="multipart/form-data"  action="{{route('admin.spaces.store')}}"  >
            @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Enter Details</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="john" required>
        </div>
        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
            <input type="text "name="guest_numer" id="guest_numer" placeholder="enter guest number " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        </div>
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
            <input type="text "name="location" id="location" placeholder="enter location " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        </div>
        <div class="sm:col-span-6 pt-5">
            <label for="status" class="block text-sm font-medium text-gray-500">Status</label>
            <select id="status" name="status" class="form-multiselect  block mutiple"
            >
                @foreach(App\Enums\TableStatus::cases() as $status)
                <option value="{{$status->value}}"> {{$status->name}}</option>
                    @endforeach 
                </select>
          
   
</div>
<div class="sm:col-span-6 pt-5">
            <label for="status" class="block text-sm font-medium text-gray-500">Status</label>
             <select id="location" name="location" class="form-multiselect  block mutiple"
            >
                 @foreach(App\Enums\TableLocation::cases() as $location)
                 <option value="{{$location->value}}"> {{$location->name}}</option>
                    @endforeach 
                </select>
            </div>
<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
       
    </form>
</div>

            </div>

    </div>
</x-admin-layout>