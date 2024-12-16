<!-- Sidebar -->
<div id="sidebar-wrapper" style="flex-shrink: 0; width: 250px; height: 100vh; background-color: #6300b3; color: white; overflow-y: auto;">
    <div style="text-align: center; padding: 20px 0; font-size: 1.5rem; font-weight: bold; border-bottom: 1px solid white;">
      User Panel
    </div>
    <div style="margin-top: 20px;">
      <a href="dashboard" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-speedometer2" style="margin-right: 10px;"></i> Dashboard
      </a>

      <a href="{{route('user_save_job')}}" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-gear" style="margin-right: 10px;"></i> Save Job 
      </a>

      <a href="{{route('user_apply_job')}}" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-gear" style="margin-right: 10px;"></i> Apply Jobs
      </a>
      <a href="{{route('brows_company')}}" style="display: block; text-decoration: none; color: white; padding: 15px 20px; font-weight: 600; background-color: transparent;">
        <i class="bi bi-gear" style="margin-right: 10px;"></i> Brows Company
      </a>
    </div>
  </div>
