angular.module('MathApp', [])
  .controller('RandomController', function($scope) {
    $scope.numbers = [];

    $scope.$watch('number', function(newVal) {
      $scope.numbers = [];
      for (let i = 0; i < newVal; i++) {
        $scope.numbers.push(Math.floor(Math.random() * 50) + 1);
      }
    });

    $scope.countInRange = function(min, max) {
      return $scope.numbers.filter(n => n >= min && n <= max).length;
    };
  });
