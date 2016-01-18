<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
  <div class="ect-bg">
    <header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg"> <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> <span><?php echo $this->_var['title']; ?></span> <a href="javascript:;"  onClick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune icon-write"></a></header>
    <nav class="ect-nav ect-nav-list" style="display:none;"> <?php echo $this->fetch('library/page_menu.lbi'); ?> </nav>
  </div>
  <div class="goods-info ect-padding-tb">
  	
      <section class="user-tab ect-border-bottom0">
        <div id="is-nav-tabs" style="height:3.15em; display:none;"></div>
        
        <ul class="nav nav-tabs text-center">
          <li class="col-xs-6 active"><a href="#one" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['goods_brief']; ?></a></li>
          <li class="col-xs-6"><a href="#two" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['goods_attr']; ?></a></li>
        </ul>
        
        <div class="tab-content">
          <div class="tab-pane tab-info active" id="one"> <?php echo $this->_var['goods']['goods_desc']; ?></div>
          <div class="tab-pane tab-att" id="two">
            <table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#dddddd">
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
              <tr>
                <td bgcolor="#FFFFFF" colspan="2"><br/></td>
              </tr>
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <tr>
                <td height="30" bgcolor="#FFFFFF" align="left" width="50%"><?php echo htmlspecialchars($this->_var['property']['name']); ?></td>
                <td bgcolor="#FFFFFF" align="left" width="50%"><?php echo $this->_var['property']['value']; ?></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
          </div>
        </div>
      </section>
  </div>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>  
</body></html>