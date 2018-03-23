@extends('main')

@section('title','Posts')

@section('content')
	
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<h1>posts</h1>
		</div>
	</div>

	@foreach($posts as $post)
		<div class = "row">
			<div class = "col-md-8 col-md-offset-2">
				<h1>{{ $post->title }}</h1>
				<h5>Published : {{ date('M j,Y',strtotime($post->created_at)) }}</h5>

				<p>{{ substr($post->body,0,250) }} {{ strlen($post->body) > 50 ? "..." : "" }}</p>

				<a href = "{{ route('blog.single',$post->id) }}" class = "btn btn-primary">Read More</a>

				<hr>
			</div>
		</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>

@endsection