<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borang_permohonan_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('admin.borang-permohonans.create')); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.borangPermohonan.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.borangPermohonan.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-BorangPermohonan">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.nama_pemohon')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.email')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.no_sambungan')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.jawatan')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.unit_bahagian')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.nama_mesyuaarat')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.nama_bilik')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.pengerusi')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.dari')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.hingga')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.bil_ahli')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.borangPermohonan.fields.status')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $borangPermohonans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $borangPermohonan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($borangPermohonan->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->nama_pemohon ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->email ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->no_sambungan ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->jawatan ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->unit_bahagian ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->nama_mesyuaarat ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->nama_bilik->nama_bilik ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->pengerusi ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->dari ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->hingga ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->bil_ahli ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($borangPermohonan->status ?? ''); ?>

                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borang_permohonan_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.borang-permohonans.show', $borangPermohonan->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borang_permohonan_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.borang-permohonans.edit', $borangPermohonan->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borang_permohonan_delete')): ?>
                                    <form action="<?php echo e(route('admin.borang-permohonans.destroy', $borangPermohonan->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                    </form>
                                <?php endif; ?>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borang_permohonan_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.borang-permohonans.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
      }

      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
<?php endif; ?>

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-BorangPermohonan:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PDIE\htdocs\fama_bilikmesyuarat\resources\views/admin/borangPermohonans/index.blade.php ENDPATH**/ ?>