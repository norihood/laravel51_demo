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
		<form method="POST" action="{{url('dang-ky')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<table>
			<tr>
				<td><p>Avatar (200px * 200px)</p></td>
				<td><input type="file" name="avatar"></td>
			</tr>
			<tr>
				<td><p>Tên đăng nhập:</p></td>
				<td>
					{!!Form::text('username')!!}
				</td>
				<td>
					@if($errors->has('username')) {{$errors->first('username')}} @endif
				</td>
			</tr>
			<tr>
				<td><p>Mật khẩu:</p></td>
				<td>
					{!!Form::password('password')!!}
				</td>
				<td>
					@if($errors->has('password')) {{$errors->first('password')}} @endif
				</td>
			</tr>
			<tr>
				<td><p>Nhập lại mật khẩu:</p></td>
				<td>{!!Form::password('re-password')!!}</td>
				<td>
					@if($errors->has('re-password')) {{$errors->first('re-password')}} @endif
				</td>
			</tr>
			<tr>
				<td><p>Email:</p></td>
				<td>{!!Form::email('email')!!}</td>
				<td>
					@if($errors->has('email')) {{$errors->first('email')}} @endif
				</td>
			</tr>
			<tr>
				<td><p>Điện thoại:</p></td>
				<td>{!!Form::number('phone')!!}
				<td>
					@if($errors->has('phone')) {{$errors->first('phone')}} @endif
				</td>
			</tr>
			<tr>
				<td><p>Địa chỉ:</p></td>
				<td>{!!Form::text('address')!!}
				<td>
					@if($errors->has('address')) {{$errors->first('address')}} @endif
				</td>
			</tr>
			<tr>
				<td><p>Giới tính:</p></td>
				<td>
					{!!Form::select('sex', array( '0' => 'Nam', '1' => 'Nu'), null, ['placeholder' => 'Pick sex']) !!}
				</td>
				<td></td>
			</tr>
			<tr>
				<td><p>Ngày sinh:</p></td>
				<td>{!!Form::date('birthday')!!}</td>
				<td>
					@if($errors->has('birthday')) {{$errors->first('birthday')}} @endif
				</td>
			<tr>
				<td colspan="2"><input type="checkbox"/>Bạn đã đọc và đồng ý với <a href="#" class="text-red">Quy chế hoạt động và Chính sách bảo mật</a> của <span class="text-blue">Chợ37</span>.net </td>
				<td><input type="submit" name="submit" value="Registry"></td>
			</tr>
			</tr>
		</table>
		</form>
		<!-- ket thuc -->
	</div>
	<div class="clear"></div>
</div>

@include('fo.product')

@endsection