<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>إضافة مقال جديد</h2>
    <form method="POST" action="<?php echo e(route('posts.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">عنوان المقال</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">وصف المقال</label>
            <textarea name="description" class="form-control" id="description" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">حفظ المقال</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\htdocs\Laravel\first_project\resources\views/posts/create.blade.php ENDPATH**/ ?>