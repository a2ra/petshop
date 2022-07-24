<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">{{__('Pocetna')}}
</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<div class="p-2">
    <div>
        <h1>Ispis najprodavanijih životinja </h1>
        <hr>
        @foreach($najcescekupovano as $najcescekupovan)
        <p>{{$loop->iteration}}. {{$najcescekupovan->name}} - {{$najcescekupovan->brojac}} </p>
        @endforeach
    </div>
    <div>
        <h1>Kupci sa najviše kupovina</h1>
        <hr>
      @foreach($most_buy_customer as $most_buy_custome)
        <p>{{$loop->iteration}} . {{$most_buy_custome->name}} {{$most_buy_custome->lastname}}  - {{$most_buy_custome->brojac}} </p>
        @endforeach
    </div>
    <div>
        <h1>Ispis životinja jeftinijih od 500KM</h1>
        <hr>
      @foreach($cheap_pets as $cheap_pet)
        <p>{{$loop->iteration}} . {{$cheap_pet->name}}  - {{$cheap_pet->price}}KM </p>
        @endforeach
</div>

<div>
        <h1>Najprodavanije pasmine životinja</h1>
        <hr>
      @foreach($najcesci_breeds as $najcesci_breed)
        <p>{{$loop->iteration}} . {{$najcesci_breed->name}}   - {{$najcesci_breed->brojac}} </p>
        @endforeach
    </div>
    <div>
        <h1> Prodane životinje do 10 godina starost</h1>
        <hr>
      @foreach($pets_do_10g as $pets20)
        <p>{{$loop->iteration}} . {{$pets20->name}} - {{$pets20->brojac}}</p>
        @endforeach
    </div>
    <div>
        <h1> Ispis Pudla pasmine do 600KM </h1>
        <hr>
      @foreach($ispisCorellaPrice as $ispisCorella)
        <p>{{$loop->iteration}} . {{$ispisCorella->name}} {{$ispisCorella->price}} KM</p>
        @endforeach
    </div>
    <div>
        <h1> Kupci koji su kupili pasminu Correla mlađu od 5 godina </h1>
        <hr>
      @foreach($costumer2022 as $costumer2022i)
        <p>{{$loop->iteration}} . {{$costumer2022i->name}} {{$most_buy_custome->lastname}} </p>
        @endforeach
    </div>
    <div>
        <h1> Prodane BiH životinje </h1>
        <hr>
      @foreach($BiH_Pets as $BiH_Petss)
        <p>{{$loop->iteration}} . {{$BiH_Petss->name}}</p>
        @endforeach
    </div>

    <div>
      <h1>  Životinje rođene u 2021. godini </h1>
      <hr>
    @foreach($PetsPLUS as $PetsPLUSs)
      <p>{{$loop->iteration}} . {{$PetsPLUSs->name}}</p>
      @endforeach
  </div>
  <div>
      <h1>  Ispis Husky pasa rođenih u 2020. godini </h1>
      <hr>
    @foreach($ispisHusky as $ispisHuskys)
      <p>{{$loop->iteration}} . {{$ispisHuskys->name}}</p>
      @endforeach
  </div>
</div>
</div>
</div>
</div>
</x-app-layout>
