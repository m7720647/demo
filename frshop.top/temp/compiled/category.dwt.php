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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix Main">
<?php echo $this->fetch('library/category_tree2.lbi'); ?>
</div>

<div style="background-color:#f5f5f5">
  	
	<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
    <div class="filter-box">
      <div class="block">
        <?php if ($this->_var['brands']['1']): ?>
        <div class="screeBox" style="border-top:none;">
          <strong><?php echo $this->_var['lang']['brand']; ?> :</strong>
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <?php if ($this->_var['brand']['selected']): ?>
                <span><?php echo $this->_var['brand']['brand_name']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['price_grade']['1']): ?>
        <div class="screeBox">
        	<strong><?php echo $this->_var['lang']['price']; ?> :</strong>
        <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
            <?php if ($this->_var['grade']['selected']): ?>
            <span><?php echo $this->_var['grade']['price_range']; ?></span>
            <?php else: ?>
            <a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php endif; ?>
        <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_83307500_1452215317');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_83307500_1452215317']):
?>
        <div class="screeBox">
            <strong><?php echo htmlspecialchars($this->_var['filter_attr_0_83307500_1452215317']['filter_attr_name']); ?> :</strong>
            <?php $_from = $this->_var['filter_attr_0_83307500_1452215317']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
            <?php if ($this->_var['attr']['selected']): ?>
            <span><?php echo $this->_var['attr']['attr_value']; ?></span>
            <?php else: ?>
            <a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
    <?php endif; ?>
	
	
	
    <?php if ($this->_var['brand_name']): ?> 
    <div class="block m-brand">
        <img src="data/brandlogo/<?php echo $this->_var['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand_name']); ?>" />
        <div class="info">
            <p class="title">
                <span class="brandname"><?php echo htmlspecialchars($this->_var['brand_name']); ?></span>
            </p>
            <div class="detail"><p><?php echo $this->_var['brand_content']; ?></p></div>
        </div>
    </div> 
    <?php endif; ?>
    
    
    <div class="block clearfix ">	  
   
<?php echo $this->fetch('library/goods_list.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>


</div></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
