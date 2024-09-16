<?php
    /*
                                                                                next adds some kind of dynamic behavior to render the navigation,
                                                                                an alternative to this could be define a routes array as a
                                                                                service provider, everything depends of your project's complexity
*/
$routes = [
    [
        'route' => '/',
        'label' => 'Home',
        'is_home' => true,
    ],
    [
        'route' => '/about',
        'label' => 'About',
        'is_home' => false,
    ],
    [
        'route' => '/blog',
        'label' => 'Blog',
        'is_home' => false,
    ],
    [
        'route' => '/contact',
        'label' => 'Contact',
        'is_home' => false,
        ],
    ];
?>

<footer>
    <div>This navigation footer has been built dynamically, check the component at:
        <br>
        <b>'resources/views/components/footer-navigation.blade.php'</b>
        <br>
        to get more details.
        <br>
        If you see the code will note that it's an independed component but its behavior looks like it was binded to
        the
        top navigation bar.
        <br>
        This is the magic of Livewire!
    </div>
    <nav x-data="{ route: '<?php echo e(str_replace(url()->query(''), '', url()->current())); ?>' }">
        <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a @click="route = '<?php echo e($route['route']); ?>'"
                :class="{ 'active': <?php if($route['is_home']): ?> route == '<?php echo e($route['route']); ?>' || route == '' <?php else: ?> route == '<?php echo e($route['route']); ?>' <?php endif; ?> }"
                wire:navigate href="<?php echo e($route['route']); ?>"><?php echo e($route['label']); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>
</footer>
<?php /**PATH E:\Projects\Htpdocs\GitHub\LivewireNavigation\resources\views/components/footer-navigation.blade.php ENDPATH**/ ?>