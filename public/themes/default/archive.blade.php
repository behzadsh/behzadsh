@extends(theme_view('layout'))

@section('title')
  آرشیو بلاگ
@stop

@section('content')
  <section>

    {{-- Archive Heading --}}
    {{-- Notice the triple brackets to escape any xss for tags and search term. --}}
    @if (isset($tag))
      <h2 class="title">{{{ ucfirst($tag) }}} آرشیو</h2>
    @elseif ($search)
      <h2 class="title">جستجو برای {{{ $search }}}</h2>
    @else
      <h2 class="title">آرشیو</h2>
    @endif

    @foreach ($posts as $post)
      @include(theme_view('inc.post'))
    @endforeach

    {{ $posts->appends(array('q' => Input::get('q')))->links() }}

  </section>
@stop
