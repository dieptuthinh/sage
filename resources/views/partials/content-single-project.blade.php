<article @php post_class() @endphp>
  <header>
      <div>sao o day no khong lay</div>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content">
    {{get_field('name')}}
    {{dd(get_post_type)}}
    aaaaaaaaaaaaaaaaaaa
  </div>


</article>