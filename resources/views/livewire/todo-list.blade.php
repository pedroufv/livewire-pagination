<div>
    <ul>
    @foreach($todos as $todo)
        <li>{{ $todo->text }}</li>
    @endforeach
    </ul>
    {{ $todos->links() }}
</div>
