<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
<li class="active">Ubah Password</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Ubah Password</h2>
</div>
<div class="panel-body">
<?php echo Form::open(['url' => url('/settings/password'),
'method' => 'post', 'class'=>'form-horizontal']); ?>

<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
<?php echo Form::label('password', 'Password lama', ['class'=>'col-md-4 control-label']); ?>

<div class="col-md-6">
<?php echo Form::password('password', ['class'=>'form-control']); ?>

<?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

</div>
</div>
<div class="form-group<?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
<?php echo Form::label('new_password', 'Password baru', ['class'=>'col-md-4 control-label']); ?>

<div class="col-md-6">
<?php echo Form::password('new_password', ['class'=>'form-control']); ?>

<?php echo $errors->first('new_password', '<p class="help-block">:message</p>'); ?>

</div>
</div>
<div class="form-group<?php echo e($errors->has('new_password_confirmation') ? ' has-error': ''); ?>">
<?php echo Form::label('new_password_confirmation', 'Konfirmasi password baru', ['class'=>'col-md-4 control-label']); ?>

<div class="col-md-6">
<?php echo Form::password('new_password_confirmation', ['class'=>'form-control']); ?>

<?php echo $errors->first('new_password_confirmation', '<p class="help-block">:message</p>'); ?>

</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary']); ?>

</div>
</div>
<?php echo Form::close(); ?>

</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>