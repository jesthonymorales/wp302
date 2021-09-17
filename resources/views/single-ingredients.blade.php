@extends('layouts.app')

@section('content')
  @if($fields)
		
		{{ $fields['page_sub_title'] }}
		{!! $fields['ingredients'] !!}

	@endif	
	@php the_content() @endphp
@endsection