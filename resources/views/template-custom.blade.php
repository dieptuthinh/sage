{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
<div>sdfasdfa sdf as fda sfd as fa sf a sf asf as fa sf </div>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
