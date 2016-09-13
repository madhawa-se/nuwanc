<!DOCTYPE html>

<html ng-app="myApp">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet"/>
        <script src="<?php echo base_url() ?>js/jquery-2.2.1.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>

        <script src = "<?php echo base_url() ?>js/bootstrap.min.js" ></script>
        <script>

                    var app = angular.module('myApp', ['ngRoute']);
                    app.controller('activeedit', function ($scope) {
                        $scope.name = "test";
                    });
                    app.controller('form1Controller', function ($scope) {
                        $scope.name = "test";
                        $scope.form1={};
                        $scope.form1.gen_title;
                        $scope.form1.editFlop=[true,true,true];
                        $scope.submit = function (formIndex) {
                            var str = $("#form-genaral").serialize();
                            alert(str);
                        }
                        $scope.setEditable = function (flopIndex) {
                            $scope.form1.editFlop[flopIndex]=false;
                            console.log($scope.form1.editFlop[0]);
                        }
                    });
                    
                    app.config(function ($routeProvider) {
                        $routeProvider

                                // route for the home page
                                .when('/', {
                                    templateUrl: 'forms/form1',
                                    controller: 'form1Controller'

                                })
                                .when('/form1', {
                                    templateUrl: 'forms/form1'
                                })
                                .when('/form2', {
                                    templateUrl: 'forms/form2'
                                })
                                .when('/form3', {
                                    templateUrl: 'forms/form3'
                                })
                                .when('/form4', {
                                    templateUrl: 'forms/form4'
                                })
                                .when('/form5', {
                                    templateUrl: 'forms/form5'
                                });
                    });
                    app.controller('tableCTRL', function ($scope) {
                        $scope.servises = [];
                        $scope.serviceText = "";
                        $scope.pushService = function () {
                            $scope.servises.push($scope.serviceText);
                        }
                    });
                    app.controller('btnCTRL', function ($scope, $http) {
                        $scope.btn = {};
                        $scope.forms = {};
                        $scope.forms.form1 = {};
                        $scope.forms.form1.name = "";
                        $scope.btn.visible = [true, false, false, false, false, false];
                        $scope.btn.setVisible = function (indexx) {
                            var state = $scope.btn.visible[indexx];
                            for (var i = 0; i < $scope.btn.visible.length; i++) {
                                $scope.btn.visible[i] = false;
                            }
                            $scope.btn.visible[indexx] = !state;
                            //console.log($scope.btn.visible);
                        };
                        $scope.submit = function (formIndex) {
                            var str = $("#form-genaral").serialize();
                            alert(str);
//                    $http({
//                        method: 'POST',
//                        url: '../',
//                        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
//                        //data: $.param({'article-name': $scope.articleName, summernote: markupStr, 'article-pic': $scope.image_source, 'article-border': 'red'})
//                    }).then(function successCallback(response) {
//                        //console.log(response.data);
//
//                    }, function errorCallback(response) {
//
//                    }
//                    );
                        };
                    });
        </script>
    </head>
    <body>
        <a href="#form2">about</a>

        <div class="containerx">
            <div class="rowx">
                <div class="leftpane col-sm-2">
                    <div class="list-group" id="contbut">
                        <a href="#form1" class="list-group-item" >Genaral</a>
                        <a href="#form2" class="list-group-item" >CEO information</a>
                        <a href="#form3" class="list-group-item" >social media </a>
                        <a href="#form4" class="list-group-item" >Address </a>
                        <a href="#form5" class="list-group-item" >services </a>
                        <a href="#form6" class="list-group-item" >Logo Settings</a>
                    </div>
                </div>
                <div class="rightpane col-sm-10">
                    <div ng-view></div>
                </div>


            </div>
        </div>

    </body>
</html>