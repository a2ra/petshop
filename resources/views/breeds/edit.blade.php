<x-app-layout>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-2">
            @foreach($breeds as $breed)
            <form method="POST" action="{{route('update_breed')}}">
                @csrf
                <input type="hidden" name="id" value="{{$breed->id}}">

                <div>
                    <x-jet-label for="name" value="{{__('Naziv rase')}}"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$breed->name}}" required autofocus/>
                </div>   

                <div>
                    <x-jet-label for="country" value="{{__('Porijeklo')}}"/>
                    <x-jet-input id="country" class="block mt-1 w-full" type="text" value="{{$breed->country}}" name="country"  required autofocus/>
                </div>  

                <div>
                    <x-jet-label for="category" value="{{__('Kategorija')}}"/>
                    <select id="category" name="category" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option>Odaberi</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                    @if($breed->category==$category->id) selected
                    @endif>{{$category->name}}
                    </option>
                    @endforeach
                        </select>
                </div> 
            
                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4"> 
                        {{__('Spremi')}}
                </x-jet-button>
                </div>
             </form>
             @endforeach 
        </div>
    </div>
</div>
</div>
</x-app-layout>