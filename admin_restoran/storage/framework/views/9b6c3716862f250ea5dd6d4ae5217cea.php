<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.table.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.tables.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="image"><?php echo e(trans('cruds.table.fields.image')); ?></label>
                <div class="needsclick dropzone <?php echo e($errors->has('image') ? 'is-invalid' : ''); ?>" id="image-dropzone">
                </div>
                <?php if($errors->has('image')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('image')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.table.fields.image_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="name"><?php echo e(trans('cruds.table.fields.name')); ?></label>
                <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" name="name" id="name" value="<?php echo e(old('name', '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.table.fields.name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="description"><?php echo e(trans('cruds.table.fields.description')); ?></label>
                <input class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" type="text" name="description" id="description" value="<?php echo e(old('description', '')); ?>">
                <?php if($errors->has('description')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.table.fields.description_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="start"><?php echo e(trans('cruds.table.fields.start')); ?></label>
                <input class="form-control timepicker <?php echo e($errors->has('start') ? 'is-invalid' : ''); ?>" type="text" name="start" id="start" value="<?php echo e(old('start')); ?>">
                <?php if($errors->has('start')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('start')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.table.fields.start_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="finish"><?php echo e(trans('cruds.table.fields.finish')); ?></label>
                <input class="form-control timepicker <?php echo e($errors->has('finish') ? 'is-invalid' : ''); ?>" type="text" name="finish" id="finish" value="<?php echo e(old('finish')); ?>">
                <?php if($errors->has('finish')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('finish')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.table.fields.finish_helper')); ?></span>
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

<?php $__env->startSection('scripts'); ?>
<script>
    Dropzone.options.imageDropzone = {
    url: '<?php echo e(route('admin.tables.storeMedia')); ?>',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
<?php if(isset($table) && $table->image): ?>
      var file = <?php echo json_encode($table->image); ?>

          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
<?php endif; ?>
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/tables/create.blade.php ENDPATH**/ ?>