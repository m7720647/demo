<?php if ($this->_var['best_goods']): ?>
<div id="recomend_product">
    <div class="list_left">
        <h2>为你推荐</h2>
    </div>
    <div class="list_right">
        <a href="javascript:;" class="prev_left2"><img src="themes/mazentop/images/bg_03.jpg"></a>
        <a href="javascript:;" class="next_right2"><img src="themes/mazentop/images/bg_02.jpg"></a>
    </div> 
    
    <div class="list_main2">
         <div class="list_items2" style="width: 2400px;">
            <div class="list_item2">
                <ul>		
                	<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_02784200_1452180170');$this->_foreach['go'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['go']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_02784200_1452180170']):
        $this->_foreach['go']['iteration']++;
?>
                    <?php if ($this->_foreach['go']['iteration'] <= 5): ?>
                    <li>
                    	<a href="<?php echo $this->_var['goods_0_02784200_1452180170']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_02784200_1452180170']['name']); ?>"><img src="<?php echo $this->_var['goods_0_02784200_1452180170']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_02784200_1452180170']['name']); ?>" class="goodsimg" /></a>
                        <strong><a href="<?php echo $this->_var['goods_0_02784200_1452180170']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_02784200_1452180170']['name']); ?>"><?php echo $this->_var['goods_0_02784200_1452180170']['short_style_name']; ?></a></strong>
                        <font>
                        <?php if ($this->_var['goods_0_02784200_1452180170']['promote_price'] != ""): ?>
                        <?php echo $this->_var['goods_0_02784200_1452180170']['promote_price']; ?>
                        <?php else: ?>
                        <?php echo $this->_var['goods_0_02784200_1452180170']['shop_price']; ?>
                        <?php endif; ?>
                        </font>
                    </li>
                    <?php endif; ?>           
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="list_item2">
                <ul>             				
                	<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_02817000_1452180170');$this->_foreach['go'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['go']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_02817000_1452180170']):
        $this->_foreach['go']['iteration']++;
?>
                    <?php if ($this->_foreach['go']['iteration'] > 5): ?>
                    <li>
                    	<a href="<?php echo $this->_var['goods_0_02817000_1452180170']['url']; ?>"><img src="<?php echo $this->_var['goods_0_02817000_1452180170']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_02817000_1452180170']['name']); ?>" class="goodsimg" /></a>
                        <strong><a href="<?php echo $this->_var['goods_0_02817000_1452180170']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_02817000_1452180170']['name']); ?>"><?php echo $this->_var['goods_0_02817000_1452180170']['short_style_name']; ?></a></strong>
                        <font>
                        <?php if ($this->_var['goods_0_02817000_1452180170']['promote_price'] != ""): ?>
                        <?php echo $this->_var['goods_0_02817000_1452180170']['promote_price']; ?>
                        <?php else: ?>
                        <?php echo $this->_var['goods_0_02817000_1452180170']['shop_price']; ?>
                        <?php endif; ?>
                        </font>
                    </li>
                    <?php endif; ?>          
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="blank"></div>        
    
<script type="text/javascript">
    var contaner2 = $(".list_main2");
    var imgList2 = $(".list_items2");
    var imgWidth2 = contaner2.find(".list_item2:eq(0)").outerWidth();
    var imgCount2 = contaner2.find(".list_item2").length;
    var listWidth2 = imgWidth2 * imgCount2;
    
    $(".prev_left2").click(function () {
        imgList2.stop(true);
        if (imgList2.offset().left < (contaner2.offset().left)) {
            var remainWidth = imgList2.offset().left + imgWidth - contaner2.offset().left;
            if (remainWidth > 0) {
                imgList2.animate({left: "+=" + remainWidth});
            } else {
                imgList2.animate({left: "+=" + imgWidth2});
            }
        }
    });
    $(".next_right2").click(function () {
        imgList2.stop(true);
        if ((imgList2.offset().left + listWidth) > (contaner2.offset().left + contaner.width())) {
            var remainWidth = (imgList2.offset().left + listWidth2) - (contaner2.offset().left + contaner2.width());
            if (Math.abs(remainWidth) < imgWidth2) {
                imgList2.animate({left: "-=" + remainWidth});
            } else {
                imgList2.animate({left: "-=" + imgWidth2});
            }

        }
    });
    
    imgList2.css({width: listWidth2});
</script>
<?php endif; ?>