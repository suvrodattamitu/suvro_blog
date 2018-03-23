@extends('main')
@section('title','About')
@section('content')

    <div class="profile">

  
	    <img src = "photo/new.jpg">
	

		<a href = "#" class = "view">View Profile</a>


	</div> 

		<div class = "details">
			<h2>Someone famous<span>Desighner</span></h2>
			<p>I am suvro datta.. i am learning html/css</p>
			<div class = "close">
				<i class = "fa fa-times-circle" aria-hidden= "true"></i>
			</div>
		</div>


	<script>

		$('.details').hide();

		$(document).ready(function(){
			$('.close').click(function(){
				$('.details').hide();
			});

			$('.view').click(function(){
				$('.details').show();
			});

		});

	</script>

@endsection