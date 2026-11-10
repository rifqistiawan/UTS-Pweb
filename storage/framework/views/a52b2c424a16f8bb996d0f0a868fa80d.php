<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Beranda'); ?> · Pustaka Kita</title>
    <style>
        :root {
            --teal-900: #0d3b3a;
            --teal-700: #14675f;
            --teal-100: #d9f0ec;
            --amber-500: #f2a93b;
            --amber-100: #fdf0d6;
            --ink: #1d2b2a;
            --muted: #5f7270;
            --line: #e3ebe9;
            --bg: #f6faf9;
            --white: #ffffff;
            --danger: #c0392b;
            --radius: 14px;
            --shadow: 0 6px 24px rgba(13, 59, 58, .08);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            background: var(--bg);
            color: var(--ink);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        a { color: var(--teal-700); text-decoration: none; }
        .container { width: 100%; max-width: 1080px; margin: 0 auto; padding: 32px 20px; flex: 1; }

        h1 { font-size: 1.8rem; color: var(--teal-900); line-height: 1.25; }
        h2 { font-size: 1.2rem; color: var(--teal-900); margin-bottom: 14px; }
        .lead { color: var(--muted); margin-top: 6px; }
        .page-head { margin-bottom: 26px; }

        .card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 22px;
            box-shadow: var(--shadow);
        }
        .grid { display: grid; gap: 18px; }
        .grid-4 { grid-template-columns: repeat(4, 1fr); }
        .grid-2 { grid-template-columns: 1.4fr 1fr; }

        .stat { border-top: 4px solid var(--amber-500); }
        .stat-label { color: var(--muted); font-size: .85rem; text-transform: uppercase; letter-spacing: .05em; }
        .stat strong { display: block; font-size: 2.2rem; color: var(--teal-900); line-height: 1.2; margin: 4px 0; }
        .stat small { color: var(--muted); }

        .btn {
            display: inline-block; border: 0; cursor: pointer;
            background: var(--teal-700); color: var(--white);
            padding: 11px 20px; border-radius: 10px;
            font-size: 1rem; font-weight: 600; font-family: inherit;
            transition: background .2s;
        }
        .btn:hover { background: var(--teal-900); }

        .badge { display: inline-block; padding: 2px 10px; border-radius: 99px; font-size: .8rem; font-weight: 600; }
        .badge-ok { background: var(--teal-100); color: var(--teal-700); }
        .badge-out { background: var(--amber-100); color: #9a6500; }

        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; min-width: 620px; }
        th, td { text-align: left; padding: 12px 14px; border-bottom: 1px solid var(--line); }
        th { font-size: .8rem; text-transform: uppercase; letter-spacing: .05em; color: var(--muted); background: var(--bg); }
        tbody tr:hover { background: var(--bg); }

        .timeline { list-style: none; }
        .timeline li { display: flex; gap: 14px; padding: 10px 0; border-bottom: 1px dashed var(--line); }
        .timeline li:last-child { border-bottom: 0; }
        .timeline time { font-weight: 700; color: var(--teal-700); min-width: 52px; }

        /* Navbar */
        .navbar { background: var(--teal-900); color: var(--white); position: sticky; top: 0; z-index: 10; }
        .navbar-inner {
            max-width: 1080px; margin: 0 auto; padding: 14px 20px;
            display: flex; align-items: center; justify-content: space-between; gap: 16px; flex-wrap: wrap;
        }
        .brand { color: var(--white); font-weight: 800; font-size: 1.2rem; letter-spacing: .02em; }
        .brand span { color: var(--amber-500); }
        .nav-toggle { display: none; }
        .nav-burger { display: none; cursor: pointer; font-size: 1.6rem; line-height: 1; }
        .nav-links { display: flex; align-items: center; gap: 6px; list-style: none; }
        .nav-links a { color: #cfe6e2; padding: 8px 14px; border-radius: 8px; font-weight: 500; }
        .nav-links a:hover { background: rgba(255,255,255,.1); color: var(--white); }
        .nav-links a.active { background: var(--amber-500); color: var(--teal-900); font-weight: 700; }
        .nav-user { color: #cfe6e2; font-size: .9rem; }

        /* Footer */
        .footer { background: var(--white); border-top: 1px solid var(--line); text-align: center; padding: 20px; color: var(--muted); font-size: .9rem; }

        /* Login */
        .login-wrap { display: grid; grid-template-columns: 1fr 1fr; gap: 0; max-width: 880px; margin: 24px auto; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow); border: 1px solid var(--line); }
        .login-hero { background: linear-gradient(160deg, var(--teal-900), var(--teal-700)); color: var(--white); padding: 44px 36px; display: flex; flex-direction: column; justify-content: center; gap: 14px; }
        .login-hero h1 { color: var(--white); font-size: 2rem; }
        .login-hero p { color: #cfe6e2; }
        .login-hero .accent { color: var(--amber-500); }
        .login-form { background: var(--white); padding: 44px 36px; }
        .field { margin-bottom: 16px; }
        .field label { display: block; font-weight: 600; margin-bottom: 6px; }
        .field input { width: 100%; padding: 11px 14px; border: 1px solid #cdd9d7; border-radius: 10px; font-size: 1rem; font-family: inherit; }
        .field input:focus { outline: 2px solid var(--amber-500); border-color: var(--amber-500); }
        .error { color: var(--danger); font-size: .85rem; margin-top: 4px; }

        /* Profile */
        .avatar { width: 84px; height: 84px; border-radius: 50%; background: var(--amber-500); color: var(--teal-900); font-size: 2.2rem; font-weight: 800; display: grid; place-items: center; }
        .profile-head { display: flex; align-items: center; gap: 20px; margin-bottom: 20px; }
        .info-list { list-style: none; }
        .info-list li { display: flex; justify-content: space-between; gap: 12px; padding: 10px 0; border-bottom: 1px solid var(--line); }
        .info-list li:last-child { border-bottom: 0; }
        .info-list span { color: var(--muted); }
        .chips { display: flex; flex-wrap: wrap; gap: 8px; }
        .chip { background: var(--teal-100); color: var(--teal-700); padding: 6px 14px; border-radius: 99px; font-weight: 600; font-size: .9rem; }

        @media (max-width: 860px) {
            .grid-4 { grid-template-columns: repeat(2, 1fr); }
            .grid-2 { grid-template-columns: 1fr; }
        }
        @media (max-width: 720px) {
            .nav-burger { display: block; }
            .nav-menu { display: none; width: 100%; }
            .nav-toggle:checked ~ .nav-menu { display: block; }
            .nav-links { flex-direction: column; align-items: stretch; padding-top: 8px; }
            .login-wrap { grid-template-columns: 1fr; }
            .login-hero, .login-form { padding: 30px 24px; }
            h1 { font-size: 1.5rem; }
        }
        @media (max-width: 440px) {
            .grid-4 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php if (! empty(trim($__env->yieldContent('hide_nav')))): ?>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => ['username' => $username ?? '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['username' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($username ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
    <?php endif; ?>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

</body>
</html>
<?php /**PATH C:\uts-web\resources\views/layouts/app.blade.php ENDPATH**/ ?>