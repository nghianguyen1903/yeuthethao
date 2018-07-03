<!-- login -->

<div id="login">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg icon-login" data-toggle="modal" data-target="#myModal">
		<i class="fa fa-user" aria-hidden="true"></i>
	</button>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title" id="myModalLabel">Login</h4>
		      	</div>
		      	<div class="modal-body">
		      		<div class="row">
		      			<div class="col-md-6">
		      				<form>
							  	<div class="form-group">
							    	<label for="email">Email</label>
							    	<input type="email" class="form-control" id="email" placeholder="Email">
							  	</div>
							  	<div class="form-group">
							    	<label for="password">Mật khẩu</label>
							    	<input type="password" class="form-control" id="password" placeholder="Mật khẩu">
							  	</div>
							  <button type="submit" class="btn btn-default">Đăng nhập</button>
							</form>
		      			</div>
		      			<div class="col-md-6">
		      				<div class="login-social">
								<div class="login-by facebook">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Đăng nhập bằng Facebook</a>
								</div>
								<div class="login-by google">
									<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Đăng nhập bằng Google</a>
								</div>
							</div>
							<div class="register">
								<a href="?p=dang-ky">Đăng ký</a>
							</div>
		      			</div>
		      		</div>
		        	
					
		      	</div>
		    </div>
	  	</div>
	</div>
</div>