@extends('pages.main')
@section('content')
@section ('title', '|Homepage')

		<div class="row">
				<div class="col-md-12">
			<div class="jumpotron">
			<h1>Welcome to my Blog!</h1>
			<hr>
			<p><a class= "lead">Thank you for visiting. This is my test website built with Laravel.
			Please read my popular post!</a></p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
				</div>
			</div>
				</div> <!--end of header-->
				<div class="row"
					<div class="col-md-8">
			 <div class="post">
			 
			 @foreach($posts as $post)
			 
			 <div class="post">
				<h3>{{ $post->title }}</h3>
					<p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) >300 ?  "...." : ""}}</p>
						<a href= {{ url('blog/'.$post->slug) }} class="btn btn-primary">Read more</a>
			 </div>
			 
			 <hr>	
			 
			 @endforeach
			 
				</div>
			 
			<div class="col-md-3 col-md-offset-1">
				<h2>Sidebar</h2>
			</div>
		</div>
			
@endsection	