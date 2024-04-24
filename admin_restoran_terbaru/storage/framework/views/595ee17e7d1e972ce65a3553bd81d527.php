<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.sosialMedium.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.sosial-media.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name"><?php echo e(trans('cruds.sosialMedium.fields.name')); ?></label>
                <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" name="name" id="name" value="<?php echo e(old('name', '')); ?>">
                <?php if($errors->has('name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.sosialMedium.fields.name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="icon"><?php echo e(trans('cruds.sosialMedium.fields.icon')); ?></label>
                <input class="form-control <?php echo e($errors->has('icon') ? 'is-invalid' : ''); ?>" type="text" name="icon" id="icon" value="<?php echo e(old('icon', '')); ?>">
                <?php if($errors->has('icon')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('icon')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.sosialMedium.fields.icon_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="url"><?php echo e(trans('cruds.sosialMedium.fields.url')); ?></label>
                <input class="form-control <?php echo e($errors->has('url') ? 'is-invalid' : ''); ?>" type="text" name="url" id="url" value="<?php echo e(old('url', '')); ?>">
                <?php if($errors->has('url')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('url')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.sosialMedium.fields.url_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/sosialMedia/create.blade.php ENDPATH**/ ?>