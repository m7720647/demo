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

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix Main">
<?php echo $this->fetch('library/category_tree2.lbi'); ?>
</div>

<div style="background-color:#f5f5f5">
  <div class="block clearfix ">
  <?php if (isset ( $this->_var['goods_list'] )): ?>
	<?php if ($this->_var['goods_list']): ?>	
	<div id="p_list" class="box">
		<div class="clearfix goodsBox" style="border:none; ">
		<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
		<?php if ($this->_var['goods']['goods_id']): ?>
			<div class="goodsItem">
				<a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="goodsimg" /></a><br />				
				<p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
				<?php if ($this->_var['show_marketprice']): ?>
				<font class="market_s"><?php echo $this->_var['goods']['market_price']; ?></font><br />
				<?php endif; ?>
				<?php if ($this->_var['goods']['promote_price'] != ""): ?>
				<font><?php echo $this->_var['goods']['promote_price']; ?></font><br />
				<?php else: ?>
				<font><?php echo $this->_var['goods']['shop_price']; ?></font><br />
				<?php endif; ?>	
			</div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	</div>
    <?php else: ?>
    <div style="padding:20px 0px; text-align:center" class="f5" ><?php echo $this->_var['lang']['no_search_result']; ?></div>
    <?php endif; ?>

    <div class="blank"></div>
    <?php echo $this->fetch('library/pages.lbi'); ?>
  <?php endif; ?>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>