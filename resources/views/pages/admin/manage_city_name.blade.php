@extends('layout.app')
@section('content')

<!-- Main Content -->
<div id="page-content-wrapper" style="flex-grow: 1; overflow-x: hidden;">
    <nav style="background-color: #f8f9fa; border-bottom: 1px solid #ddd; padding: 10px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <button id="menu-toggle" style="background-color: #0d6efd; color: white; border: none; padding: 10px 20px; cursor: pointer;">
                Toggle Menu
            </button>
        </div>
    </nav>

    <div style="padding: 20px;">
        <h1 style="margin-top: 20px;">Manage City Name</h1>

        <!-- Job Level Entry Form -->
        <div class="card" style="margin-top: 20px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h3>City Name Entry</h3>
            <form action="{{ route('city_name_store') }}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="country_name" class="form-label">Country Name</label>
                    <select id="country_name" name="country_id" class="form-control" required>
                        <option value="" disabled selected>Select a country</option>
                    @foreach($countrye as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                    </select>



                    <label for="city_name" class="form-label">Enter city name</label>
                    <input type="text" id="city_name" name="name" class="form-control" placeholder="Enter city name" required>

                </div>
                <button type="submit" class="btn btn-primary">Add city name</button>
            </form>
        </div>

        <!-- Job Level List -->
        <div class="card" style="margin-top: 30px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h3>city Name List</h3>
            <table class="table table-bordered table-striped" style="margin-top: 20px;">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>city Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example rows (replace with dynamic data) -->
                    @foreach ($cityname as $index => $cityname)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $cityname->city_name }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        document.getElementById("wrapper").classList.toggle("toggled");
    });
</script>
@endsection
