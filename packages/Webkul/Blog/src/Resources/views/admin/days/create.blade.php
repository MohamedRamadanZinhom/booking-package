<!-- create.blade.php -->

<x-admin::layouts>

<div class="container">
  <div class="mb-3">
    <h2>Add New Day</h2>
  </div>

  <!-- Day creation form -->
  <form method="POST" action="{{ route('admin.days.store') }}">
    @csrf
    <div class="form-group">
      <label for="day">Day:</label>
      <input type="text" class="form-control" id="day" name="day" required>
    </div>
    <div class="form-group">
      <label for="day_of_week">Day of Week:</label>
      <input type="text" class="form-control" id="day_of_week" name="day_of_week" required>
    </div>
    <div class="form-group">
      <label for="from_time">From Time:</label>
      <input type="text" class="form-control" id="from_time" name="from_time" required>
    </div>
    <div class="form-group">
      <label for="to_time">To Time:</label>
      <input type="text" class="form-control" id="to_time" name="to_time" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</x-admin::layouts>
