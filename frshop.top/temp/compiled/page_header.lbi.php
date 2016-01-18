<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,jquery.json.js')); ?> 
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
//初始化主菜单
function sw_nav(obj,tag){
	var DisSub = document.getElementById("DisSub_"+obj);
	var HandleLI= document.getElementById("HandleLI_"+obj);
	if(tag==1){
		DisSub.style.display = "block";
		DisSub.className="cart_con current";
	}else{
		DisSub.style.display = "none";
		DisSub.className="cart_con";		
	}
}
</script>
<div id="Top">
    
    <div class="header_bg">
        <div class="block top_nav">
            <div class="top_bav_l">
                <?php if ($this->_var['navigator_list']['top']): ?>
                <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                       <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                        <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
                        <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
               <?php endif; ?>
            </div>
            <div class="top_nav_r cart_info" onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">              	
                <a href="flow.php" class="cart_a" id="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>
                <div id="DisSub_1" class="cart_con" style="display: none;">
                    <div class="spacer"></div>
                    <div class="bd">
                        
                        <?php 
$k = array (
  'name' => 'cart_info_product',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </div>
                </div>
            </div>
            <div class="top_nav_r">
            <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
            <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
            </div>
        </div>
  	</div>
        
	<div class="header clearfix">
      <div class="block header_con">
       	<a class="logo_new" href="./"><img src="themes/mazentop/images/logo.gif" /></a>            
       	<div class="ser_n">
            <form id="searchForm" class="searchBox clearfix" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
                <span class="ipt1"><input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="searchKey" /></span>
                <span class="ipt2"><input type="submit"  name="imageField" class="fm_hd_btm_shbx_bttn" value=""></span>
            </form>
            <div class="clear_f"></div>
            <?php if ($this->_var['searchkeywords']): ?>
            <div class="search_tig">
                <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank" class="track"><?php echo $this->_var['val']; ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>    
            <?php endif; ?>
		</div>
        <div class="menu">
          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
          <?php if ($this->_foreach['nav_middle_list']['iteration'] < 7): ?>
          <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> 
          <?php endif; ?>        
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
        <div style="clear:both"></div> 
	  </div>
    </div>
</div>



 
 

 


