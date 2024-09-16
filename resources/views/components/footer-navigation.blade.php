@php
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
@endphp

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
    <nav x-data="{ route: '{{ str_replace(url()->query(''), '', url()->current()) }}' }">
        @foreach ($routes as $route)
            <a @click="route = '{{ $route['route'] }}'"
                :class="{ 'active': @if ($route['is_home']) route == '{{ $route['route'] }}' || route == '' @else route == '{{ $route['route'] }}' @endif }"
                wire:navigate href="{{ $route['route'] }}">{{ $route['label'] }}</a>
        @endforeach
    </nav>
</footer>
