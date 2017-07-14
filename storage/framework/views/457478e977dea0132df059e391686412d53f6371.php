<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
<li class="active">Ubah Profil</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Ubah Profil</h2>
</div>
<div class="panel-body">
<?php echo Form::model(auth()->user(), ['url' => url('/settings/profile'),
'method' => 'post', 'class'=>'form-horizontal']); ?>

<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
<?php echo Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']); ?>

<div class="col-md-6">
<?php echo Form::text('name', null, ['class'=>'form-control']); ?>

<?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
</div>
<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
<?php echo Form::label('email', 'Email', ['class'=>'col-md-4 control-label']); ?>

<div class="col-md-6">
<?php echo Form::email('email', null, ['class'=>'form-control']); ?>

<?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

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