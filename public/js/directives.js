(function() {
	'use strict';
	angular.module('acl')
	.directive('dragtarget', function() {
		return {
			restrict: 'A',
	        link: function(scope, element, attributes, ctlr) {
	            element.attr('draggable', true);
	            element.bind('dragstart', function(eventObject) {
	                eventObject.originalEvent.dataTransfer.setData('text', attributes.itemid);
	            });
	        }
		}
	})
	.directive('droptarget', ['aclService', function(aclService) {
		return {
	        restrict: 'A',
	        link: function (scope, element, attributes, ctlr) {
	        	scope.dropId = attributes.id;
	            element.bind('dragover', function(eventObject){
	                eventObject.preventDefault();
	            });
	            element.bind('drop', function(eventObject) {
	            	aclService.getDropId(scope.dropId);
	                scope.moveToTarget(parseInt(eventObject.originalEvent.dataTransfer.getData('text')));
	                // alert(scope.dropId);
	                eventObject.preventDefault();
	            });
	        }
		}
	}]);
})();