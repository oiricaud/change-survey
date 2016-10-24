
    
        <div class="login-box">
            <div class="login-box-body">
                <p class="login-box-msg">Please type administrator password to access the survey</p>
                <form action="<?php echo base_url("login/loginFunction");?>" method="post">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    
