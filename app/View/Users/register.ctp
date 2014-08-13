<?php

?>
<div class="container">
    <form id="registration_form" action="/jobavenue/users/register" method="POST">
        <div class="row">
            <div class="col-lg-offset-5">
                <span><h4>New User Registration</h4></span>
            </div>       
        </div>
        <div class="row">
            <div class="col-xs-6">
                <label for="data[User][email]">Email<span class="required">*</span></label>
                <input type="email" maxlength="200" class="form-control" id="reg_email"
                       name="data[User][email]" required/>
            </div>
            <div class="col-xs-3 pull-right">
                <label for="data[User][resume]">
                    Upload Resume(.pdf/.doc.docx)
                </label>
                <input type="file" class="form-control" id="reg_resume"
                       name="data[User][resume]"/>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-6">
                <label for="data[User][password]">Password<span class="required">*</span></label>
                <input type="password" maxlength="100" class="form-control" id="reg_password"
                       name="data[User][password]" minlength="6" required/>
            </div>
            <div class="col-xs-6">
                <label for="data[User][confirmpassword]">Confirm Password<span class="required">*</span></label>
                <input type="password" maxlength="100" class="form-control" id="reg_confirm_password"
                       name="data[User][confirmpassword]" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <label for="data[User][firstname]">Firstname<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_firstname"
                       name="data[User][firstname]" required/>
            </div>
            <div class="col-xs-4">
                <label for="data[User][middlename]">Middle Name<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_middlename"
                       name="data[User][middlename]" required/>
            </div>
            <div class="col-xs-4">
                <label for="data[User][lastname]">Lastname<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_lastname"
                       name="data[User][lastname]" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <label for="data[User][birthday]">Birthday<span class="required">*</span></label>
                <input type="date" class="form-control" id="reg_birthday"
                       name="data[User][birthday]" required/>
            </div>
            <div class="col-xs-2">
                <label for="data[User][gender]">Gender<span class="required">*</span></label>
                <select id="reg_gender" name="data[User][gender]" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-xs-3">
                <label for="data[User][civil_status]">Civil Status<span class="required">*</span></label>
                <input type="text" maxlength="20" class="form-control" id="reg_civil_status"
                       name="data[User][civil_status]" required/>
            </div>
            <div class="col-xs-4">
                <label for="data[User][nationality]">Nationality<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_nationality"
                       name="data[User][nationality]" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <label for="data[User][educational_level]">Educational Level<span class="required">*</span></label>
                <select id="reg_educational_level" name="data[User][educational_level]" class="form-control">          
                    <option value="bachelor_degree">Bachelor's Degree</option>
                    <option value="masteral">Masteral</option>
                    <option value="college_undergrad">College Undergrad</option>
                    <option value="high_school_graduate">High School Graduate</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label for="data[User][course]">Course<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_course"
                       name="data[User][course]" required/>
            </div>
            <div class="col-xs-4">
                <label for="data[User][school]">School<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_school"
                       name="data[User][school]" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <label for="data[User][city_address]">City Address<span class="required">*</span></label>
                <input type="text" class="form-control" id="reg_city_address"
                       name="data[User][city_address]" placeholder="Street/Barangay/City/Province"required/>
            </div>
            <div class="col-xs-6">
                <label for="data[User][permanent_address]">Permanent Address<span class="required">*</span></label>
                <input type="text" class="form-control" id="reg_permanent_address"
                       name="data[User][permanent_address]" placeholder="Street/Barangay/City/Province"required/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <label for="data[User][company]">Current/Previous Company<span class="required">*</span></label>
                <input type="text" class="form-control" id="reg_company"
                       name="data[User][company]" required/>
            </div>
            <div class="col-xs-3">
                <label for="data[User][position]">Position<span class="required">*</span></label>
                <input type="text" maxlength="100" class="form-control" id="reg_from"
                       name="data[User][position]" required/>
            </div>
            <div class="col-xs-2">
                <label for="data[User][status]">Status<span class="required">*</span></label>
                <select id="reg_status" name="data[User][status]" class="form-control">
                    <option value="resigned">Resigned</option>
                    <option value="employed">Employed</option>                            
                    <option value="terminated">Terminated</option>
                </select>
            </div>
            <div class="col-xs-2">
                <label for="data[User][date_started]">Date Started<span class="required">*</span></label>
                <input type="date" class="form-control" id="reg_date_started"
                       name="data[User][date_started]" required/>
            </div>
            <div class="col-xs-2">
                <label for="data[User][date_end]">Date Ended<span class="required">*</span></label>
                <input type="date" class="form-control" id="reg_date_ended"
                       name="data[User][date_ended]" required/>
            </div>
        </div>
        <br/>
        <div class="form-group" style="padding-bottom: 20px;">
            <div class="pull-right">
                <button type="submit" id="btn_register" class="btn btn-primary">Submit</button>
            </div>
        </div>  
    </form>
</div>