
<?php
$this->load->view('template/head');
?>

 <?php 
if($this->uri->segment(4)=="salah")
    {
        echo("<div class='alert alert-danger'><b>Peringatan...!!!</b>Password atau Username yang anda masukkan salah...!!!silahakan ulang</div>");    
    }
 ?>

 <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>Login</b>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php echo site_url('auth/login') ?>" method="post">
                    <b><?php echo form_error('username'); ?></b> <!-- pesan error -->
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="User Name"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <b><?php echo form_error('password'); ?></b>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"  placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                               
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit"  name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
<?php
$this->load->view('template/jquery');
?>