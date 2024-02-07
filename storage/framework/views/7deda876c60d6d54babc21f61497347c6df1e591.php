<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.borangPermohonan.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.borang-permohonans.update", [$borangPermohonan->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="nama_pemohon"><?php echo e(trans('cruds.borangPermohonan.fields.nama_pemohon')); ?></label>
                <input class="form-control <?php echo e($errors->has('nama_pemohon') ? 'is-invalid' : ''); ?>" type="text" name="nama_pemohon" id="nama_pemohon" value="<?php echo e(old('nama_pemohon', $borangPermohonan->nama_pemohon)); ?>" required>
                <?php if($errors->has('nama_pemohon')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('nama_pemohon')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.nama_pemohon_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="email"><?php echo e(trans('cruds.borangPermohonan.fields.email')); ?></label>
                <input class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" type="email" name="email" id="email" value="<?php echo e(old('email', $borangPermohonan->email)); ?>" required>
                <?php if($errors->has('email')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.email_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="no_sambungan"><?php echo e(trans('cruds.borangPermohonan.fields.no_sambungan')); ?></label>
                <input class="form-control <?php echo e($errors->has('no_sambungan') ? 'is-invalid' : ''); ?>" type="text" name="no_sambungan" id="no_sambungan" value="<?php echo e(old('no_sambungan', $borangPermohonan->no_sambungan)); ?>" required>
                <?php if($errors->has('no_sambungan')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('no_sambungan')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.no_sambungan_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="jawatan"><?php echo e(trans('cruds.borangPermohonan.fields.jawatan')); ?></label>
                <input class="form-control <?php echo e($errors->has('jawatan') ? 'is-invalid' : ''); ?>" type="text" name="jawatan" id="jawatan" value="<?php echo e(old('jawatan', $borangPermohonan->jawatan)); ?>" required>
                <?php if($errors->has('jawatan')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('jawatan')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.jawatan_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="unit_bahagian"><?php echo e(trans('cruds.borangPermohonan.fields.unit_bahagian')); ?></label>
                <input class="form-control <?php echo e($errors->has('unit_bahagian') ? 'is-invalid' : ''); ?>" type="text" name="unit_bahagian" id="unit_bahagian" value="<?php echo e(old('unit_bahagian', $borangPermohonan->unit_bahagian)); ?>" required>
                <?php if($errors->has('unit_bahagian')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('unit_bahagian')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.unit_bahagian_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_mesyuaarat"><?php echo e(trans('cruds.borangPermohonan.fields.nama_mesyuaarat')); ?></label>
                <input class="form-control <?php echo e($errors->has('nama_mesyuaarat') ? 'is-invalid' : ''); ?>" type="text" name="nama_mesyuaarat" id="nama_mesyuaarat" value="<?php echo e(old('nama_mesyuaarat', $borangPermohonan->nama_mesyuaarat)); ?>" required>
                <?php if($errors->has('nama_mesyuaarat')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('nama_mesyuaarat')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.nama_mesyuaarat_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_bilik_id"><?php echo e(trans('cruds.borangPermohonan.fields.nama_bilik')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('nama_bilik') ? 'is-invalid' : ''); ?>" name="nama_bilik_id" id="nama_bilik_id" required>
                    <?php $__currentLoopData = $nama_biliks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((old('nama_bilik_id') ? old('nama_bilik_id') : $borangPermohonan->nama_bilik->id ?? '') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('nama_bilik')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('nama_bilik')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.nama_bilik_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="pengerusi"><?php echo e(trans('cruds.borangPermohonan.fields.pengerusi')); ?></label>
                <input class="form-control <?php echo e($errors->has('pengerusi') ? 'is-invalid' : ''); ?>" type="text" name="pengerusi" id="pengerusi" value="<?php echo e(old('pengerusi', $borangPermohonan->pengerusi)); ?>" required>
                <?php if($errors->has('pengerusi')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('pengerusi')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.pengerusi_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="dari"><?php echo e(trans('cruds.borangPermohonan.fields.dari')); ?></label>
                <input class="form-control datetime <?php echo e($errors->has('dari') ? 'is-invalid' : ''); ?>" type="text" name="dari" id="dari" value="<?php echo e(old('dari', $borangPermohonan->dari)); ?>" required>
                <?php if($errors->has('dari')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('dari')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.dari_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="hingga"><?php echo e(trans('cruds.borangPermohonan.fields.hingga')); ?></label>
                <input class="form-control datetime <?php echo e($errors->has('hingga') ? 'is-invalid' : ''); ?>" type="text" name="hingga" id="hingga" value="<?php echo e(old('hingga', $borangPermohonan->hingga)); ?>" required>
                <?php if($errors->has('hingga')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('hingga')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.hingga_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="bil_ahli"><?php echo e(trans('cruds.borangPermohonan.fields.bil_ahli')); ?></label>
                <input class="form-control <?php echo e($errors->has('bil_ahli') ? 'is-invalid' : ''); ?>" type="number" name="bil_ahli" id="bil_ahli" value="<?php echo e(old('bil_ahli', $borangPermohonan->bil_ahli)); ?>" step="1">
                <?php if($errors->has('bil_ahli')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('bil_ahli')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.bil_ahli_helper')); ?></span>
            </div>
            <div class="form-group">
    <label class="required" for="status"><?php echo e(trans('cruds.borangPermohonan.fields.status')); ?></label>
    <select class="form-control <?php echo e($errors->has('status') ? 'is-invalid' : ''); ?>" name="status" id="status" required>
        <option value="DALAM PROSES" <?php echo e(old('status', 'DALAM PROSES') === 'DALAM PROSES' ? 'selected' : ''); ?>>DALAM PROSES</option>
        <option value="TEMPAHAN BERJAYA" <?php echo e(old('status') === 'TEMPAHAN BERJAYA' ? 'selected' : ''); ?>>TEMPAHAN BERJAYA</option>
        <option value="TEMPAHAN TIDAK BERJAYA" <?php echo e(old('status') === 'TEMPAHAN TIDAK BERJAYA' ? 'selected' : ''); ?>>TEMPAHAN TIDAK BERJAYA</option>
    </select>
    <?php if($errors->has('status')): ?>
        <div class="invalid-feedback">
            <?php echo e($errors->first('status')); ?>

        </div>
    <?php endif; ?>
    <span class="help-block"><?php echo e(trans('cruds.borangPermohonan.fields.status_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PDIE\htdocs\fama_bilikmesyuarat\resources\views/admin/borangPermohonans/edit.blade.php ENDPATH**/ ?>