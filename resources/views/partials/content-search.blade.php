@container()
  <article {{ post_class() }}>
    <header>
      @text(['as' => 'h2', 'class' => 'heading2 content-title'])
        <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
      @endtext
      @if (get_post_type() === 'post')
      @include('partials/entry-meta')
      @endif
    </header>
    <div class="entry-summary" style="max-width: 640px">
      {{ the_excerpt() }}
    </div>
  </article>
@endcontainer