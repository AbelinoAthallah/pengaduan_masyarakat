<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pengaduan Masyarakat</title>

    <!-- Bootstrap core CSS -->
	<link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" >

    <!--external css-->
	<link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" >

    <!-- Custom styles for this template -->
	<link href="{{url('assets/css/style.css')}}" rel="stylesheet" >
	<link href="{{url('assets/css/style-responsive.css')}}" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
		  @if(Session::get('alert_message'))
    	<div class="alert alert-danger">
     		{{Session::get('alert_message')}}
    		</div>
    @endif
			  <form class="form-login" action="{{url('login_petugas/cek')}} " method="POST">
			  {{ csrf_field() }}
				<h2 class="form-login-heading">sign in </h2>

		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
<br>
		            <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
                </form>
		            <!-- <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div> -->
		            <!-- <div class="registration">
                        Don't have an account yet?<br/>
		                <a class="" data-toggle="modal" href="#" data-target="#myModal">
		                    Create an account
		                </a>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Create Your Account</h4>
						      </div>
						      <div class="modal-body">
							  @section('title', "Petugas Create")
								@section('container')
								<div class="content">
									<hr>

									@if($errors->any())
										<div class="alert alert-danger">
											@foreach($errors->all() as $error)
												<li><strong>{{ $error }}</strong></li>
											@endforeach
										</div>
									@endif

									<form action="{{ url('/petugas/store') }}" method="post">
                                    {{ csrf_field() }}
										<div class="form-group">
											<label for="nama_petugas">Nama :</label>
											<input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required
											oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="nohp">No Telp :</label>
											<input type="text" class="form-control" id="telp" name="telp"
											onkeypress="return event.charCode >= 48 && event.charCode <=57"required
											oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="username">Username :</label>
											<input type="text" class="form-control" id="username" name="username" required
											oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="password">Password :</label>
											<input type="password" class="form-control" id="password" name="password" required
											oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
										<label for="level" class="control-label" required
										oninvalid="this.setCustomValidity('Status Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										Level :
										</label>

										<br>
											<td><select  name="level">
											<option id="level" name="level" value="admin">ADMIN</option>
											</select>
											</td>
										</div>

								</div>
						      </div>
						      <div class="modal-footer">
							    <button type="reset" class="btn btn-default" >Reset</button>
						        <button type="submit" class="btn btn-primary">Tambah</button>
						      </div>
                              </form>
						    </div>
						  </div>
						</div>
		            </div> -->

		        </div>

		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>

    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>


  </body>
</html>
