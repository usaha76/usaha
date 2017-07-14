<!-- //kolom id lapangan -->
<div class="form-group<?php echo e($errors->has('id_lapangan') ? ' has-error' : ''); ?>">
  <?php echo Form::label('id_lapangan','ID', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('id_lapangan', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('id_lapangan','<p class="help-block">:message</p>'); ?>

  </div>
</div>

<!-- //kolom nama lapangan -->
<div class="form-group<?php echo e($errors->has('nama_lapangan') ? ' has-error' : ''); ?>">
  <?php echo Form::label('nama_lapangan','Nama Lapangan', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('nama_lapangan', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('nama_lapangan','<p class="help-block">:message</p>'); ?>

  </div>
</div>

<!-- //kolom Harga -->
<div class="form-group<?php echo e($errors->has('harga_sewa') ? ' has-error' : ''); ?>">
  <?php echo Form::label('harga_sewa','Harga', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::text('harga_sewa', null,['class'=>'form-control']); ?>

    <?php echo $errors->first('harga_sewa','<p class="help-block">:message</p>'); ?>

  </div>
</div>

<!-- //kolom choose file teaaaa -->
<div class="form-group<?php echo e($errors->has('gambar') ? ' has-error' : ''); ?>">
  <?php echo Form::label('gambar', 'Gambar', ['class'=>'col-md-2 control-label']); ?>

  <div class="col-md-4">
    <?php echo Form::file('gambar'); ?>

    <?php if(isset($field) && $field->gambar): ?>
      <p>
      <?php echo Html::image(asset('img/'.$field->gambar), null, ['class'=>'img-rounded img-responsive']); ?>

      </p>
    <?php endif; ?>
    <?php echo $errors->first('gambar', '<p class="help-block">:message</p>'); ?>

  </div>
</div>

<div class="form-group">
  <div class="col-md-4 col-md-offset-2">
    <?php echo Form::submit('Simpan',['class'=>'btn btn-primary']); ?>

  </div>
</div>
