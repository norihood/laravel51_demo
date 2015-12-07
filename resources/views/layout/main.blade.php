<!DOCTYPE html>
<html>
@include('layout.head')
<body>
	<div class="wallpapper">

		@include('layout.header')

		<div class="content center">

			@include('layout.top_content')

			<div class="side-left left">
				<div class="clear"></div>

				@yield('main_content')

				<div class="clear"></div>
			</div>

			@include('layout.rightbar')

			<div class="clear"></div>
		</div>
		<div class="clear"></div>

		@include('layout.footer')

	</div>
</body>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>