<?php

?>
<div id="login_modal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content login-modal">
            <div class="modal-header">                
                <h4 class="modal-title">User Login</h4>
            </div>
            <form action="" method="POST">
            <div class="modal-body" style="margin-left: 3px;">
                <form id="login_form" action="" method="post">
                    <div class="row">
                        <div class="col-xs-12">                            
                            <span id="login_message">
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="data[User][email]">Email<span class="required">*</span></label>
                            <input type="text" class="form-control" id="login_email"
                                   name="data[User][email]" required/>
                        </div>                    
                    </div>
                    <div class="row">                    
                        <div class="col-xs-12">
                            <label for="data[User][password]">Password<span class="required">*</span></label>
                            <input type="password" class="form-control" id="login_password"
                                   name="data[User][password]" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkbox">Remember me                                
                                <input type="checkbox" id="remember" name="data[User][remember]"/>
                            </label>
                            <span><a href="#" id="forgo_password">Forgot password?</a></span>
                        </div>
                    </div>
                </form>
                <br/>
                <div class="form-group" style="padding-bottom: 20px;">
                    <div class="pull-right">
                        <button type="button" id="btn_cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" id="btn_login" class="btn btn-primary">Submit</button>
                    </div>
                </div>                
            </div>
            </form>
        </div>
    </div>
</div>