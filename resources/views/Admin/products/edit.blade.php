<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex p-2">
                <a href="{{route('admin.categories.index')}}" class="px-2 py-2 bg-red-400 hover:bg-green-700 rounded-lg text-white">product back/home</a>
            </div>
            <div class="m-2 p-2">
                
<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form method="POST"class="space-y-6" enctype="multipart/form-data"  action="{{route('admin.products.update',$product->id)}}"  >
            @csrf
            @method('PUT')

        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Enter Details</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="name" name="name" id="name" value="{{$product->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="john" required>

        </div>
        <div>
            <label id="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Describe</label>
            <input type="text "name="description" id="description" value="{{$product->description}}"  placeholder="good one" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        <div class="mt-1">
            <select id="categories" name="categories" class="form-multiselect  block mutiple"
            >
            @foreach($categories as $category)
          <option value="{{$category->id }}" >{{$category->name}}
                </option> 
                @endforeach
                </select>
                </div>
             
        </div>

         <div>
            <label id="capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
            <input type="text "name="capacity" id="capacity" value="{{$product->capacity}}"  placeholder="edit price " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        
             
        </div>
         <div>
            <label id="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="text "name="price" id="price" value="{{$product->price}}"  placeholder="good one" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        
             
        </div>
        <div>
            <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Images</label>
            <div>
                <img class="w-32" src="{{Storage::url($product->image)}}">
            </div>
            <input type="file"  id="image"  name="image"placeholder="upload image here" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        </div>
    
            
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
       
    </form>
</div>

            </div>

    </div>
</x-admin-layout>