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
      <h1 style="margin-top: 20px;">Manage Job Lavel</h1>
      <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
      <div class="container mt-5">
        <!-- card -->

          <div class="container mt-5">
            
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