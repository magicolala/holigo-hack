// REGISTER Service
function registerService($http){
  return {
    create : function(data){
      return $http.post('192.168.3.186/', data);
    }
  };
}
