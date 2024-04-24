<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            <?php echo e(trans('panel.site_title')); ?>

        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="<?php echo e(route("admin.home")); ?>" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                <?php echo e(trans('global.dashboard')); ?>

            </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/permissions*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/roles*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/users*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.userManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.permissions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.permission.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.roles.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.role.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.users.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.user.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('frontend_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/daftar-layanans*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/profiles*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/abouts*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/blogs*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/galleries*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/tims*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/sosial-media*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/footers*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.frontend.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('daftar_layanan_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.daftar-layanans.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/daftar-layanans") || request()->is("admin/daftar-layanans/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-concierge-bell c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.daftarLayanan.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.profiles.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/profiles") || request()->is("admin/profiles/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw far fa-user-circle c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.profile.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('about_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.abouts.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/abouts") || request()->is("admin/abouts/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.about.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.blogs.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw far fa-newspaper c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.blog.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gallery_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.galleries.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-camera-retro c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.gallery.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tim_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.tims.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/tims") || request()->is("admin/tims/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fab fa-teamspeak c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.tim.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sosial_medium_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.sosial-media.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/sosial-media") || request()->is("admin/sosial-media/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw far fa-share-square c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.sosialMedium.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('footer_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.footers.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/footers") || request()->is("admin/footers/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-shoe-prints c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.footer.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('fn_b_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/tables*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/bookings*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/prices*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/products*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-utensils c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.fnB.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('table_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.tables.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/tables") || request()->is("admin/tables/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-table c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.table.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('booking_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.bookings.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/bookings") || request()->is("admin/bookings/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.booking.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('price_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.prices.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/prices") || request()->is("admin/prices/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw far fa-money-bill-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.price.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.products.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fab fa-product-hunt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.product.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : ''); ?>" href="<?php echo e(route('profile.password.edit')); ?>">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        <?php echo e(trans('global.change_password')); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                <?php echo e(trans('global.logout')); ?>

            </a>
        </li>
    </ul>

</div><?php /**PATH /var/www/html/resources/views/partials/menu.blade.php ENDPATH**/ ?>