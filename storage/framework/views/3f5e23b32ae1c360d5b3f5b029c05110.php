<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['username' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['username' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<header class="navbar">
    <nav class="navbar-inner">
        <a href="<?php echo e(route('dashboard', ['username' => $username])); ?>" class="brand">Pustaka<span>Kita</span></a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-burger" aria-label="Buka menu">&#9776;</label>

        <div class="nav-menu">
            <ul class="nav-links">
                <li>
                    <a href="<?php echo e(route('dashboard', ['username' => $username])); ?>"
                       class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>"
                       class="<?php echo e(request()->routeIs('pengelolaan') ? 'active' : ''); ?>">Pengelolaan</a>
                </li>
                <li>
                    <a href="<?php echo e(route('profile', ['username' => $username])); ?>"
                       class="<?php echo e(request()->routeIs('profile') ? 'active' : ''); ?>">Profile</a>
                </li>
                <li><a href="<?php echo e(route('login')); ?>">Keluar</a></li>
            </ul>
        </div>
    </nav>
</header>
<?php /**PATH C:\uts-web\resources\views/components/navbar.blade.php ENDPATH**/ ?>