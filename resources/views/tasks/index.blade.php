<x-app-layout>
    <h1>Tasks</h1>

    <div style="margin-bottom: 15px">

        <a href="/tasks/create"> Create New Tasks</a>
        <form action="/tasks" method="post">
            @csrf
            <input type="text" name="list" placeholder="the name of the task">
            <button type="submit">Add</button>
        </form>

    </div>

    {{-- <div style="margin-left: 15px">
        <ol>
            @foreach($tasks as $task )
            <li>{{$task -> list}}</li>

            @endforeach
        </ol>
    </div> --}}

        <ul style="list-style-type: none">
            @foreach($tasks as $index => $task )
            <li>{{ $index + 1 }} - {{$task -> list}}</li>

            @endforeach
        </ul>
</x-app-layout>
