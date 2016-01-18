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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div id="ur_here">
<div class="block">
<a href=".">首页</a> <code>&gt;</code> 关于我们 <code>&gt;</code> <?php echo $this->_var['article']['title']; ?>
</div>
</div>

<div class="block clearfix Main">
<?php echo $this->fetch('library/category_tree2.lbi'); ?>
</div>

<div style="background-color:#f5f5f5">
  <div class="block">
   <div class="box_1">
    <?php if ($this->_var['navigator_list']['bottom']): ?>
    <div class="nav"><ul>
    <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
    	<li><a href="<?php echo $this->_var['nav']['url']; ?>"<?php if ($this->_var['nav']['name'] == $this->_var['article']['title']): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
        <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?><span>|</span><?php endif; ?></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </ul></div>
    <?php endif; ?>
    <div class="boxContent">
	<br/><br/>
      <?php if ($this->_var['article']['content']): ?>
     <?php echo $this->_var['article']['content']; ?>
     <?php endif; ?>
    </div>
   </div>
  </div>
  <div class="blank" style="height:50px;"></div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
