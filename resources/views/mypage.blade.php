@extends('mylayout')

@section('outer')
	<p>Outside section</p>
@endsection

@section('content')
	<p>This is content section</p>
	@yield('outer')
@endsection

