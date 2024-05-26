<x-admin::layouts>
    <h1>Edit Exception Date</h1>
    <form action="{{ route('exceptions.update', $exception->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $exception->date }}">
        </div>
        <div class="form-group">
            <label for="from">From:</label>
            <input type="time" id="from" name="from" class="form-control" value="{{ $exception->from }}">
        </div>
        <div class="form-group">
            <label for="to">To:</label>
            <input type="time" id="to" name="to" class="form-control" value="{{ $exception->to }}">
        </div>
        <div class="form-group">
            <label for="is_available">Is Available:</label>
            <input type="checkbox" id="is_available" name="is_available" value="1" class="form-check-input" {{ $exception->is_available ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin::layouts>