<ul class="mega-nav__sub-items">
<li class="mega-nav__label">{{ $label }}</li>
@foreach($posts as $post)
    <li class="mega-nav__sub-item">
        <a
            href="
                {{
                    route(
                        'pages.post',
                        [
                            'locale' => config('app.locale'),
                            'slug'   => $post->slug
                        ]
                    )
                }}
            "
            class="mega-nav__sub-link"
        >
            {{ $post->title }}
        </a>
    </li>
@endforeach
</ul>