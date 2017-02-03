define(['angular',
    'angular-couch-potato',
    'angular-bootstrap',
    'angular-ui-router'], function (ng, couchPotato) {

    "use strict";


    var module = ng.module('app.admin', ['ui.router', 'ui.bootstrap']);

    couchPotato.configureApp(module);

    module.config(['$stateProvider', '$couchPotatoProvider', '$urlRouterProvider', function ($stateProvider, $couchPotatoProvider, $urlRouterProvider) {
            $stateProvider
                .state('app.admin', {
                    url: '/gs/products',
                    params: {
                     category_id : null,
                     brand_id : null 
                    },
                    templateUrl: './js/modules/admin/views/product.html',
                    controller: 'productController',
                    controllerAs:'product',
                    data: {
                        authRequired : true,
                        types: ['GROWSARI']
                    },
                    resolve: {
                        deps: $couchPotatoProvider.resolveDependencies([
                            './js/modules/admin/services/productDataService' ,
                            './js/modules/admin/services/categoryDataService' ,
                            './js/modules/admin/services/brandDataService' ,
                            './js/modules/admin/services/postDataService' ,/////////////
                            './js/modules/admin/controllers/productController'
                        ])
                    }
                })

                .state('app.productAddEdit',{
                    url: '/gs/products/add-edit/{product_id}',
                    params:{
                        product_id : null
                    },
                    templateUrl : './js/modules/admin/views/product-add-edit.html',
                    controller : 'productAddEditController',
                    controllerAs :'productAddEdit' ,
                    data : {
                        authRequired : true ,
                        types : ['GROWSARI']
                    },
                    resolve : {
                        deps : $couchPotatoProvider.resolveDependencies([
                            './js/modules/admin/services/productDataService' ,
                            './js/modules/admin/services/categoryDataService' ,
                            './js/modules/admin/services/brandDataService' ,
                            './js/modules/admin/services/postDataService' ,
                            './js/modules/admin/controllers/productAddEditController',
                            './js/modules/admin/directives/fileModel' 
                        ])
                    }
                })

                .state('app.gs_order', {
                    url: '/gs/order',
                    params: {
                     category_id : null,
                     brand_id : null 
                    },
                    templateUrl: './js/modules/admin/views/order-list.html',
                    controller: 'orderController',
                    controllerAs:'order',
                    data: {
                        authRequired : true,
                        types: ['GROWSARI']
                    },
                    resolve: {
                        deps: $couchPotatoProvider.resolveDependencies([
                            './js/modules/warehouse/services/orderService',
                            './js/modules/warehouse/services/orderDataService',
                            './js/modules/warehouse/directives/orderListDirective',
                            './js/modules/admin/controllers/orderController'

                        ])
                    }
                });
                
        }]);

    module.run(function ($couchPotato) {
        module.lazy = $couchPotato;
    });

    console.log("layout", module);
    return module;
});

