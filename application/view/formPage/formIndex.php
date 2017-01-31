
<form class="form-horizontal" method="get" action="<?php echo URL;?>home/addPage">
<div class="container">
<h2 style="text-align:center"><span class="label label-default">Personal Information</span></h2>
<br>
        <div class="form-group">
                <label class="col-sm-2 control-label">First Name *</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" required="required" style="width:20em" name="firstName" placeholder="First Name">
                </div>
        </div>

        <div class="form-group">
                <label class="col-sm-2 control-label">Last Name *</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" required="required" style="width:20em" name="lastName" placeholder="Last Name">
                </div>
        </div>

        <div class="form-group">
	<label class="col-sm-2 control-label">Gender</label>
	<div class="col-sm-2">
		<div class="radio">
      			<label><input type="radio" name="gender">Male</label>
    		</div>
    		<div class="radio">
      			<label><input type="radio" name="gender">Female</label>
    		</div>
                <div class="radio">
                        <label><input type="radio" name="gender">Transgender</label>
                </div>
                <div class="radio">
                        <label><input type="radio" name="gender">Non-binary</label>
                </div>

                <div class="radio">
                        <label><input type="radio" name="gender">Other</label>
                </div>
	</div>
	</div>

        <div class="form-group">
                <label for="education" class="col-sm-2 control-label">Highest Education</label>
                <select class="form-control" style="width:20em"  id="education">
                        <option id="highSchool">High School</option>
                        <option id="bachekors">Bachelors</option>
                        <option id="masters">Masters</option>
                        <option id="PHD">Ph.D</option>
                        <option id="other">Other</option>
                </select>
        </div>
</div>


<div class="container">
<h2 style="text-align:center" ><span class="label label-default">Contact Information</span></h2>
<br>
        <div class="form-group">
                <label class="col-sm-2 control-label">Phone Number *</label>
                <div class="col-sm-10">
                        <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$"  required="required" class="form-control" style="width:10em"  name="phone" placeholder="123-456-7890">
                </div>
        </div>

        <div class="form-group">
                <label class="col-sm-2 control-label">E-mail *</label>
                <div class="col-sm-10">
                        <input type="email" class="form-control" required="required" style="width:20em" name="email" placeholder="example@mail.com">
                </div>
        </div>
</div>
	
<div class="container">
<h2 style="text-align:center" ><span class="label label-default">Incident Report</span></h2>
<br>
	<div class="form-group">
		<label class="col-sm-2 control-label">Date *</label>
		<div class="col-sm-10">
			<input id="datepicker" name="date" required="required">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Location *</label>
		<div class="col-sm-2">
			<input type="text" maxlength=30 class="form-control" required="required" style="width:20em" name="location" placeholder="1600 Holloway, SF, CA, 94132">
		</div>
	</div>


        <div class="form-group">
                <label for="category" class="col-sm-2 control-label">Category *</label>
                <select name="category" class="form-control" required="required" style="width:20em"  id="category">
			<option value="" selected hidden> Select an option</option>
			<option value="spillage">Spillage</option>
                        <option value="brokenpipe">Broken Pipe</option>
                        <option value="electrichazard">Electric Hazard</option>
                        <option value="brokenpathway">Broken Pathway</option>
                        <option value="other22">Other</option>
                </select>
        </div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Image</label>
		<div class="col-sm-2">
			<input type="file" name="pic" accept="image/*">
		</div>
	</div>

        <div class="form-group">
                <label class="col-sm-2 control-label">Text Description</label>
                <div class="col-sm-10">
                        <textarea class="form-control" maxlength="300" style="width:20em" rows="4" name="message"></textarea>
                </div>
        </div>
</div>



<div class="container-fluid">
	<div class="form-group">
	<h5 style="text-align:center">
	<input type="checkbox" required=required>
	I agree to the <a href="<?php echo URL;?>home/agreement" target="_blank">terms and conditions</a></h5>
	
        <div>
       		<h2 style="text-align:center"> <input name="submit" type="submit" value="Submit" class="btn btn-primary"></h2>
        </div>
        </div>

</div>
</form>

