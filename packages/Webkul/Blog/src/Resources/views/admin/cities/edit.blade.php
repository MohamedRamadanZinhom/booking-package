<!-- edit.blade.php -->

<x-admin::layouts>

<div class="container">
  <div class="mb-3">
    <h2>Edit City</h2>
  </div>

  <!-- Display validation errors if any -->
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- City edit form -->
  <form method="POST" action="{{ route('admin.cities.update', $city->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $city->name }}" required>
    </div>
    <div class="form-group">
      <label for="travel_cost">Cost of Travel:</label>
      <input type="number" class="form-control" id="travel_cost" name="travel_cost" value="{{ $city->travel_cost }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</x-admin::layouts>
