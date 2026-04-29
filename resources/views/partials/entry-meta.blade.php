<div class="flex items-center gap-2">
  <time class="dt-published" datetime="{{ get_post_time('c', true) }}"> {{ get_the_date() }} </time>

  <span class="text-gray-300" aria-hidden="true">&bull;</span>

  <div class="flex items-center gap-1">
    <span class="sr-only">{{ __('By', 'sage') }}</span>
    <span aria-hidden="true">{{ __('By', 'sage') }}</span>
    <a
      href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
      class="p-author h-card font-medium text-gray-700 transition-colors hover:text-blue-600"
    >
      {{ get_the_author() }}
    </a>
  </div>
</div>
