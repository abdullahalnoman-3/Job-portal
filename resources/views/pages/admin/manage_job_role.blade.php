@extends('layout.admin.admin_layout')
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
        <h1 style="margin-top: 20px;">Manage Job Role</h1>

        <!-- Job Level Entry Form -->
        <div class="card" style="margin-top: 20px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h3>Job Level Entry</h3>
            <form action="{{ route('job_role_store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="jobroleName" class="form-label">Job Role Name</label>
                    <input type="text" id="jobrolelName" name="name" class="form-control" placeholder="Enter job level name" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Job role</button>
            </form>
        </div>

        <!-- Job Level List -->
        <div class="card" style="margin-top: 30px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h3>Job role List</h3>
            <table class="table table-bordered table-striped" style="margin-top: 20px;">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Job Role Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example rows (replace with dynamic data) -->
                    @foreach ($jobroles as $index => $jobroles)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $jobroles->job_role_name }}</td>
                            <td>
                                <!-- {{-- <a href="{{ route('job-level.edit', $jobLevel->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('job-level.destroy', $jobLevel->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form> --}} -->
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
