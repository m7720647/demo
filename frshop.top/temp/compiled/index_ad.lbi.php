<SCRIPT src="themes/mazentop/js/banner.js" type=text/javascript></SCRIPT>
<style type="text/css"> 
#imgPlay {
	MARGIN: 0px auto; OVERFLOW: hidden; WIDTH: 1200px; ZOOM: 1; POSITION: relative; HEIGHT: 419px
}
#imgPlay .imgs LI {
	FLOAT: left; POSITION: relative
}
#imgPlay .imgs {
	WIDTH: 5760px
}
#imgPlay .num {
	display: inline;
    height: 19px;
    right:45%;
    position: absolute;
    top: 390px;
}
#imgPlay .num SPAN {
	DISPLAY: inline-block; BACKGROUND: url(themes/mazentop/images/imgPlayer.png) no-repeat -19px -83px; MARGIN: 0px 2px; OVERFLOW: hidden; WIDTH: 14px; CURSOR: pointer; LINE-HEIGHT: 0; HEIGHT: 13px
}
#imgPlay .num SPAN.on {
	BACKGROUND-POSITION: 1px -83px
}
</style>
<div class="container" id="imgPlay">
  <ul class="imgs" id="actor">
  	<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_01350800_1452180170');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_01350800_1452180170']):
        $this->_foreach['myflash']['iteration']++;
?>
    <li><a href="<?php echo $this->_var['flash_0_01350800_1452180170']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['flash_0_01350800_1452180170']['src']; ?>" /></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <div class="num" id="numInner"></DIV>
</div>