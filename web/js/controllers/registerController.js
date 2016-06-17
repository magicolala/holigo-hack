function registerController($scope, registerService){

  $scope.data = {};

  $scope.register =function (){
    console.log($scope.data);
    registerService.create($scope.data).then(function(res, err){
      if(err){
        console.log(400);
      }
      console.log(200);
    });
  };


}
