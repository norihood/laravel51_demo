@extends('layout.main')

@section('title')
    <title>home page</title>
@endsection

@section('main_content')
<div class="content-left">

	@include('layout.leftbar')

	<div class="news-left left">
	<!-- phan rieng  trang chu-->
		<div class="news-top">
			<img src="image/ava-gon.jpg"/>
			<div class="new-top-title">
				<a class="text-while" href="3">Chiều khách Tây hơn dân ta: Thượng đế Việt tự xấu hổ về mình</a>
			</div>
		</div>
		<div class="news-top news-center">
		</div>
		<div class="news-top">
		</div>
		<div class="news-bottom">
		</div>
		<div class="news-bottom">
		</div>
		<div class="news-last left">
			<div class="news-last-img left">
				<img src="image/n-img01.jpg"/>
			</div>
			<div class="news-last-title left">
				<a href="#">Chiều khách Tây hơn dân ta: Thượng đế Việt tự xấu hổ về mình</a>
			</div>
			<div class="news-last-description left">
				<p>Dư luận gần đây bức xúc trước sự phân biệt đối xử giữa khách ta và khách Tây tại một số cơ sở dịch vụ khiến nhiều người cảm thấy khó chịu. Song, cũng có người giật mình nhìn lại: khách Việt thế nào mà lại bị đối xử như vậy?</p>
				<a>Chợ 37.net </a> 10 phút trước.
			</div>
		</div>
		<!-- ket thuc phan rieng -->
	</div>
	<div class="clear"></div>
</div>

@include('fo.product')

@endsection