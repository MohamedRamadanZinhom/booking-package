
<x-admin::layouts>

<h1>Add New Available Working Day</h1>
<form action="{{ route('available-working-days.store') }}" method="POST">
    @csrf
    <div>
        <label for="day">Select Days:</label><br>
        <input type="checkbox" name="day[]" value="Monday"> Monday<br>
        <input type="checkbox" name="day[]" value="Tuesday"> Tuesday<br>
        <input type="checkbox" name="day[]" value="Wednesday"> Wednesday<br>
        <input type="checkbox" name="day[]" value="Thursday"> Thursday<br>
        <input type="checkbox" name="day[]" value="Friday"> Friday<br>
        <input type="checkbox" name="day[]" value="Saturday"> Saturday<br>
        <input type="checkbox" name="day[]" value="Sunday"> Sunday<br>
    </div>
    <div>
        <label for="from">From:</label>
        <input type="time" name="from">
    </div>
    <div>
        <label for="to">To:</label>
        <input type="time" name="to">
    </div>
    <div>
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id">
    </div>
    <button type="submit">Save</button>
</form>

</x-admin::layouts>
