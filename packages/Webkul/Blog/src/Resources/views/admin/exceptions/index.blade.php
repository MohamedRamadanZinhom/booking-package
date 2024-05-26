<x-admin::layouts>

<h1>Exception Dates</h1>
<a href="{{ route('exceptions.create') }}" class="btn btn-primary mb-3">Add Exception Date</a>
<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>From</th>
            <th>To</th>
            <th>Is Available</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exceptions as $exception)
        <tr>
            <td>{{ $exception->date }}</td>
            <td>{{ $exception->from }}</td>
            <td>{{ $exception->to }}</td>
            <td>{{ $exception->is_available ? 'Yes' : 'No' }}</td>
            <td>
                <a href="{{ route('exceptions.edit', $exception->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('exceptions.destroy', $exception->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-admin::layouts>
