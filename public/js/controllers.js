(function(){
	'use strict';
	angular.module('acl')
	.controller('aclController', ['$scope', 'aclFactory', 'aclService', function($scope, aclFactory, aclService) {
		$scope.user_role = [];
		$scope.users;
		$scope.roles;

		var getAllData = function() {
			aclFactory.getData().then(function(response) {
				$scope.users = response.data['users'];
				$scope.roles = response.data['roles'];
				console.log(response);
			}, function(err) {
				console.log(err);
			})
		};
		getAllData();

		// var getUserId = function() {
		// 	aclFactory.userId().then(function(response) {
		// 		var xid = aclService.userId;
		// 		console.log(xid);
		// 		for(var i = 0; i < response.data.length; i++) {
		// 			if(xid === response.data[i].id) {
		// 				$scope.user_id = xid;
		// 				console.log($scope.user_id);
		// 				break;
		// 			}
		// 		}
		// 	}, function(err) {
		// 		cconsole.log(err)
		// 	})
		// }
		// getUserId();

		// $scope.singleUserData = function() {
		// 	aclFactory.getUserData().then(function(response) {
		// 		$scope.user = response.data;
		// 	}, function(err) {
		// 		console.log(err);
		// 	})
		// };

		$scope.moveToTarget = function(id) {
			for (var i = 0; i < $scope.roles.length; i++) {
	            var item = $scope.roles[i];
	            $scope.user_id = aclService.userId;
	            console.log($scope.user_id);
	            $scope.role_id = item.id;
	            var itemData = {
	            	'user_id': $scope.user_id,
	            	'role_id': $scope.role_id
	            };
	            if (item.id == id) {
	                aclFactory.saveRoleToUser(itemData).then(function(response) {
	                	getAllData();
	                	console.log(response)
	                }, function(err) {
	                	console.log(err);
	                })
	            }
	        }
        	$scope.$apply();
		}

	}]);
})();