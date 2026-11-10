<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head">
    <h1>Halo, <?php echo e($username); ?>! 👋</h1>
    <p class="lead">Berikut ringkasan perpustakaan hari ini.</p>
</div>

<div class="grid grid-4" style="margin-bottom: 24px;">
    <?php $__currentLoopData = $statistik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.stat-card', [
            'label' => $item['label'],
            'value' => $item['value'],
            'note'  => $item['note'],
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="grid grid-2">
    <section class="card">
        <h2>Aktivitas Terbaru</h2>
        <ul class="timeline">
            <?php $__currentLoopData = $aktivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <time><?php echo e($log['waktu']); ?></time>
                    <span><?php echo e($log['teks']); ?></span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>

    <section class="card">
        <h2>Akses Cepat</h2>
        <p class="lead" style="margin-bottom: 16px;">Lanjutkan pekerjaanmu dari sini.</p>
        <div style="display: grid; gap: 10px;">
            <a class="btn" href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>">Kelola Koleksi Buku</a>
            <a class="btn" style="background: var(--amber-500); color: var(--teal-900);"
               href="<?php echo e(route('profile', ['username' => $username])); ?>">Lihat Profil</a>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\uts-web\resources\views/dashboard.blade.php ENDPATH**/ ?>