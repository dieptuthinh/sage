<article @php post_class() @endphp>
    <header class="mb5 pb-8 border-bottom ">
        <h1 class="entry-title">{{$project->name}}</h1>
        <a href="#">{{$project->url}}</a>
    </header>
    <div class="entry-content leading-normal">
        <section class="mb-5 p-5 border-bottom" style="display: flex;justify-content: center;align-items: center;">
            <img class="rounded mb-3 img-thumbnail" src="{{$project->img->url}}" alt="{{$project->img->alt}}"
                title="{{$project->img->title}}" style="width: 500px; height: 500px;">
        </section>
        <section class="mb-5 p-5 border-bottom ">
            <h2>Case Study</h2>
            {!!$project->case_study !!}
        </section>

        <section class="mb-5 p-5 border-bottom ">
            <h2>Solution</h2>
            {!!$project->delivery_solution !!}
        </section>

        <section class="mb-5 p-5 border-bottom ">
            <h2>Testimonail</h2>
            {!!$project->feedback !!}
        </section>


    </div>

</article>