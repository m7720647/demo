<?php if ($this->_var['hot_goods']): ?>
<div id="product_star">
    <div class="list_left">
        <h2>明星单品</h2>
    </div>
    <div class="list_right">
        <a href="javascript:;" class="prev_left"><img src="themes/mazentop/images/bg_03.jpg"></a>
        <a href="javascript:;" class="next_right"><img src="themes/mazentop/images/bg_02.jpg"></a>
    </div> 
    
    <div class="list_main">
         <div class="list_items" style="width: 2400px;">
            <div class="list_item">
                <ul>		
                	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['go'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['go']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['go']['iteration']++;
?>
                    <?php if ($this->_foreach['go']['iteration'] <= 5): ?>
                    <li class="item_<?php echo $this->_foreach['go']['iteration']; ?>">
                    	<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a>
                        <strong><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></strong>
                    </li>
                    <?php endif; ?>           
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="list_item">
                <ul>             				
                	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['go'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['go']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['go']['iteration']++;
?>
                    <?php if ($this->_foreach['go']['iteration'] > 5): ?>
                    <li class="item_<?php echo $this->_foreach['go']['iteration']; ?>">
                    	<a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a>
                        <strong><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></strong>
                    </li>
                    <?php endif; ?>          
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="blank"></div> 
<div class="blank"></div>       
    
<script type="text/javascript">
    var contaner = $(".list_main");
    var imgList = $(".list_items");
    var imgWidth = contaner.find(".list_item:eq(0)").outerWidth();
    var imgCount = contaner.find(".list_item").length;
    var listWidth = imgWidth * imgCount;
    
    $(".prev_left").click(function () {
        imgList.stop(true);
        if (imgList.offset().left < (contaner.offset().left)) {
            var remainWidth = imgList.offset().left + imgWidth - contaner.offset().left;
            if (remainWidth > 0) {
                imgList.animate({left: "+=" + remainWidth});
            } else {
                imgList.animate({left: "+=" + imgWidth});
            }
        }
    });
    $(".next_right").click(function () {
        imgList.stop(true);
        if ((imgList.offset().left + listWidth) > (contaner.offset().left + contaner.width())) {
            var remainWidth = (imgList.offset().left + listWidth) - (contaner.offset().left + contaner.width());
            if (Math.abs(remainWidth) < imgWidth) {
                imgList.animate({left: "-=" + remainWidth});
            } else {
                imgList.animate({left: "-=" + imgWidth});
            }

        }
    });
    
    imgList.css({width: listWidth});
</script>
<?php endif; ?>