<section class="panel panel-default"> 
	<header class="panel-heading"> Responsive Table </header> 
	<div class="row wrapper"> 
		<div class="col-sm-5 m-b-xs"> 
			<select class="input-sm form-control input-s-sm inline v-middle"> 
				<option value="0">Bulk action</option> 
				<option value="1">Delete selected</option> 
				<option value="2">Bulk edit</option> 
				<option value="3">Export</option> 
			</select> 
			<button class="btn btn-sm btn-default">Apply</button> 
		</div> 
		<div class="col-sm-4 m-b-xs"> 
			<div class="btn-group" data-toggle="buttons"> 
				<label class="btn btn-sm btn-default active"> <input type="radio" name="options" id="option1"> Day </label> 
				<label class="btn btn-sm btn-default"> <input type="radio" name="options" id="option2"> Week </label> 
				<label class="btn btn-sm btn-default"> <input type="radio" name="options" id="option2"> Month </label> 
			</div> 
		</div> 
		<div class="col-sm-3"> 
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Search"> 
				<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button> </span> 
			</div> 
		</div> 
	</div> 
	<div class="table-responsive"> 
		<table class="table table-striped b-t b-light"> 
			<thead> <tr> 
				<th width="20"><input type="checkbox"></th> 
				<th class="th-sortable" data-toggle="class">Project 
					<span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> </span> 
				</th> 
				<th>Task</th> 
				<th>Date</th> 
				<th width="30"></th> 
			</tr> 
		</thead> 
		<tbody> 
			<tr> 
				<td><input type="checkbox" name="post[]" value="2"></td> 
				<td>Idrawfast</td> 
				<td>4c</td> 
				<td>Jul 25, 2013</td> 
				<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> </td> 
			</tr> 
			<tr> 
				<td><input type="checkbox" name="post[]" value="3"></td> 
				<td>Formasa</td> 
				<td>8c</td> 
				<td>Jul 22, 2013</td> 
				<td> <a href="#" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> </td> 
			</tr>