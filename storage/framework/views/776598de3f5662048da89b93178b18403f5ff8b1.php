<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/jquery.fancybox.min.css')); ?>" rel="stylesheet">
        <link href="/css/jquery.dataTables.css" rel="stylesheet">
        <link href="/css/dataTables.bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/jquery-ui.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <?php if(Auth::check()): ?>
                        <li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
                      <?php endif; ?>
                      <?php if (app('laratrust')->hasRole('admin')) : ?>
                      <li><a href="<?php echo e(route('fields.index')); ?>">Lapangan</a></li>
                      <li><a href="<?php echo e(route('jadwals.index')); ?>">Jadwal</a></li>
                      <li><a href="<?php echo e(route('set_times.index')); ?>">Seting Jam</a></li>
                      <li><a href="<?php echo e(route('hargas.index')); ?>">Seting Harga</a></li>
                      <li><a href="<?php echo e(route('members.index')); ?>">Member</a></li>
                      <?php endif; // app('laratrust')->hasRole ?>
                      <?php if(auth()->check()): ?>
                      <li><a href="<?php echo e(url('/settings/profile')); ?>">Profil</a></li>
                      <?php endif; ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>">Daftar</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="<?php echo e(url('/settings/password')); ?>"><i class="fa fa-btn fa-lock"></i> Ubah Password</a></li>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <!-- Scripts -->
      <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/dataTables.bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.fancybox.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/tinymce/jquery.tinymce.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/tinymce/tinymce.min.js')); ?>"></script>
      <script src="<?php echo e('/js/custom.js'); ?>"></script>
      <script src="/js/jquery-1.10.2.js"></script>
      <script src="/js/jquery-ui.js"></script>



<?php echo $__env->yieldContent('scripts'); ?>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script>
$(function() {
  $( "#datepicker" ).datepicker();
});
</script>
</body>
</html>
