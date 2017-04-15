app.controller("create_relationship_controller", function($scope, $http, common){

    $scope.form = {

        person1: {
            title: "Person 1",
            value: "",
            errors:{
                isBlank:{
                    status: false,
                    message: "Required field"
                },
                specialChars:{
                    status: false,
                    message: "Cannot contain special characters"
                }
            },
            validate: function(){
                this.reset();
                var valid = true;
                if(form_functions.validation.isEmpty(this.value)){
                    this.errors.isBlank.status = true;
                    valid = false;
                }
                if(form_functions.validation.hasSpecialChars(this.value)){
                    this.errors.specialChars.status = true;
                    valid = false
                }
                return valid
            },
            reset: function(){
                this.errors.isBlank.status = false;
                this.errors.specialChars.status = false;
            }
        },

        person2: {
            title: "Person 2",
            value: "",
            errors:{
                isBlank:{
                    status: false,
                    message: "Required field"
                },
                specialChars:{
                    status: false,
                    message: "Cannot contain special characters"
                }
            },
            validate: function(){
                this.reset();
                var valid = true;
                if(form_functions.validation.isEmpty(this.value)){
                    this.errors.isBlank.status = true;
                    valid = false;
                }
                if(form_functions.validation.hasSpecialChars(this.value)){
                    this.errors.specialChars.status = true;
                    valid = false
                }
                return valid
            },
            reset: function(){
                this.errors.isBlank.status = false;
                this.errors.specialChars.status = false;
            }
        },

        relationship: {
            title: "Relationship*",
            value: "",
            errors:{
                isBlank:{
                    status: false,
                    message: "Required field"
                },
            },
            validate: function(){
                this.reset();
                var valid = true;
                if(form_functions.validation.isEmpty(this.value)){
                    this.errors.isBlank.status = true;
                    valid = false;
                }
                return valid
            },
            reset: function(){
                this.errors.isBlank.status = false;
            }
        },

        reset: function(){
            $scope.form.f_name.value = "";
            $scope.form.l_name.value = "";
            $scope.form.gender.value = "";
        },

        submit: function() {
            if(!$scope.form.validate()) return;
            $http({
                method: "POST",
                url: base_url+"add-person/add",
                data: {
                    f_name: $scope.form.f_name.value,
                    l_name: $scope.form.l_name.value,
                    gender: $scope.form.gender.value
                }
            }).then(function success(response){
                common.showAlert("Success", "Person has been successfully added.");
                $scope.form.reset();
            }, function error(response){
                common.handleAjaxError(response)
            })

        },

        validate: function(){
            $scope.form.f_name.validate();
            $scope.form.l_name.validate();
            $scope.form.gender.validate();
            valid = $scope.form.f_name.validate() && $scope.form.l_name.validate() && $scope.form.gender.validate()
            if(!valid){
                common.showAlert("Error", "There was an error with your inputs. Please check and try again.")
            }
            return valid;
        }

    };

});
