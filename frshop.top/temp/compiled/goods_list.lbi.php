<div id="p_list" class="box">
  <h3>
  <form method="GET" class="sort" name="listform"> 
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=salesnum&order=DESC#goods_list" <?php if ($this->_var['pager']['sort'] == 'salesnum' && ( $this->_var['pager']['order'] == 'ASC' || $this->_var['pager']['order'] == 'DESC' )): ?>class="curr"<?php endif; ?>>销量</a> 
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'shop_price' && ( $this->_var['pager']['order'] == 'ASC' || $this->_var['pager']['order'] == 'DESC' )): ?>curr<?php if ($this->_var['pager']['order'] == 'ASC'): ?> up<?php else: ?> down<?php endif; ?><?php endif; ?> pbtn">价格<i></i></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=DESC#goods_list" <?php if ($this->_var['pager']['sort'] == 'goods_id' && ( $this->_var['pager']['order'] == 'ASC' || $this->_var['pager']['order'] == 'DESC' )): ?>class="curr"<?php endif; ?>>新品</a>

  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
  </h3>

    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li class="thumb"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
    <li class="goodsName">
    <div class="div_name">
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6">
        <?php if ($this->_var['goods']['goods_style_name']): ?>
        <?php echo $this->_var['goods']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?>
    <?php endif; ?>
     </div>
     <div>
     <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" ><img src="themes/mazentop/images/goumai2.gif"></a>
    <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);"><img src="themes/mazentop/images/shoucang2.jpg"></a> 
    
    </div>
    </li>

    <li class="action">
      <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market" style="padding-right:10px;"><?php echo $this->_var['goods']['market_price']; ?></font> <br/>
    <?php endif; ?>
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
    <font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font> 
    <?php else: ?>
    <font class="shop"><?php echo $this->_var['goods']['shop_price']; ?></font> 
    <?php endif; ?>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="clearfix goodsBox" style="border:none;">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
     <div class="goodsItem">
        <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="goodsimg" /></a><br />
        <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
        <?php if ($this->_var['goods']['promote_price'] != ""): ?>
        <font><?php echo $this->_var['goods']['promote_price']; ?></font> <font class="market_s"><?php echo $this->_var['goods']['shop_price']; ?></font>
	<?php if ($this->_var['goods']['half_price'] != ""): ?><br/><font class="halfPrice">折合单件<?php echo $this->_var['goods']['half_price']; ?></font><?php endif; ?>
        <?php else: ?>
        <font><?php echo $this->_var['goods']['shop_price']; ?></font><?php if ($this->_var['goods']['half_price'] != ""): ?> <font class="halfPrice">折合单件<?php echo $this->_var['goods']['half_price']; ?></font><?php endif; ?>
        <?php endif; ?>
        <?php if ($this->_var['show_marketprice']): ?>
        <font class="market_s"><?php echo $this->_var['goods']['market_price']; ?></font>
        <?php endif; ?>
        <div class="actions">
    	<a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="btn-like"><i></i><span>喜欢</span></a> 	
        <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-buy"><span>加入购物车</span><i></i></a>
        </div>		 
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
     <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li style="margin-right:15px;">
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')"
 class="f6"><?php echo $this->_var['lang']['compare']; ?></a>
    </li>
    <li class="goodsName">
    <div class="div_name">
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6 f5">
        <?php if ($this->_var['goods']['goods_style_name']): ?>
        <?php echo $this->_var['goods']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     
     <?php if ($this->_var['goods']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
    <?php endif; ?> 
    </div>
     <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="bnt_blue">加入收藏</a>
    <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="bnt_blue">立即购买</a>
    </li>
    <li>
   
    </li>
    <li class="action">
     <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>

</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>