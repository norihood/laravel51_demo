@extends('layout.main')

@section('title')
    <title>Dang ky</title>
@endsection

@section('main_content')
<div class="content-left">

	@include('layout.leftbar')

	<div class="news-left left">
	<!-- phan cua trang gian hang -->
		<a href="#" class="left text-red">Đăng ký gian hàng Online để bán hàng hiệu quả hơn!</a>
		<a href="#" class="right text-red">Tham khảo các gói gian hàng</a>
		<div class="clearfix"></div>
		<br />
		{!! Form::open(array('url' => url('dang-ky'), 'class' => 'form-horizontal')) !!}
			{!! Form::token() !!}
		    <div class="form-group">
		    	{!!Form::label('email', 'E-Mail Address', array('class' => 'col-sm-3 control-label'))!!}
				<div class="col-sm-9">
					{!!Form::email('email', $value = null, $attributes = array('class' =>'form-control', 'id' => 'email', 'placeholder' => "Email" ))!!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label('name', 'Display name', array('class' => 'col-sm-3 control-label'))!!}
				<div class="col-sm-9">
				    {!!Form::text('name', $value = null, $attributes = array('class' =>'form-control', 'id' => 'name', 'placeholder' => "Display name" ))!!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label('password', 'Password', array('class' => 'col-sm-3 control-label'))!!}
				<div class="col-sm-9">
				    {!!Form::password('password', $attributes = array('class' => 'form-control', 'id' => 'password', 'placeholder' => "password" ))!!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label('re-password', 'Re-Password', array('class' => 'col-sm-3 control-label'))!!}
				<div class="col-sm-9">
				    {!!Form::password('re-password', $attributes = array('class' => 'form-control', 'id' => 're-password', 'placeholder' => "Confirm password" ))!!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label('phone', 'Phone', array('class' => 'col-sm-3 control-label'))!!}
				<div class="col-sm-9">
				    {!!Form::number('phone', $value = null, $attributes = array('class' =>'form-control', 'id' => 'number', 'placeholder' => "Phone number" ))!!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label('birthday', 'Birth', array('class' => 'col-sm-3 control-label'))!!}
				<div class="col-sm-9">
				    {!!Form::date('birthday', null, $attributes = array('class' =>'form-control', 'id' => 'birthday', 'placeholder' => "Birthday" ))!!}
				</div>
			</div>
			<div class="form-group checkbox">
				<div class="col-sm-offset-3 col-sm-9">
				    <label>
				      {!!Form::checkbox('agree', 'agree', null)!!}Check me out
				    </label>
			    </div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					{!! Form::submit('Sign up', array('class' => 'btn btn-default')) !!}
				</div>
			</div>
		{!! Form::close() !!}
		
		<!-- ket thuc -->
	</div>
	<div class="clear"></div>
</div>

@include('fo.product')

@endsection