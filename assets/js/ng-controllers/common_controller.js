app.factory('common', function($mdDialog) {

    var common = {};

    common.showAlert = function(title, msg){
        $mdDialog.show(
            $mdDialog.alert()
                .parent(angular.element(document.querySelector('#popupContainer')))
                .clickOutsideToClose(true)
                .title(title)
                .textContent(msg)
                .ariaLabel('Dialog')
                .ok('OK')
        )
    };

    common.handleAjaxError = function(response){
        if(response.status == 400){
            common.showAlert("Error: " + response.status, response.data.message);
            return;
        }
        common.showAlert("Error: " + response.status, response.data);
    };

    return common;

});
