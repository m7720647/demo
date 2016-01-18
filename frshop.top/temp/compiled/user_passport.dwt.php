<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
</head>
<body style="background:#f5f5f5">
<div class="block login_logo"><a href="./"><img src="themes/mazentop/images/logo.gif" /></a></div>

<div class="block clearfix tc">

<?php if ($this->_var['action'] == 'login'): ?>
  <div class="usBox_1">
   <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
        <table width="100%" border="0" cellpadding="3" cellspacing="5">
          <tr>
            <td align="left"><input name="username" type="text" size="25" class="inputBg" value="用户名" onfocus="if (value =='用户名'){value =''}" onblur="if (value ==''){value='用户名'}"  /></td>
          </tr>
          <tr>
            <td align="left">
            <input name="password" type="password" size="15"  class="inputBg" value="***********" onfocus="if (value =='***********'){value =''}" onblur="if (value ==''){value='***********'}"/>            </td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="left"><input type="text" size="8" style="width:170px" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr class="none">
            <td><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
          <tr>
            <td align="left">
            <input type="hidden" name="act" value="act_login" />
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            <input type="submit" name="submit" value="立即登录" class="us_Submit" />
            <a href="user.php?act=register" class="us_Submit_reg">注册帐号</a>
            </td>
          </tr>
      </table>
    </form>
  </div>
  <div class="block" style="height:70px"></div>
<?php endif; ?>



<?php if ($this->_var['action'] == 'register'): ?>
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
  <div class="usBox_2 clearfix">
    <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
  </div>
<?php else: ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div class="usBox">
	<div class="title-item tc">
      <h4>注册帐号</h4>          
    </div>
    <div class="usBox_1">
    <form action="user.php" method="post" name="formUser" onsubmit="return register();">
      <table width="100%"  border="0" cellpadding="5" cellspacing="3">
        <tr>
          <td align="left">
          <input name="username" type="text" size="25" id="username"  value="<?php echo $this->_var['lang']['label_username']; ?>" onfocus="if (value =='<?php echo $this->_var['lang']['label_username']; ?>'){value =''}" onblur="is_registered(this.value);if (value ==''){value='<?php echo $this->_var['lang']['label_username']; ?>'}" class="inputBg"/>
          <span id="username_notice" style="color:#FF0000"></span>
          </td>
        </tr>
        <tr>
          <td align="left">
          <input name="email" type="text" size="25" id="email" value="<?php echo $this->_var['lang']['label_email']; ?>" onfocus="if (value =='<?php echo $this->_var['lang']['label_email']; ?>'){value =''}" onblur="checkEmail(this.value);if (value ==''){value='<?php echo $this->_var['lang']['label_email']; ?>'}" class="inputBg"/>
          <span id="email_notice" style="color:#FF0000"></span>
          </td>
        </tr>
        <tr>
          <td align="left">
          <input name="password" type="password" id="password1" onkeyup="checkIntensity(this.value)" value="******" onfocus="if (value =='******'){value =''}" onblur="check_password(this.value);if (value ==''){value='******'}" class="inputBg"/>
          <span id="password_notice" style="color:#FF0000"></span>
          </td>
        </tr>
        <tr>
          <td>
            <table width="145" border="0" cellspacing="0" cellpadding="0">
              <tr align="center">
                <td width="33%" id="pwd_lower"> </td>
                <td width="33%" id="pwd_middle"> </td>
                <td width="33%" id="pwd_high"> </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="left">
          <input name="confirm_password" type="password" id="conform_password" value="******" onfocus="if (value =='******'){value =''}" onblur="check_conform_password(this.value);if (value ==''){value='******'}" class="inputBg"/>
          <span id="conform_password_notice" style="color:#FF0000"></span>
          </td>
        </tr>
        <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
    	<?php if ($this->_var['field']['id'] == 6): ?>
        <tr>
          <td align="left">
          <select name='sel_question'>
      		<option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
      <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
      	  </select>
          </td>
        </tr>
        <tr>
          <td align="left">
          <input name="passwd_answer" type="text" value="<?php echo $this->_var['lang']['passwd_answer']; ?>" onfocus="if (value =='<?php echo $this->_var['lang']['passwd_answer']; ?>'){value =''}" onblur="check_conform_password(this.value);if (value ==''){value='<?php echo $this->_var['lang']['passwd_answer']; ?>'}" class="inputBg"/>
          <?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"></span><?php endif; ?>
          </td>
        </tr>
    	<?php else: ?>
        <tr>
          <td align="left">
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" value="<?php echo $this->_var['field']['reg_field_name']; ?>" onfocus="if (value =='<?php echo $this->_var['field']['reg_field_name']; ?>'){value =''}" onblur="check_conform_password(this.value);if (value ==''){value='<?php echo $this->_var['field']['reg_field_name']; ?>'}" class="inputBg"/>
          <a href="article.php?id=1" target="_blank"><font size="-1">为什么要填写身份证？</font></a>
          </td>
        </tr>
    	<?php endif; ?>
    	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     	<?php if ($this->_var['enabled_captcha']): ?>
      	<tr>
      	  <td align="left"><input type="text" style="width:170px" name="captcha" value="<?php echo $this->_var['lang']['comment_captcha']; ?>" onfocus="if (value =='<?php echo $this->_var['lang']['comment_captcha']; ?>'){value =''}" onblur="check_conform_password(this.value);if (value ==''){value='<?php echo $this->_var['lang']['comment_captcha']; ?>'}" class="inputBg"/>
            <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
      	</tr>
      	<?php endif; ?>
        <tr>
          <td align="left">
          <input type="checkbox" checked="checked" value="1" name="agreement" class="none">
          <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input name="Submit" type="submit" value="立即注册" class="us_Submit_reg2">
          <p class="msg">
          点击"立即注册"，即表示您同意并愿意遵守 <?php echo $this->_var['lang']['agreement']; ?>
          </p>
          </td>
        </tr>    
      </table>
    </form>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>



