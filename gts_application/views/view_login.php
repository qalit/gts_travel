<!DOCTYPE html>

<head>
    <meta http-equiv="Contect-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="<?php echo base_url().'images/fav_icon.png';?>" />
    <style type='text/css'>@import url("<?php echo base_url(). C_CSS. 'reset.css';?>")</style>
    <style type="text/css">@import url("<?php echo base_url(). C_CSS. 'login.css';?>")</style>
    <title>Login</title>
    <script src="<?php echo base_url().C_JS. 'jquery-2.0.3.min.js';?>"></script>
</head>

<body bgcolor="f3f3f3">
    <div id="main_box">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="70%">
                    <div align="center">
                        <img src="<?php echo base_url().C_IMAGES.'logo2.png';?>" />
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
                        <h1>Login</h1>
                        <?php 
                        $attributes = array('name' => 'login_form', 'id' => 'login_form' );
                        echo form_open('login/proses_login', $attributes);
                        
                        ?>
                        <?php
                        $message = $this->session->flashdata('message');
                        echo $message == '' ? '' : '<p class="field_error">', '</p>';
                        ?>
                        
                        <p>
                            <label for="username">Username :</label>
                            <input type="text" name="username" size="20" class="form_field" value="<?php echo set_value('username');?>"/>
                            
                        </p>
                        <?php echo form_error('username', '<p class="field_error">', '</p>');?>
                        <p>
                            <br <input type="submit" name="submit" value="Login" id="submit"/> />
                        </p>
                    </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="footer" align="center">
        Copyleft &copy; 2013 Global Trans Solutions <br />
        <a href="http://globaltranssolutions.blogspot.com"></a>
        Developed by Al Qalit
        <a href="http://github.com/qalit"></a>
    </div>
</body>