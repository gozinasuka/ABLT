<x-app-layout>
    <h1>Tasks</h1>

    <div style="margin-bottom: 15px">

        <h5> Update New Tasks</a>
        <form action="/tasks/{{$task->id}}" method="post">
            @csrf
            @method('put')
            <input type="text" name="list" value="{{$task->list}}" placeholder="the name of the task">
            <button type="submit">Update</button>
        </form>

    </div>

  
</x-app-layout>
