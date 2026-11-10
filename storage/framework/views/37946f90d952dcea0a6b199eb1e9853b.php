<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head">
    <h1>Profil Anggota</h1>
    <p class="lead">Informasi akun yang sedang masuk.</p>
</div>

<div class="grid grid-2">
    <section class="card">
        <div class="profile-head">
            <div class="avatar"><?php echo e(strtoupper(substr($username, 0, 1))); ?></div>
            <div>
                <h2 style="margin-bottom: 2px;"><?php echo e($username); ?></h2>
                <span class="badge badge-ok">Aktif</span>
            </div>
        </div>

        <ul class="info-list">
            <?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <span><?php echo e($label); ?></span>
                    <strong><?php echo e($nilai); ?></strong>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>

    <section class="card">
        <h2>Minat Bacaan</h2>
        <div class="chips">
            <?php $__currentLoopData = $minat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="chip"><?php echo e($item); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <a class="btn" style="margin-top: 22px;"
           href="<?php echo e(route('dashboard', ['username' => $username])); ?>">Kembali ke Dashboard</a>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\uts-web\resources\views/profile.blade.php ENDPATH**/ ?>