<!doctype html>
<html>
<head>
<meta charset="UTF-8">
   <!-- Angular Material Dependencies -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-aria.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/dist.js"></script>
	<link rel="stylesheet" href="css/dist.css">
</head>
<body>
	
<body layout="column" ng-controller="AppCtrl">
    <div class="main-fab">
      <md-button class="md-fab md-accent">+</md-button>
    </div>
    <md-toolbar class="md-tall" layout="column"><span flex="flex"></span>
      <div class="md-toolbar-tools">
        <div class="fill-height" layout="row" flex="flex">
          <div class="md-toolbar-item md-breadcrumb" ng-hide="toggleSearch"><span ng-click="toggleSearch = !toggleSearch">Angular Material Table</span></div><span flex="flex" ng-hide="toggleSearch"></span>
          <md-input-container flex="flex" style="padding-left:88px" ng-show="toggleSearch">
            <input id="searchinput" type="text" ng-model="search" show-focus="toggleSearch"/>
          </md-input-container>
          <div class="md-toolbar-item md-tools" layout="row"><a class="md-button md-default-theme" href="#" ng-click="toggleSearch = !toggleSearch"><i class="ion-android-search"></i></a></div>
        </div>
      </div>
    </md-toolbar>
    <md-content layout="column" flex="flex" ng-click="toggleSearch=false">
      <md-table headers="headers" content="content" sortable="sortable" filters="search" custom-class="custom" thumbs="thumbs" count="count"></md-table>
    </md-content>
   
    
  </body>
</html>
<!-- md-table jade template-->
<div id="md-table-template" ng-hide="true">
  <table class="md-table" md-colresize="md-colresize">
    <thead>
      <tr class="md-table-headers-row">
        <th class="md-table-header" ng-repeat="h in headers"><a href="#" ng-if="handleSort(h.field)" ng-click="reverse=!reverse;order(h.field,reverse)">{{h.name}} <i class="ion-android-arrow-dropup" ng-show="reverse &amp;&amp; h.field == predicate"></i><i class="ion-android-arrow-dropdown" ng-show="!reverse &amp;&amp; h.field == predicate"></i></a><span ng-if="!handleSort(h.field)">{{h.name}}</span></th>
        <th class="md-table-header"></th>
      </tr>
    </thead>
    <tbody>
      <tr class="md-table-content-row" ng-repeat="c in content | filter:filters | startFrom:tablePage*count | limitTo: count">
        <td>
          <div class="md-table-thumbs" ng-repeat="h in headers" ng-if="h.field == thumbs">
            <div style="background-image:url({{c.thumb}})"></div>
          </div>
        </td>
        <td class="md-table-content" ng-repeat="h in headers" ng-class="customClass[h.field]" ng-if="h.field != thumbs">{{(h.field.indexOf('date') > 0) ? $filter('date')(c[h.field]) : c[h.field];}}</td>
        <td class="md-table-td-more">
          <md-button aria-label="Info"><i class="ion-android-more-vertical"></i></md-button>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="md-table-footer" layout="row"><span class="md-table-count-info">Rows per page : <a href="#" ng-click="goToPage(0); count=10">10</a>,<a href="#" ng-click="goToPage(0); count=25">25</a>,<a href="#" ng-click="goToPage(0); count=50">50</a>,<a href="#" ng-click="goToPage(0); count=100">100</a>(current is {{count}})</span><span flex="flex"></span><span ng-show="nbOfPages() &gt; 1">
      <md-button class="md-primary md-hue-2" ng-disabled="tablePage==0" ng-click="tablePage=tablePage-1" aria-label="Previous Page"><i class="ion-chevron-left" style="font-size:16px"></i></md-button><a href="#" ng-repeat="i in getNumber(nbOfPages()) track by $index">
        <md-button class="md-primary md-hue-2 md-table-footer-item" ng-click="goToPage($index)"><span ng-class="{ 'md-table-active-page': tablePage==$index}">{{$index+1}}</span></md-button></a>
      <md-button class="md-primary md-hue-2" ng-disabled="tablePage==nbOfPages()-1" ng-click="tablePage=tablePage+1" aria-label="Next Page"> <i class="keyboard_arrow_right" style="font-size:16px"></i> 
    
    </md-button></span></div>
</div>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

 <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</body>

</html>