define(['./../module'], function (module) {
    
    "use strict";
    
    module.registerFactory('postDataService' , ['$http', '$q', '$log', 'CONFIG',
        function($http, $q, $log, CONFIG){
            return {
                postDataToAdd : postDataToAdd ,
                uploadData : uploadData ,
                postIdsToDelete : postIdsToDelete
                
            };
            
            function postDataToAdd($scope) {
                 
                var data = {
                  category_id : $scope.selectCategory,
                  brand_id : $scope.selectBrand ,
                  volume : $scope.volume ,
                  sku : $scope.sku ,
                  variant_color : $scope.variantColor ,
                  format : $scope.format ,
                  price : $scope.price ,
                  srp : $scope.srp
                } ;

                return $http({
                    url :CONFIG.ApiBaseUrl + '/product' ,
                    method : 'POST' ,
                    data : $.param(data),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                })
                .then(function successCallback(response) {
                    var data = response.data;
                    return data;
                }, function errorCallback(response) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            }
            
            function uploadData(data, postUrl){
                
                return $http({
                    method: 'POST',
                    url : postUrl ,
                    data : data ,
                    //transformRequest: angular.identity,
                    headers: {'Content-Type': undefined,'Process-Data': false},
                    transformRequest: function (data, headersGetter) {
                        var formData = new FormData();
                        angular.forEach(data, function (value, key) {
                           formData.append(key, value);
                        });
                        var headers = headersGetter();
                        delete headers['Content-Type'];
                        return formData;
                    }
                    
                })
                .then(function successCallback(response) {
                    var data = response.data;
                    return data;
                }, function errorCallback(response) {alert(123);
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
                
            }
            ///////////////////////////
            function postIdsToDelete(ids){
                console.log($.param(ids));
                 return $http({
                    url :CONFIG.ApiBaseUrl + '/product/delete' ,
                    method : 'POST' ,
                    data : $.param(ids),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                })
                .then(function successCallback(response) {
                    var data = response.data;
                    return data;
                }, function errorCallback(response) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            }
            //////////////////////////
           
        }]);
});




