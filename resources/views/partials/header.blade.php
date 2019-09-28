@php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
@endphp

<header class="page-navigation">
  {{-- Primary Menu --}}
  <nav class="nav-primary">
    @Container(['class' => 'nav-primary-container'])
      @if (has_custom_logo())
        <a class="brand" href="{{ home_url('/') }}">
          <img class="logo" src="{{ esc_url( $logo[0] ) }}" alt="{{ get_bloginfo( 'name' ) }}">
        </a>
      @else
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      @endif

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary_navigation']) !!}
      @endif
    @endContainer
  </nav>

  {{-- Secondary Menu --}}
  <nav class="nav-secondary">
    @if (has_nav_menu('secondary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'secondary_navigation']) !!}
    @endif
  </nav>

</header>