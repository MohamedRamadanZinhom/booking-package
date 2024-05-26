<x-admin::layouts>
    <h1>Add Exception Date</h1>
    <form action="{{ route('exceptions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="from">From:</label>
            <input type="time" id="from" name="from" class="form-control">
        </div>
        <div class="form-group">
            <label for="to">To:</label>
            <input type="time" id="to" name="to" class="form-control">
        </div>
        <div class="form-group">
            <label for="is_available">Is Available:</label>
            <input type="checkbox" id="is_available" name="is_available" value="1" class="form-check-input">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin::layouts>
