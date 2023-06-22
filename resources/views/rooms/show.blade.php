<x-app-layout>
    <div class="">
        <h2>Detail místnosti {{$room->no}}</h2>
        <div>Název: {{$room->name}}</div>
        <div>Číslo: {{$room->no}}</div>
        <div>Telefon: {{$room->phone ?: '-'}}</div>
        <div>Kapacita: {{$room->capacity}}</div>

        <h2>Seznam zaměstnanců</h2>
        <ul>
            @foreach($room->employees as $employee)
                <li>{{$employee->surname}}, {{$employee->name}}</li>
            @endforeach
        </ul>
    </div>
    <a href="{{route('rooms.index')}}">Zpět</a>
</x-app-layout>
