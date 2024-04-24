<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('admin.profiles.create')); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.profile.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.profile.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Profile">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.name')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.fullname')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.address')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.phone')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.email')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.image')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.profile.fields.faximile')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($profile->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($profile->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($profile->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($profile->fullname ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($profile->address ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($profile->phone ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($profile->email ?? ''); ?>

                            </td>
                            <td>
                                <?php if($profile->image): ?>
                                    <a href="<?php echo e($profile->image->getUrl()); ?>" target="_blank" style="display: inline-block">
                                        <img src="<?php echo e($profile->image->getUrl('thumb')); ?>">
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e($profile->faximile ?? ''); ?>

                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.profiles.show', $profile->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.profiles.edit', $profile->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_delete')): ?>
                                    <form action="<?php echo e(route('admin.profiles.destroy', $profile->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.profiles.massDestroy')); ?>",
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
  let table = $('.datatable-Profile:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/profiles/index.blade.php ENDPATH**/ ?>