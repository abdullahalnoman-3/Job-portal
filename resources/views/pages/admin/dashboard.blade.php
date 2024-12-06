@extends('layout.app')
@section('content')

    <div class="d-flex" id="wrapper" style="display: flex; flex-wrap: nowrap; height: 100vh;">
  <!-- Sidebar -->
  <div id="sidebar-wrapper" style="flex-shrink: 0; width: 250px; height: 100vh; background-color: #0d6efd; color: white; overflow-y: auto;">
    <div style="text-align: center; padding: 20px 0; font-size: 1.5rem; font-weight: bold; border-bottom: 1px solid white;">
      Admin Panel
    </div>
    <div style="margin-top: 20px;">
      <a href="#dashboard" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-speedometer2" style="margin-right: 10px;"></i> Dashboard
      </a>
      <a href="#jobs" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-briefcase" style="margin-right: 10px;"></i> Manage Jobs
      </a>
      <a href="#applications" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-file-earmark-text" style="margin-right: 10px;"></i> Applications
      </a>
      <a href="#users" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-people" style="margin-right: 10px;"></i> Users
      </a>
      <a href="/admin_db_input" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-people" style="margin-right: 10px;"></i> Dropdown input
      </a>
      <a href="#reports" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-bar-chart" style="margin-right: 10px;"></i> Reports
      </a>
      <a href="#settings" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-gear" style="margin-right: 10px;"></i> Settings
      </a>
    </div>
  </div>

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
      <h1 style="margin-top: 20px;">Dashboard</h1>
      <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
        <div style="flex: 1; max-width: 300px; background-color: #0d6efd; color: white; padding: 20px; border-radius: 5px; font-size: 1.2rem;">
          Total Jobs: 120
        </div>
        <div style="flex: 1; max-width: 300px; background-color: #198754; color: white; padding: 20px; border-radius: 5px; font-size: 1.2rem;">
          Total Applicants: 450
        </div>
        <div style="flex: 1; max-width: 300px; background-color: #ffc107; color: white; padding: 20px; border-radius: 5px; font-size: 1.2rem;">
          Active Employers: 30
        </div>
        <div style="flex: 1; max-width: 300px; background-color: #dc3545; color: white; padding: 20px; border-radius: 5px; font-size: 1.2rem;">
          Pending Approvals: 5
        </div>
      </div>
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