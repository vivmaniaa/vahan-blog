@extends('main')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcombe to the blog</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur deserunt dignissimos ea, exercitationem facilis ipsam itaque nam nesciunt, nihil non quasi quidem tenetur? Aliquam cum maxime natus perspiciatis reprehenderit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>{{-- End the header .row--}}
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300)}}{{ strlen($post->body) >300 ? "...":"" }}</p>
                    <p><a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a></p>
                </div>
                <hr>
            @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h1>Sidebar</h1>
        </div>
    </div>
@endsection