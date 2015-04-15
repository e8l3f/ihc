@extends('master')

@section('content')
	
	<h1><?= $name; ?></h1>
	<h1>{{ $name }}</h1>
	

	<?php foreach ($lessons as $lesson): ?>

				<h4><?= $lesson; ?></h4>

	<?php endforeach; ?>
@stop