<header class="app-header navbar navbar-dark bg-dark border-dark ml-0">
  <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto ml-4" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-brand bg-dark border-dark"></div>

  <ul class="nav navbar-nav d-md-down-none border-dark">
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'www.outdooradventureclubatou.com') active @endif" href="\">Home</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'trips') active @endif" href="/trips">Trips</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'members') active @endif" href="/members">Members</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'gallery') active @endif" href="/gallery" disabled>Gallery</a>
    </li>
    <li class="nav-item px-3 dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">E-Board</a>
      <div class="dropdown-menu" aria-labelledby="adminDropdown">
        <a class="dropdown-item @if ($page == 'eboard') active @endif" href="/eboard">Current E-Board</a>
        <a class="dropdown-item @if ($page == 'eboard_positions') active @endif" href="/eboard_positions" disabled>E-Board Positions</a>
      </div>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link @if ($page == 'faqs') active @endif" href="/faqs">FAQ's</a>
    </li>
    @if (auth()->check())
    <li class="nav-item px-3 dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Admin
      </a>
      <div class="dropdown-menu" aria-labelledby="adminDropdown">
        <a class="dropdown-item @if ($page == 'manage_trips') active @endif" href="/manage_trips" disabled>Manage Trips</a>
        <a class="dropdown-item @if ($page == 'manage_members') active @endif" href="/manage_members" disabled>Manage Members</a>
        <a class="dropdown-item" href="#" disabled>Manage E-Board</a>
        <a class="dropdown-item" href="#" disabled>Manage Gear</a>
      </div>
    </li>
    @endif
  </ul>
  <ul class="nav navbar-nav ml-auto mr-3">
    @if (auth()->check())
    <ul class="nav navbar-nav navbar-right">
        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/avatars/nick.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
        </div>
    </ul>
    @else
    <ul class="nav navbar-nav navbar-right">
        <li role="nav-item px-3" @if ($page == 'login') class="active nav-item" @else class="nav-item" @endif>
            <a class="nav-link" href="/login">Login</a>
        </li>
        <li role="nav-item px-3" @if ($page == 'register') class="active nav-item" @else class="nav-item" @endif>
            <a class="nav-link" href="/register">Register</a>
        </li>
    </ul>
    @endif
    </li>
  </ul>

</header>
