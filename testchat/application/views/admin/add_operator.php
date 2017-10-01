
<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="add_operator_form">
					<form action="<?php echo site_url('admin/Add_Operator/Add') ?>" class="form-group" method="POST">
						<label for="Firstname" >First Name</label>
						<input type="text" class="form-control" name="firstname">
						<label for="Lastname" >Last Name</label>
						<input type="text" class="form-control"	name="lastname">
						<label for="Username" >Username</label>
						<input type="text" class="form-control" name="username">
						<label for="Password" >Password</label>
						<input type="password" class="form-control" name="password">
						<label for="Email" >Email</label>
						<input type="email" class="form-control" name="email">
						<label for="Role" >Role</label>
						<select class="form-control" name="role">
    						<option value="operator">Operator</option>
	    					<option value="admin">Admin</option>
						</select>
						<input type="submit" name="Add" class="btn btn-success" value="Add">

					</form>
				</div>
			</div>
	</div>
</div>
