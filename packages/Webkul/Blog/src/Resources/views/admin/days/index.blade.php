<!-- index.blade.php -->

<x-admin::layouts>

<div class="container">
  <div class="mb-3">
    <h2>Day List</h2>
    <a href="{{ route('admin.days.create') }}" class="btn btn-success">Add New Day</a>
  </div>

  <!-- Display days table -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Day</th>
        <th>Day of Week</th>
        <th>From Time</th>
        <th>To Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($days as $day)
        <tr>
          <td>{{ $day->day }}</td>
          <td>{{ $day->day_of_week }}</td>
          <td>{{ $day->from_time }}</td>
          <td>{{ $day->to_time }}</td>
          <td>
            <a href="{{ route('admin.days.edit', ['id' => $day->id]) }}" class="btn btn-sm btn-info">Edit</a>
            
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

</x-admin::layouts>
