function registerController($scope, $location, registerService){

  $scope.data = {};

  $scope.register =function (){
    registerService.create($scope.data).then(function(res, err){
      if(err){
        console.log(400);
      }
      console.log(200);
    });
  };
}
