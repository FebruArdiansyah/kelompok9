<?php $__env->startSection('content'); ?>

<main id="main">
    <!-- ======= About Section ======= -->
    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div
            class="col-lg-6 order-1 order-lg-2"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            <div class="about-img">
              <img src="<?php echo e($a->getFirstMediaUrl('blogimage', 'priview')); ?>" alt="<?php echo e($a->tittle); ?>" />
            </div>
          </div>
  
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo e($a->title); ?></h3>
            <p class="fst-italic">
             <?php echo $a ->detail_content; ?>

            </p>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <!-- End About Section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/frontend/abouts.blade.php ENDPATH**/ ?>