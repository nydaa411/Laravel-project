<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3><?php echo e($post->title); ?></h3>
        </div>
        <div class="card-body">
            <p><?php echo e($post->description); ?></p>
        </div>
        <div class="card-footer">
            <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-warning">تعديل</a>
            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\htdocs\Laravel\first_project\resources\views/posts/show.blade.php ENDPATH**/ ?>