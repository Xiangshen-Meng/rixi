var rixiApp = angular.module("rixiApp", []);

rixiApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol("<%");
    $interpolateProvider.endSymbol("%>");
});

rixiApp.controller("TopTopicsController", function() {
    var topTopics = this;
});

rixiApp.controller("TopicController", function($scope, $http) {
    var topic = this;
    $scope.favorited = false;

    topic.favorite = function(topic_id, csrf_token) {

        var favoriteData = {
            _token: csrf_token,
            topic_id: topic_id
        };

        $http.post("/favorite", favoriteData).success(function (data) {
            if( data['status']  == 'success'){
                $scope.favorited = true;
            }
            $scope.count = data['count'];
        });
    };
});
