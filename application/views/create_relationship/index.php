<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/h_box_styles.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/form_styles.css"/>
<script src="<?=base_url()?>assets/js/form_script.js"></script>
<script src="<?=base_url()?>assets/js/ng-controllers/create_relationship_controller.js"></script>


<div layout="column" layout-align="center center">

    <div class="h_box">

        <div class="h_box_title">
            Create Relationship
        </div>

        <div class="h_box_content" ng-controller="create_relationship_controller">

            <div layout="row" class="">

                <div class="input_box">
                    <div class="input_label">{{form.person1.title}}</div>
                    <div class="input_item">
                        <input ng-model="form.person1.value" ng-change="form.person1.validate()" type="text"/>
                    </div>
                    <!--<div class="errors_box" flex>
                        <span class="form_error_msg" ng-show="form.f_name.errors.isBlank.status">{{form.f_name.errors.isBlank.message}}</span>
                        <span class="form_error_msg" ng-show="form.f_name.errors.specialChars.status">{{form.f_name.errors.specialChars.message}}</span>
                    </div>-->
                </div>

                <div class="input_box">
                    <div class="input_label">{{form.person2.title}}</div>
                    <div class="input_item">
                        <input ng-model="form.person2.value" ng-change="form.person2.validate()" type="text"/>
                    </div>
                    <!--<div class="errors_box" flex>
                        <span class="form_error_msg" ng-show="form.f_name.errors.isBlank.status">{{form.f_name.errors.isBlank.message}}</span>
                        <span class="form_error_msg" ng-show="form.f_name.errors.specialChars.status">{{form.f_name.errors.specialChars.message}}</span>
                    </div>-->
                </div>

            </div>

            <div class="input_box">
                <div class="input_label">{{form.relationship.title}}</div>
                <div class="input_item">
                    <md-radio-group ng-model="form.relationship.value" ng-change="form.relationship.validate()" layout="row">
                        <md-radio-button value="P">Parent</md-radio-button>
                        <md-radio-button value="C">Child</md-radio-button>
                        <md-radio-button value="S">Spouse</md-radio-button>
                    </md-radio-group>
                    <!--<div class="errors_box" flex>
                        <span class="form_error_msg" ng-show="form.gender.errors.isBlank.status">{{form.gender.errors.isBlank.message}}</span>
                    </div>-->
                </div>

            </div>

            <div layout="column" layout-align="center center">
                <md-button ng-click="form.submit()" style="width:150px; color:white; font-weight:bold; padding:5px; font-size:16px; background-color:#C0392B;" class="md-raised">CREATE PERSON</md-button>
            </div>

        </div>

    </div>

</div>