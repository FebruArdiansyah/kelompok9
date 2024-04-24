<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.about.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.abouts.store")); ?>" name="formData" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="image"><?php echo e(trans('cruds.product.fields.image')); ?></label>
              <div class="needsclick dropzone <?php echo e($errors->has('image') ? 'is-invalid' : ''); ?>" id="image-dropzone">
              </div>
              <?php if($errors->has('image')): ?>
                  <div class="invalid-feedback">
                      <?php echo e($errors->first('image')); ?>

                  </div>
              <?php endif; ?>
              <span class="help-block"><?php echo e(trans('cruds.product.fields.image_helper')); ?></span>
          </div>
            <div class="form-group">
                <label for="vision"><?php echo e(trans('cruds.about.fields.about')); ?></label>
                <textarea class="form-control ckeditor <?php echo e($errors->has('vision') ? 'is-invalid' : ''); ?>" name="vision" id="vision"><?php echo old('vision'); ?></textarea>
                <?php if($errors->has('vision')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('vision')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.about.fields.vision_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="mission"><?php echo e(trans('cruds.about.fields.tittle')); ?></label>
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
                <label for="description"><?php echo e(trans('cruds.product.fields.description')); ?></label>
                <input class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" type="text" name="description" id="description" value="<?php echo e(old('description', '')); ?>">
                <?php if($errors->has('description')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.product.fields.description_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" name="submit" type="submit">
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
    url: '<?php echo e(route('admin.products.storeMedia')); ?>',
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
<?php if(isset($product) && $product->image): ?>
      var file = <?php echo json_encode($product->image); ?>

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

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formData');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Kirim form data menggunakan AJAX
        const formData = new FormData(form);
        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: formData,
            // Tambahkan ini untuk memastikan respons yang diterima adalah JSON
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Tampilkan sweet alert jika data berhasil disimpan
            Swal.fire({
              title: 'Terima kasih!',
              text: 'Pesan kamu berhasil terkirim !',
              icon: 'success',
              confirmButtonText: 'OK'
            });

            // Kosongkan nilai dari elemen-elemen formulir setelah berhasil disimpan
            form.reset();
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Error!',
                text: 'Something went wrong!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/abouts/create.blade.php ENDPATH**/ ?>