<?php if ($this->_var['action'] == 'get_password'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="usBox_1 clearfix">
<form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
<table width="100%" border="0" cellpadding="3" cellspacing="5">
  <tr>
    <td colspan="2" align="center"><h3><font color="#FF0000"><?php echo $this->_var['lang']['username_and_email']; ?></font></h3></td>
  </tr>
  <tr>
    <td width="29%" align="right"></td>
    <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" value="<?php echo $this->_var['lang']['username']; ?>" onfocus="if (value =='<?php echo $this->_var['lang']['username']; ?>'){value =''}" onblur="if (value ==''){value='<?php echo $this->_var['lang']['username']; ?>'}"  /></td>
  </tr>
  <tr>
    <td align="right"></td>
    <td><input name="email" type="text" size="30" class="inputBg" value="<?php echo $this->_var['lang']['email']; ?>" onfocus="if (value =='<?php echo $this->_var['lang']['email']; ?>'){value =''}" onblur="if (value ==''){value='<?php echo $this->_var['lang']['email']; ?>'}"  /></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <input type="hidden" name="act" value="send_pwd_email" />
      <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="us_Submit" />
      <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="us_Submit_reg" />
    </td>
  </tr>
</table>
</form>
</div>
<?php endif; ?>


<?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="usBox">
<div class="usBox_2 clearfix">
<form action="user.php" method="post">
    <br />
    <table width="70%" border="0" align="center">
      <tr>
        <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
      </tr>
      <tr>
        <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
        <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="hidden" name="act" value="get_passwd_question" />
          <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
          <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
    </td>
      </tr>
    </table>
    <br />
  </form>
</div>
</div>
<?php endif; ?>


<?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="usBox">
<div class="usBox_2 clearfix">
<form action="user.php" method="post">
    <br />
    <table width="70%" border="0" align="center">
      <tr>
        <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
      </tr>
      <tr>
        <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
        <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
      </tr>
      <tr>
        <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
        <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
      </tr>          <?php if ($this->_var['enabled_captcha']): ?>
      <tr>
        <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
        <td><input type="text" size="8" name="captcha" class="inputBg" />
        <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
      </tr>
      <?php endif; ?>
      
      <tr>
        <td> </td>
<td><input type="hidden" name="act" value="check_answer" />
          <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
          <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
    </td>
      </tr>
    </table>
    <br />
  </form>
</div>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="usBox">
<div class="usBox_2 clearfix">
<form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
  <br />
  <table width="80%" border="0" align="center">
    <tr>
      <td><?php echo $this->_var['lang']['new_password']; ?></td>
      <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
      <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="hidden" name="act" value="act_edit_password" />
        <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
        <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
        <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
      </td>
    </tr>
  </table>
  <br />
</form>
</div>
</div>

<?php endif; ?>

</div>
<div class="blank"></div>

<div class="block login_foot">
<p><?php echo $this->_var['copyright']; ?> <?php if ($this->_var['icp_number']): ?><?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><?php endif; ?></p>
</div>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
