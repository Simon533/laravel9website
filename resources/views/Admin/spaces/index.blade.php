<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.spaces.create')}}" class="px-2 py-2 bg-red-400 hover:bg-green-700 rounded-lg text-white">Spaces/home</a>
            </div>
            
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    Guest Number
                </th>
                <th scope="col" class="py-3 px-6">
                   Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Location
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
           
            @foreach($spaces as $category)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                   {{$category->name}}
                    
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                   {{$category->guest_numer}}
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                   {{$category->status}}
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                   {{$category->location}}
              
              
              
        
                <!-- <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       
                  
                   {{$category->description}} -->

              
                   
                
                 
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 
               
                
                    <a href="{{route('admin.spaces.edit',$category->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                
                
              <td> <form class="py-0 px-10"
                    method="POST"
                    action="{{route('admin.spaces.destroy',$category->id)}}"
                    onsubmit="return confirm('Are you sure you want ');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
               
             </tr>
            
               @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>