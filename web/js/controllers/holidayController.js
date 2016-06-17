function holidayController($scope, $http) {

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

  $(document).ready(function() {
    $('select').material_select();
  });

  $scope.try = function() {
    url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=Vancouver+BC|Seattle&destinations=San+Francisco|Victoria+BC&mode=bicycling&language=fr-FR&key=AIzaSyDuG0OeQkBpLTk_ufVZVAQWxTicjPTP2Ok";
    $http.get(url).then(function(res) {
      $scope.test = res;
      console.log(res);
    });
  };
}
