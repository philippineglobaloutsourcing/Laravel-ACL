@extends('layouts.app')

@section('content')
<div class="container spark-screen" ng-app="acl" ng-controller="aclController">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">


                    <div id="@{{user.id}}" class="well" ng-repeat="user in users" droptarget>
                        <button class="btn btn-info pull-left">@{{user.name}}</button>

                        <button type="button" class="btn btn-default pull-right btn-sm" ng-show="user.roles.length == 0">No roles assigned!</button>
                        <button type="button" class="btn btn-default pull-right btn-sm" ng-show="user.roles.length > 0" class="list-group-item" ng-repeat="role in user.roles">@{{role.role}} <i class="fa fa-close"></i></button>

                        <div class="clearfix"></div>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-md-4">
  

            <div class="panel with-nav-tabs panel-primary">
              <div class="panel-heading clearfix">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#user_role_tab" data-toggle="tab">Roles</a></li>
                            <li><a href="#user_language_tab" data-toggle="tab">Languages</a></li>
                            <li><a href="#user_race_tab" data-toggle="tab">Races</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="user_role_tab">
                            <div id="drag">
                                {{-- <button type="button" class="btn btn-primary" ng-repeat="role in roles" dragtarget itemid="@{{role.id}}"> @{{role.role}}</button> --}}
                                <button type="button" class="btn btn-default" ng-show="roles.length > 0" class="list-group-item" ng-repeat="role in roles" dragtarget itemid="@{{role.id}}">@{{role.role}}</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="user_language_tab">
                            <!-- Standard button -->
                            <button type="button" class="btn btn-default">Default</button>

                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary">Primary</button>

                            <!-- Indicates a successful or positive action -->
                            <button type="button" class="btn btn-success">Success</button>

                        </div>
                        <div class="tab-pane fade" id="user_race_tab">
                            Default 3
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>



</div>
@endsection
