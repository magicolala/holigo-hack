// REGISTER Service
function registerService($http){
  return {
    create : function(data){
      return $http.post('http://localhost/holigo-hack/web/app_dev.php/new.json', data);
    }
  };
}
