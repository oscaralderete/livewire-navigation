<header>
    <nav x-data="{ route: '<?php echo e(str_replace(url()->query(''), '', url()->current())); ?>' }">
        <a @click="route = '/'" :class="{ 'active': route == '/' || route == '' }" wire:navigate href="/">Home</a>
        <a @click="route = '/about'" :class="{ 'active': route == '/about' }" wire:navigate href="/about">About Us</a>
        <a @click="route = '/blog'" :class="{ 'active': route == '/blog' }" wire:navigate href="/blog">Blog</a>
        <a @click="route = '/contact'" :class="{ 'active': route == '/contact' }" wire:navigate
            href="/contact">Contact</a>
    </nav>
</header>
<?php /**PATH E:\Projects\Htpdocs\GitHub\LivewireNavigation\resources\views/components/navigation.blade.php ENDPATH**/ ?>