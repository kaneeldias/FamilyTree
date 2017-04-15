<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/h_box_styles.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/form_styles.css"/>
<script src="<?=base_url()?>assets/js/form_script.js"></script>
<script src="<?=base_url()?>assets/js/ng-controllers/add_person_controller.js"></script>


<div layout="column" layout-align="center center">

    <div class="h_box">

        <div class="h_box_title">
            Add Person
        </div>

        <div class="h_box_content" ng-controller="add_person_controller">

            <div layout="row" class="">

                <div class="input_box">
                    <div class="input_label">{{form.f_name.title}}</div>
                    <div class="input_item">
                        <input ng-model="form.f_name.value" ng-change="form.f_name.validate()" type="text"/>
                    </div>
                    <div class="errors_box" flex>
                        <span class="form_error_msg" ng-show="form.f_name.errors.isBlank.status">{{form.f_name.errors.isBlank.message}}</span>
                        <span class="form_error_msg" ng-show="form.f_name.errors.specialChars.status">{{form.f_name.errors.specialChars.message}}</span>
                    </div>
                </div>

                <div class="input_box">
                    <div class="input_label">{{form.l_name.title}}</div>
                    <div class="input_item">
                        <input ng-model="form.l_name.value" ng-change="form.l_name.validate()" type="text"/>
                    </div>
                    <div class="errors_box" flex>
                        <span class="form_error_msg" ng-show="form.l_name.errors.isBlank.status">{{form.l_name.errors.isBlank.message}}</span>
                        <span class="form_error_msg" ng-show="form.l_name.errors.specialChars.status">{{form.l_name.errors.specialChars.message}}</span>
                    </div>
                </div>

            </div>

            <div class="input_box">
                <div class="input_label">{{form.gender.title}}</div>
                <div class="input_item">
                    <md-radio-group ng-model="form.gender.value" ng-change="form.gender.validate()" layout="row">
                        <md-radio-button value="M">Male</md-radio-button>
                        <md-radio-button value="F">Female</md-radio-button>
                    </md-radio-group>
                    <div class="errors_box" flex>
                        <span class="form_error_msg" ng-show="form.gender.errors.isBlank.status">{{form.gender.errors.isBlank.message}}</span>
                    </div>
                </div>

            </div>

            <div layout="column" layout-align="center center">
                <md-button ng-click="form.submit()" style="width:150px; color:white; font-weight:bold; padding:5px; font-size:16px; background-color:#C0392B;" class="md-raised">CREATE PERSON</md-button>
            </div>

        </div>

    </div>

</div>