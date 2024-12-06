@extends('layout.app')
@section('content')
    <div>
        <h1>Hello, Admin</h1>
    </div>

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
      <div class="container mt-5">
        <!-- card -->

          <div class="container mt-5">
            <div class="row">
              <!-- Card 1 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField1" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 2</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField2" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 3</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField3" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Card 4 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 4</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField4" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Card 5 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 5</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField5" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Card 6 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 6</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField6" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Card 7 -->
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card Title 7</h5>
                    <p class="card-text">Enter some text below:</p>
                    <form>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="inputField7" placeholder="Enter something">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        


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