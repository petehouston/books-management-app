@extends ('layouts.master')

@section ('head-title')
	Books - Index page
@stop

@section ('body-content')
<div class="container">
	<div class="row">

	@foreach ($books as $book)

	<div class="col-md-3">

		<img src="{{ $book->cover}}" alt="" class="img-responsive">
		<h4>{{ $book->title }}</h4>
		<p>${{ $book->price }}</p>
		<p>{{ $book->description }}</p>

	</div>

	@endforeach

	</div>
</div>
@stop