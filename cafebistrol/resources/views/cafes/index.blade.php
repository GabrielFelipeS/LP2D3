<x-layout title="Cafés">
    <a href="cafes/criar">Adicionar</a>
    <ul class="list-group">
        @foreach($cafes as $cafe)
        <li class="list-group-item">{{$cafe}}</li>
        @endforeach
    </ul>
</x-layout>