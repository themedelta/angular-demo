var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.items = [{label: 'Item 1', amt: 'Enter Amount'}];

    $scope.tag = [{id: 1, label: 'Tag 1'}, 
                    {id: 2, label: 'Tag 2'}, 
    				{id: 3, label: 'Tag 3'}, 
    				{id: 4, label: 'Tag 4'}];

    $scope.getTotal = function(values) {
    	var total = 0;
    	var val = 0;
    	angular.forEach(values, function(item) {
    		val = (!item.amtval) ? 0 : item.amtval;
    		total += parseFloat(val);
    	});
    	return total;
    }

    $scope.addNewItem = function() {
		var newItemNo = $scope.items.length + 1;
		$scope.items.push({label: 'Item ' + newItemNo, amt: 'Enter Amount'});
	};
});