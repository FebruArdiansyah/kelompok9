<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.about.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.abouts.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="vision"><?php echo e(trans('cruds.about.fields.vision')); ?></label>
                <textarea class="form-control ckeditor <?php echo e($errors->has('vision') ? 'is-invalid' : ''); ?>" name="vision" id="vision"><?php echo old('vision'); ?></textarea>
                <?php if($errors->has('vision')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('vision')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.about.fields.vision_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="mission"><?php echo e(trans('cruds.about.fields.mission')); ?></label>
                <textarea class="form-control ckeditor <?php echo e($errors->has('mission') ? 'is-invalid' : ''); ?>" name="mission" id="mission"><?php echo old('mission'); ?></textarea>
                <?php if($errors->has('mission')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('mission')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.about.fields.mission_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="description"><?php echo e(trans('cruds.about.fields.description')); ?></label>
                <textarea class="form-control ckeditor <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" name="description" id="description"><?php echo old('description'); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.about.fields.description_helper')); ?></span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo e(route('admin.abouts.storeCKEditorImages')); ?>', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '<?php echo e($about->id ?? 0); ?>');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/abouts/create.blade.php ENDPATH**/ ?>