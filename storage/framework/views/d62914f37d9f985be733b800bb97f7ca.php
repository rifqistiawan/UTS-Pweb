<?php $__env->startSection('title', 'Masuk'); ?>


<?php $__env->startSection('hide_nav', '1'); ?>

<?php $__env->startSection('content'); ?>
<div class="login-wrap">
    <div class="login-hero">
        <h1>Pustaka<span class="accent">Kita</span></h1>
        <p>Kelola koleksi buku, pantau peminjaman, dan temukan bacaan baru dalam satu tempat yang rapi.</p>
    </div>

    <div class="login-form">
        <h2>Masuk ke akun</h2>

        <form action="<?php echo e(route('login.process')); ?>" method="POST" novalidate>
            <?php echo csrf_field(); ?>

            <div class="field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"
                       value="<?php echo e(old('username')); ?>" placeholder="contoh: rifqi" autofocus>
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 4 karakter">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\uts-web\resources\views/login.blade.php ENDPATH**/ ?>