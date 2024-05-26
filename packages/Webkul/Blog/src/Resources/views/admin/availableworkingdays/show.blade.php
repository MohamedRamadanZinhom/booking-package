
<x-admin::layouts>
    <h1>My Available Working Days</h1>
    <form>
        @foreach ($daysOfWeek as $day)
            <div>
                <input type="checkbox" name="day[]" value="{{ $day }}" {{ in_array($day, $userDays) ? 'checked' : '' }}>
                <label>{{ $day }}</label>
            </div>
        @endforeach
        <div>
            <label for="from">From:</label>
            <input type="time" name="from" value="{{ $userFrom }}">
        </div>
        <div>
            <label for="to">To:</label>
            <input type="time" name="to" value="{{ $userTo }}">
        </div>
        <button type="submit" disabled>Edit</button> <!-- Disable editing on the show page -->
        <a href="{{ route('available-working-days.index') }}">Back to List</a>
    </form>
</x-admin::layouts>
