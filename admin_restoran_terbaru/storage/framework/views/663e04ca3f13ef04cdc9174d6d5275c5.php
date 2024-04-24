<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.price.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.prices.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="name"><?php echo e(trans('cruds.price.fields.name')); ?></label>
                <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" name="name" id="name" value="<?php echo e(old('name', '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.price.fields.name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="price"><?php echo e(trans('cruds.price.fields.price')); ?></label>
                <input class="form-control <?php echo e($errors->has('price') ? 'is-invalid' : ''); ?>" type="number" name="price" id="price" value="<?php echo e(old('price', '')); ?>" step="0.01" required>
                <?php if($errors->has('price')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('price')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.price.fields.price_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="description"><?php echo e(trans('cruds.price.fields.description')); ?></label>
                <input class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" type="text" name="description" id="description" value="<?php echo e(old('description', '')); ?>" required>
                <?php if($errors->has('description')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.price.fields.description_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/prices/create.blade.php ENDPATH**/ ?>