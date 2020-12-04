@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div>{{the_title() }}</div>
  {{get_field('name')}}

  @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
