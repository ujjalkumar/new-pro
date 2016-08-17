@extends('layout.master')

@section('nav')
<div class="centered">
	<p>
		<a href="{{route('TCS')}}">TCS</a>
		<a href="{{route('CTS')}}">CTS</a>
		<a href="{{route('Tier5')}}">Tier5</a>
	</p>
</div>
@endsection

@section('content')
	<div class="centered">
		<p>
			Laravel is a free, open-source PHP web framework, created by Taylor Otwell 
			and intended for the development of web applications following the
			model–view–controller (MVC) architectural pattern. Some of the features of
			Laravel are a modular
			packaging system with a dedicated dependency manager, different ways for
			accessing relational databases, utilities that aid in application
			deployment and maintenance, and its orientation toward syntactic sugar.
			As of March 2015, Laravel is regarded as one of the most popular PHP 
			frameworks, together with Symfony2, Nette, CodeIgniter, Yii2 and other 
			frameworks.The source code of Laravel is hosted
			on GitHub and licensed under the terms of MIT License.
</p>
	<ul>
		@for($i=0; $i<5; $i++)
			<li>Itaration {{$i+1}}</li>
		@endfor
	</ul>
	</div>
@endsection