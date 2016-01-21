(function(){
	'use strict';
	angular.module('acl')
	.service('aclService', function() {
		var aclService = {
			userId: '',
			getDropId: function(id) {
				aclService.userId = id;
			}
		};
		return aclService;
	})
	.factory('aclFactory', aclFactory);

	function aclFactory($http) {
		function getData() {
			return $http.get(Base_Url + 'api/users/pivots');
		}
		function saveRoleToUser(data) {
			return $http.post(Base_Url + 'api/users/assign/role', data);
		}
		function getUserData() {
			return $http.get(Base_Url + 'api/user-data' + id);
		}
		function userId() {
			return $http.get(Base_Url + 'api/user-id');
		}
		
		return {
			getUserData:getUserData,
			userId:userId,
			getData:getData,
			saveRoleToUser:saveRoleToUser
		}
	}
})();