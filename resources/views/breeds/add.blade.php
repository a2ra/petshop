<x-app-layout>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-2">
            <form method="POST" action="{{route('store_breed')}}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{__('Naziv vrste')}}"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                </div>   
                
                <div>
                    <x-jet-label for="country" value="{{__('Porijeklo')}}"/>
                    <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('name')" required autofocus/>
                </div> 
                
                <div>
                    <x-jet-label for="category" value="{{__('Kategorija')}}"/>
                    <select id="category" name="category" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option selected="true" disabled="disabled">Odaberi</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                        </select>
                </div> 
             
                <div>
            

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4"> 
                        {{__('Spremi')}}
                </x-jet-button>
                </div>
             </form>
        </div>
    </div>
</div>
</div>
</x-app-layout>
