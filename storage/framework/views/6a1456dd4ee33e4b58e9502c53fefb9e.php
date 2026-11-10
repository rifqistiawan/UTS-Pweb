<?php $__env->startSection('title', 'Pengelolaan'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head">
    <h1>Pengelolaan Koleksi</h1>
    <p class="lead"><?php echo e(count($buku)); ?> judul buku tercatat, dikelola oleh <?php echo e($username); ?>.</p>
</div>

<section class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><strong><?php echo e($item['judul']); ?></strong></td>
                        <td><?php echo e($item['penulis']); ?></td>
                        <td><?php echo e($item['kategori']); ?></td>
                        <td><?php echo e($item['stok']); ?></td>
                        <td>
                            <?php if($item['status'] === 'Tersedia'): ?>
                                <span class="badge badge-ok">Tersedia</span>
                            <?php else: ?>
                                <span class="badge badge-out"><?php echo e($item['status']); ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6">Belum ada data buku.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\uts-web\resources\views/pengelolaan.blade.php ENDPATH**/ ?>