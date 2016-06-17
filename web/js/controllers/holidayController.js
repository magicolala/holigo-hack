function holidayController($scope, $http, holidayService) {

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

  $(document).ready(function() {
    $('select').material_select();
  });

  $scope.data = {};
  $scope.sendHoliday =function (){
    console.log($scope.data);
    holidayService.create($scope.data).then(function(res, err){
      if(err){
        console.log(400);
      }
      console.log($scope.data);
      console.log(200);
    });
  };
}
