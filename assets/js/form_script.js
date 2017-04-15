var form_functions = {

    validation: {

        isEmpty: function(s){
            return $.trim(s) == "";
        },

        hasSpecialChars: function(s){
            if(this.isEmpty(s)) return false;
            return !/^[a-zA-Z]+$/.test(s);
        }

    }

};