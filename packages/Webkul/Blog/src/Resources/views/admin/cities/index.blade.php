<x-admin::layouts>

<div class="container">
  <!-- Button to add new item -->
  <div class="mb-3">
    <a href="{{ route('admin.cities.create') }}" class="btn btn-success" id="addCityBtn">Add New City</a>

  </div>
  
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Cost of Travel</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cities as $city)
          <tr>
            <td>{{ $city['name'] }}</td>
            <td>{{ $city['travel_cost'] }}</td>
            <td>
                <a href="{{ route('admin.cities.edit', ['id' => $city->id]) }}" class="btn btn-sm btn-info">Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</x-admin::layouts>
