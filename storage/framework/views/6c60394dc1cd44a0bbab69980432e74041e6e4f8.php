<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.borangPermohonan.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.borang-permohonans.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.nama_pemohon')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->nama_pemohon); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.email')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->email); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.no_sambungan')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->no_sambungan); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.jawatan')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->jawatan); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.unit_bahagian')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->unit_bahagian); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.nama_mesyuaarat')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->nama_mesyuaarat); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.nama_bilik')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->nama_bilik->nama_bilik ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.pengerusi')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->pengerusi); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.dari')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->dari); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.hingga')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->hingga); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.bil_ahli')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->bil_ahli); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.status')); ?>

                        </th>
                        <td>
                            <?php echo e($borangPermohonan->status); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.borang-permohonans.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PDIE\htdocs\fama_bilikmesyuarat\resources\views/admin/borangPermohonans/show.blade.php ENDPATH**/ ?>