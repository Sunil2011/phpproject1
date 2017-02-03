
define(['./../module'], function (module) {
    
  module.registerController('productController', ['$scope', '$location', '$timeout', '$state', 'productDataService', 'categoryDataService', 'brandDataService', 'postDataService','CONFIG', '$stateParams', 
        function ($scope, $location, $timeout, $state , productDataService , categoryDataService, brandDataService, postDataService,CONFIG, $stateParams) {
           // var vm = this ;
            $scope.products = productDataService.getproductList()
                    .then(function(response){
                        if(response.success) {
                       // alert(response.message);
                        $scope.prd  =  response.data.product.list  ;
                    } else {
                        alert(response.message);
                    }
            });
           
           
           $scope.categories = categoryDataService.getcategoryList()
                   .then(function(response){
                           if(response.success) {
                       // alert(response.message);
                        $scope.cats  =  response.data.category.list  ;
                    } else {
                        alert(response.message);
                    }
           });
            
            $scope.prodCatAndOrBrand = function($category_id, $brand_id){
                if($category_id || $brand_id ){
                   // console.log($category_id, $brand_id); // correct
                    $state.go('app.admin', {category_id:$category_id, brand_id:$brand_id} ) ;
                    
                }else{
                    $state.go('app.admin',{});
                   
                }
            };
            
            $scope.brands = brandDataService.getbrandList()
                   .then(function(response){
                           if(response.success) {
                       
                        $scope.brds  =  response.data.brand.list  ;
                    } else {
                        alert(response.message);
                    }
           });
            
            $scope.addProduct = function(){
               // console.log('add button clicked'); //correct
                $state.go('app.productAddEdit',{});  
            };
           
            $scope.editProduct = function($id){
                // console.log($id); 
                $state.go('app.productAddEdit', {product_id : $id});
                
            };
            
            $scope.BaseUrl = CONFIG.BaseUrl ;
            $scope.BasePath2Img = CONFIG.BasePath2Img ;
            $scope.selectedCat =  $stateParams.category_id ;
            $scope.selectedBrand =  $stateParams.brand_id ;
            
           /////////////////////////////////////////////////////////// 
            $scope.idArr = [] ;
            $scope.isChecked = function($id){
                var match = false ;
                for( var i=0 ;i<$scope.idArr.length ; i++ ){
                    if($scope.idArr[i]==$id){
                        match = true ;
                    }
                }
                return match ;
            };
            
            $scope.selectProduct = function( $bool , $id ){
                if($bool){
                    //var item = {"id":$id };
                    $scope.idArr.push($id);  // add id as objects
                }else{
                    // remove id if checkbox in unselected
                    for( var i=0 ; i<$scope.idArr.lenght; i++){
                        if($scope.idArr[i].id == $id){
                            $scope.idArr.splice(i,1) ;  // i=index of $id , 1 no of data to remove ,
                        }
                    }
                }
                
            };
            
            $scope.deleteProducts = function(){
                var arr = $scope.idArr ;
                
                console.log(arr); 
                postDataService.postIdsToDelete(arr).then(function(response){
                    if(response.success){
                       console.log('successfully deleted !');
                       $state.go('app.admin',{}) ;
                    }
                    else{
                       console.log(response.message) ;
                    }
                });
              
            };
            /////////////////////////////
            
    }]);

});

