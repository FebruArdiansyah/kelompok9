  

  <?php $__env->startSection('content'); ?>
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
                <li data-filter="*" class="filter-active">All</li>
                <!-- filter berdasarkan category pada model product -->
                <?php $__currentLoopData = \App\Models\Product::CATEGORY_SELECT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-filter=".filter-<?php echo e(strtolower($key)); ?>"><?php echo e($value); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 menu-item filter-<?php echo e(strtolower($p->category)); ?>">
          <img src="<?php echo e($p->getFirstMediaUrl('image', 'priview')); ?>" class="menu-img" alt="<?php echo e($p->name); ?>"/>
          <div class="menu-content">
            <a href="#"><?php echo e($p->name); ?></a><span>Rp.<?php echo e($p->price); ?></span>
          </div>
          <div class="menu-ingredients">
           <?php echo e($p->description); ?>

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
  <!-- End Menu Section -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/frontend/menu.blade.php ENDPATH**/ ?>