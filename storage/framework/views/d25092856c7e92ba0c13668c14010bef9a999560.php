<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.bilik.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.biliks.update", [$bilik->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="kapasiti"><?php echo e(trans('cruds.bilik.fields.kapasiti')); ?></label>
                <input class="form-control <?php echo e($errors->has('kapasiti') ? 'is-invalid' : ''); ?>" type="text" name="kapasiti" id="kapasiti" value="<?php echo e(old('kapasiti', $bilik->kapasiti)); ?>" required>
                <?php if($errors->has('kapasiti')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('kapasiti')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.bilik.fields.kapasiti_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="lokasi"><?php echo e(trans('cruds.bilik.fields.lokasi')); ?></label>
                <input class="form-control <?php echo e($errors->has('lokasi') ? 'is-invalid' : ''); ?>" type="text" name="lokasi" id="lokasi" value="<?php echo e(old('lokasi', $bilik->lokasi)); ?>" required>
                <?php if($errors->has('lokasi')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('lokasi')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.bilik.fields.lokasi_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_bilik"><?php echo e(trans('cruds.bilik.fields.nama_bilik')); ?></label>
                <input class="form-control <?php echo e($errors->has('nama_bilik') ? 'is-invalid' : ''); ?>" type="text" name="nama_bilik" id="nama_bilik" value="<?php echo e(old('nama_bilik', $bilik->nama_bilik)); ?>" required>
                <?php if($errors->has('nama_bilik')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('nama_bilik')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.bilik.fields.nama_bilik_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PDIE\htdocs\fama_bilikmesyuarat\resources\views/admin/biliks/edit.blade.php ENDPATH**/ ?>