<x-app-layout>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-2">
            <form method="POST" action="{{route('store_pet')}}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{__('Naziv životinje')}}"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                </div>   

                <div>
                    <x-jet-label for="year" value="{{__('Starost')}}"/>
                    <x-jet-input id="year" class="block mt-1 w-full" type="date" name="year"  required autofocus/>
                </div>
                
                <div>
                    <x-jet-label for="price" value="{{__('Cijena')}}"/>
                    <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price"  required autofocus/>
                </div>

             
                <div>
                    <x-jet-label for="breed" value="{{__('Vrsta')}}"/>
                    <select id="breed" name="breed" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option selected="true" disabled="disabled">Odaberi</option>
                    @foreach($breeds as $breed)
                    <option value="{{$breed->id}}">{{$breed->name}}</option>
                    @endforeach
                        </select>
                </div> 

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
