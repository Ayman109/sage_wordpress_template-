<article @php (post_class())>
  <div class="bg-white">
    {{-- IMAGE DU POST --}}
    @if (has_post_thumbnail())
      <a href="{{ get_permalink() }}">
        {!! get_the_post_thumbnail(null, 'large', ['class' => 'w-full h-48 object-cover rounded-md mb-4']) !!}
      </a>
    @endif
    <div class="m-2 rounded-md bg-white p-5">
      <header>
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}"> {!! $title !!} </a>
        </h2>

        @include ('partials.entry-meta')
      </header>

      <div class="entry-summary">
        @php (the_excerpt())
      </div>
    </div>
    <div>
</article>
