@extends('layouts.app')

@section('content')
  @if($fields)
		
		{{ $fields['page_sub_title'] }}

	@endif	
	@php the_content() @endphp
@endsection