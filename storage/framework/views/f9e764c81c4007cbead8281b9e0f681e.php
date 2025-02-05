<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('تعديل المقال')); ?></div>

                <div class="card-body">
                    <!-- التحقق من الأخطاء -->
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- نموذج تعديل المقال -->
                    <form method="POST" action="<?php echo e(route('posts.update', $post->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label for="title" class="form-label">عنوان المقال</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title', $post->title)); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">وصف المقال</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required><?php echo e(old('description', $post->description)); ?></textarea>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-success">تحديث المقال</button>
                        </div>
                    </form>

                    <!-- زر العودة إلى الصفحة السابقة -->
                    <div class="d-flex justify-content-center mt-3">
                        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">العودة إلى المقالات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\htdocs\Laravel\first_project\resources\views/posts/edit.blade.php ENDPATH**/ ?>