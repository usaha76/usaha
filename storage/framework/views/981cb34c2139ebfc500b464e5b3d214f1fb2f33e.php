<!-- //kolom id lapangan -->
<!-- <div class="form-group<?php echo e($errors->has('id_lapangan') ? ' has-error' : ''); ?>">
  <?php echo Form::label('id_lapangan','ID', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('id_lapangan', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('id_lapangan','<p class="help-block">:message</p>'); ?>

  </div>
</div> -->

<!-- //kolom nama lapangan -->
<div class="form-group<?php echo e($errors->has('time_group') ? ' has-error' : ''); ?>">
  <?php echo Form::label('time_group','Time Group', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('time_group', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('time_group','<p class="help-block">:message</p>'); ?>

  </div>
</div>

<!-- //kolom Harga -->
<div class="form-group<?php echo e($errors->has('jam_awal') ? ' has-error' : ''); ?>">
  <?php echo Form::label('jam_awal','Jam Awal', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('jam_awal', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('jam_awal','<p class="help-block">:message</p>'); ?>

  </div>
</div>

<!-- //kolom choose file teaaaa -->
<div class="form-group<?php echo e($errors->has('jam_akhir') ? ' has-error' : ''); ?>">
  <?php echo Form::label('jam_akhir', 'Jam Akhir', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('jam_akhir', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('jam_akhir','<p class="help-block">:message</p>'); ?>

  </div>
</div>

<div class="form-group">
  <div class="col-md-4 col-md-offset-2">
    <?php echo Form::submit('Simpan',['class'=>'btn btn-primary']); ?>

  </div>
</div>
