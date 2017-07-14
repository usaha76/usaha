<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
<li class="active">Profil</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Profil</h2>
</div>
<div class="panel-body">
<table class="table">
<tbody>
  <tr>
<td class="text-muted">Nama</td>
<td><?php echo e(auth()->user()->name); ?></td>
</tr>
<tr>
<td class="text-muted">Email</td>
<td><?php echo e(auth()->user()->email); ?></td>
</tr>
</tbody>
</table>
<a class="btn btn-primary" href="<?php echo e(url('/settings/profile/edit')); ?>">Ubah</a>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>