<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- الأزرار العلوية -->
                    <div class="d-flex justify-content-center mb-3">
                        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary mx-2">عرض المقالات</a>
                        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success mx-2">إنشاء مقال جديد</a>
                    </div>

                    <!-- زر لتسجيل الخروج في أسفل الصفحة على اليمين -->
                    <div class="d-flex justify-content-end mt-3">
                        <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                    </div>

                    <!-- نموذج لتسجيل الخروج -->
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\htdocs\Laravel\first_project\resources\views/home.blade.php ENDPATH**/ ?>