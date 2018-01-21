<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  @php ($url_parts = explode('/', url()->current()))
  @php ($page = end($url_parts))
  @if ($page == 'www.outdooradventureclubatou.com') <title>OAC - Home</title> @endif
  @if ($page == 'trips') <title>OAC - Trips</title> @endif
  @if ($page == 'members') <title>OAC - Members</title> @endif
  @if ($page == 'gear_rental') <title>OAC - Gear Rental</title> @endif
  @if ($page == 'faqs') <title>OAC - FAQs</title> @endif
  @if ($page == 'manage_trips') <title>OAC - Manage Trips</title> @endif
  @if ($page == 'manage_members') <title>OAC - Manage Members</title> @endif
  @if ($page == 'manage_gear') <title>OAC - Manage Gear</title> @endif
  @if ($page == 'manage_eboard') <title>OAC - Manage E-Board</title> @endif
  @if ($page == 'login') <title>OAC - Login</title> @endif
  @if ($page == 'register') <title>OAC - Register</title> @endif
  @if ($page == 'settings') <title>OAC - Settings</title> @endif

  <!-- Icons -->
  <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-hidden aside-menu-fixed aside-menu-hidden" style="font-family: 'Cabin', sans-serif">
    @include ('layouts.nav')
    @yield ('content')
    <!-- Bootstrap and necessary plugins -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>

    <!-- CoreUI main scripts -->

    <script src="js/app.js"></script>

    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>
</body>
</html>
