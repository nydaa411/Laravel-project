<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mb-3">
        <div class="col-md-12 text-end">
            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">إضافة مقال جديد</a>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($post->title); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($post->description, 100)); ?></p>
                        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary">عرض المقال</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\htdocs\Laravel\first_project\resources\views/posts/index.blade.php ENDPATH**/ ?>