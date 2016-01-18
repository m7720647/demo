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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page" style="min-width:1200px;">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="block clearfix Main">
<?php echo $this->fetch('library/index_ad.lbi'); ?>
</div>
<div class="blank"></div>
<div class="block">
  <div class="index_gg"><ul>
<li><a href="category-2-b4.html" target="_blank"><img src="data/afficheimg/1426736564388977453.jpg" width="290" height="170" border="0"></a></li>
<li><a href="category-5-b7.html" target="_blank"><img src="data/afficheimg/1427256038398204202.jpg" width="290" height="170" border="0"></a></li>
<li><a href="category-2-b3.html" target="_blank"><img src="data/afficheimg/1428481170611730725.jpg" width="290" height="170" border="0"></a></li>
<li><a href="category-4-b8.html" target="_blank"><img src="data/afficheimg/1428481413988072485.jpg" width="290" height="170" border="0"></a></li>
  </ul>
  <div class="blank"></div>
  </div>
  
  
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

</div>
<div style="background-color:#f5f5f5">
<div class="blank"></div> 
<div class="blank"></div>  
<div class="block">

<?php echo $this->fetch('library/recommend_best.lbi'); ?>

</div></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
$(function() {
window.__Object_toJSONString = Object.prototype.toJSONString;
delete Object.prototype.toJSONString;
});
</script>
</body>
</html>
