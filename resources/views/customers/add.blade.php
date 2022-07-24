<x-app-layout>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-2">
            <form method="POST" action="{{route('store_customer')}}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{__('Ime')}}"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                </div>   

                <div>
                    <x-jet-label for="lastname" value="{{__('Prezime')}}"/>
                    <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"  required autofocus/>
                </div>  
                <div>
                    <x-jet-label for="email" value="{{__('Email')}}"/>
                    <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus/>
                </div> 
                <div>
                    <x-jet-label for="phonenumber" value="{{__('Broj mobitela')}}"/>
                    <x-jet-input id="phonenumber" class="block mt-1 w-full" type="number" name="phonenumber" required autofocus/>
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
