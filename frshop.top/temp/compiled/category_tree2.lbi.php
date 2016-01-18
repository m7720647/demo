<script type="text/javascript">
//初始化主菜单
function sw_nav2(obj,tag)
{
	var DisSub2 = document.getElementById("DisSub2_"+obj);
	var HandleLI2= document.getElementById("HandleLI2_"+obj);
	if(tag==1)
	{
		DisSub2.style.display = "block";
		HandleLI2.className="current";
	}
	else
	{
		DisSub2.style.display = "none";
		HandleLI2.className="";
	}
}
</script>
    
<div id="category_tree_inner">
<dl>
	<div class="mainCategory">
    	<h2><a href="search.php">全部商品分类</a></h2>
    </div>
    <div id="addtree" style="display:none">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
    	<div class="dt" onMouseOver="sw_nav2(<?php echo $this->_foreach['no']['iteration']; ?>,1);" onMouseOut="sw_nav2(<?php echo $this->_foreach['no']['iteration']; ?>,0);" >
        	<div id="HandleLI2_<?php echo $this->_foreach['no']['iteration']; ?>"><a class="a <?php if (($this->_foreach['no']['iteration'] - 1) % 2 == 0): ?><?php else: ?>t<?php endif; ?>" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?><i></i></a></div>
            <dd id=DisSub2_<?php echo $this->_foreach['no']['iteration']; ?> class="bbox" style="display:none">
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no2']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no2']['iteration']++;
?>
                <?php if ($this->_foreach['no2']['iteration'] < 10): ?>
                <div class="cbox">
                	<a class="over_2" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
               	 	<div class="clearfix" <?php if (($this->_foreach['no2']['iteration'] == $this->_foreach['no2']['total'])): ?>style="border-bottom:none;"<?php endif; ?>>
                        <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['no3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no3']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['no3']['iteration']++;
?>
                        <?php if ($this->_foreach['no3']['iteration'] < 6): ?>
                        <a class="over_3" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                	</div>
                </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>  
        </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</dl>
</div>
<script type="text/javascript">
<!--
	$(window).load(function(){
		var col_width = 180;
		$('#category_tree_inner .dt').hover(function(){
			var len = $(this).find('.bbox .cbox').length;		
			var item_height =$(this).find('.cbox').height();
			var offset_top = $(this)[0].offsetTop;
			if(item_height!=undefined&&item_height!=null){
				if(item_height<offset_top){
					offset_top +=5;
				}
			}
			if ( len <= 3)	$(this).find('.bbox').css({width:'180px'});		
			else if ( len > 3 && len <= 6)	$(this).find('.bbox').css({width:'360px'});
			else $(this).find('.bbox').css({width:'540px'});
		},function(){});
	});
//-->
</script>
