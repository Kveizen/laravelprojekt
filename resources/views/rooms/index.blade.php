<x-app-layout>
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <link rel="stylesheet" href="{{ asset('/styles.css') }}">
            <tr>
                <th class="sortable">
                    Název
                    <a href="{{route('rooms.index', ['sort' => 'name', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'name', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th class="sortable">
                    Číslo
                    <a href="{{route('rooms.index', ['sort' => 'no', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'no', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th class="sortable">
                    Tel.
                    <a href="{{route('rooms.index', ['sort' => 'phone', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'phone', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th class="sortable">
                    Kapacita
                    <a href="{{route('rooms.index', ['sort' => 'capacity', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'capacity', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td><a href="{{ route('rooms.show', $room) }}">{{ $room->name }}</a></td>
                <td>{{ $room->no }}</td>
                <td>{{ $room->phone }}</td>
                <td>{{ $room->capacity }}</td>
                <td>
                    <a href="{{ route('rooms.edit', $room) }}" class="btn btn-primary">Edit</a>
                    <form method="post" action="{{ route('rooms.destroy', $room) }}" onsubmit="return confirm('Opravdu chcete smazat?')">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('rooms.create') }}" class="btn btn-success">Založit novou</a>
</x-app-layout>
