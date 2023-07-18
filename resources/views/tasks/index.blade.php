<x-app-layout>
    <h1>Tasks</h1>

    <div style="margin-bottom: 15px">

        <h5> Create New Tasks</h5>
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

        <li style="margin-bottom: 15px">
            {{ $index + 1 }} - {{$task -> list}}

            <div>
                <a style="color: blue" href="/tasks/{{$task->id}}/edit">edit</a>
                <form action="/tasks/{{$task->id}}" method="post" style="display : inline">
                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form>
            </div>
        </li>
        @endforeach
        
    </ul>
</x-app-layout>
