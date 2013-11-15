<!DOCTYPE html>

<head>
    <meta http-equiv="Contect-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="<?php echo base_url().'images/fav_icon.png';?>" />
    <style type='text/css'>@import url("<?php echo base_url(). CSS. 'bootplus.css';?>")</style>
    <style type="text/css">@import url("<?php echo base_url(). CSS. 'bootplus.min.css';?>")</style>
    <title>Login</title>
    <script src="<?php echo base_url().JS. 'jquery-2.0.3.min.js';?>"></script>
</head>

<body bgcolor="f3f3f3">
    <div id="main_box">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="70%">
                    <div align="center">
                        <img src="<?php echo base_url().IMAGES.'';?>" />
                    </div>
                </td>
            </tr>
            <tr>
                <td width="70%">
                    <div id="reminder_box">
                        <center><br />
                            <div id="load_tweets">
                                
                            </div>
                        </center>
                    </div>
                </td>
                <td width="30%">
                    <div id="login_box">
                        <h3>Login</h3>
                        
                        <?php 
                        $attributes = array('name' => 'login_form', 'id' => 'login_form' );
                        echo form_open('login/login_proses', $attributes);
                        
                        ?>
                        <?php
                        $message = $this->session->flashdata('message');
                        echo $message == '' ? '' : '<p class="field_error">', '</p>';
                        ?>
                        
                        <p>
                            <label for="username">Username :
                            <input type="email" placeholder="E-mail " name = "Email" id="email" value="<?php echo set_value('username');?>"/>
                            </label>
                        </p>
                        <?php echo form_error('username', '<p class="field_error">', '</p>');?>
                        <p>
                            <label for="password">Password :
                            <input type="password" name="Password" id="password" value="<?php echo set_value('password');?>"/>
                            </label>
                        </p>
                        <p>
                            <br/> <input type="submit" name="submit" value="Login" id="submit"/>
                        </p>
                    </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="footer" align="center">
        Copyleft &copy; 2013 Global Trans Solutions <br />
        Developed by Al Qalit
        <a href="http://github.com/qalit"></a>
    </div>
</body>