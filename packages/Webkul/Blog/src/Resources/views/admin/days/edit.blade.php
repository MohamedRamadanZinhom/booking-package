<!-- edit.blade.php -->

<x-admin::layouts>

<div class="container">
  <div class="mb-3">
    <h2>Edit Day</h2>
  </div>

  <!-- Day edit form -->
  <form method="POST" action="{{ route('admin.days.update', ['id' => $day->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="day">Day:</label>
      <input type="text" class="form-control" id="day" name="day" value="{{ $day->day }}" required>
    </div>
    <div class="form-group">
      <label for="day_of_week">Day of Week:</label>
      <input type="text" class="form-control" id="day_of_week" name="day_of_week" value="{{ $day->day_of_week }}" required>
    </div>
    <div class="form-group">
      <label for="from_time">From Time:</label>
      <input type="text" class="form-control" id="from_time" name="from_time" value="{{ $day->from_time }}" required>
    </div>
    <div class="form-group">
      <label for="to_time">To Time:</label>
      <input type="text" class="form-control" id="to_time" name="to_time" value="{{ $day->to_time }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</x-admin::layouts>
