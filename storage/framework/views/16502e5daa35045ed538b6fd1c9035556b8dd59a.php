<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
<li><a href="<?php echo e(url('/admin/members')); ?>">Member</a></li>
<li class="active">Tambah Member</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Tambah Member</h2>
</div>
<div class="panel-body">
<?php echo Form::open(['url' => route('members.store'),
'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']); ?>

<?php echo $__env->make('members._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo Form::close(); ?>

</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>