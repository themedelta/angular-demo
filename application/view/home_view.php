<!-- Home Page -->
<div class="container-fluid login-container text-center">
	<div class="col-lg-3"></div>
	<div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
	 	<div ng-app="myApp" class="form-container">
	 		<!-- <h3 class="text-info">Daily Expense</h3> -->
	 		<br>
	 		<?php if($data['msg']) {?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $data['msg']; ?>
				</div>
			<?php } ?>
		 	<form role="form" action="home" method="POST" ng-controller="myCtrl">
				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" ng-repeat="item in items" ng-model="itemid=itemid+1">
					<span class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<input type="text" class="form-control" name="item[{{itemid}}]['name']" placeholder="{{item.label}}" ng-model="item.labelval" required>
					</span>
					<span class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<input type="number" class="form-control" name="item[{{itemid}}]['amt']" placeholder="{{item.amt}}" ng-model="item.amtval" required>
					</span>
					<span class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<select ng-options="x.id as x.label for x in tag" name="item[{{itemid}}]['tag']" class="form-control" ng-model="item.tagval" required></select>
					</span>
				</div>
				<button type="button" class="btn btn-default" ng-click="addNewItem()">
					<span class="glyphicon glyphicon-plus"> Add</span>
				</button>
				<div class="form-group">
					<h3><span class="text-danger">Total: Rs {{getTotal(items)}}</span></h3>
				</div>
				<div class="form-group">
					<div class="col-lg-4"></div>
					<div class="col-lg-4">
						<input type="submit" value="Save" class="form-control btn btn-primary">
					</div>
					<div class="col-lg-4"></div>
				</div>
			</form>
		</div>
	<div class="col-lg-3"></div>
</div>
<script src="public/js/custom-js-controller.js"></script>