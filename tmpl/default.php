<div class="latest_products">
<?php foreach($last_prod as $curr){ ?>
  <?php if ($curr->label_id == '6') continue; ?>
   <div class="block_item">
   <div class="b1c-good">
     <div class="my_block_item">
       <?php if  ($curr->product_price !=0) {?>
		<div class="item_name">
            <a href="<?php print $curr->product_link?>"><div class='b1c-name' ><?php print $curr->name?></div></a>
        </div>
		<?php }else{ ?>
		<?php if($curr->_label_name == 'Услуги' ){?>
		<div class="item_name">
		<a href="<?php print $curr->product_link?>"><div class='b1c-name' ><?php print $curr->name?></div></a>
		</div>
		<?php }else{ ?>
		<div class="item_name">
		<a href="<?php print $curr->product_link?>"><?php print $curr->name?></a>
		</div>
		<?php } ?>
	   <?php } ?>
       <?php if ($show_image) { ?>
       <div class="item_image">
           <a href="<?php print $curr->product_link?>"><img src = "<?php print $jshopConfig->image_product_live_path?>/<?php if ($curr->product_thumb_image) print $curr->product_thumb_image; else print $noimage?>" alt="" /></a>
       </div>
	   <div class="cls"></div>
       <?php } ?>
            <?php if ($curr->_display_price){?>
        <?php if ($curr->product_price !=0) {?>
       <div class="item_price">
           <?php print formatprice($curr->product_price);?>
       </div>
	          <div style="padding:10px 0;  text-align: center; clear:both;"><a class="button_buy" href="index.php?option=com_jshopping&controller=cart&task=add&category_id=<?php print $curr->category_id?>&product_id=<?php print $curr->product_id?>"><?php print _JSHOP_BUY?></a></div>
		<?php }else{?>
		<?php if ($curr->_label_name != 'Услуги' ) { ?>
		<?php if ($curr->_label_name != 'Товара нет в наличии' ) { ?>
		<div class='b1c-name' style="display:none;" >Запрос цены на <?php print $curr->name?></div>
		<div style="" abbr class="jcetooltip" title="Заполните форму заявки и наши менеджеры свяжутся с вами."><input class="b1c" type="button" style="float: none; border-radius: 0; color:#ffffff; text-shadow: none; margin:10px auto; height: 25px; background: #ff7800; font-size: 12px; border: none; cursor:pointer;" value="Запросить цену"></div>
		<?php }else{?>
		<div style="text-align:center; margin:10px 0;">
		<?php echo'Товара нет в наличии.'?>
		</div>
		<?php }?>
        <?php }else{?>
		<div style="" abbr class="jcetooltip" title="Заполните форму заявки и наши менеджеры свяжутся с вами."><input class="b1c" type="button" style="float: none; border-radius: 3px; color:#ffffff; text-shadow: none; margin:10px auto; height: 25px; background: #E9852C; font-size: 10px; border: none; cursor:pointer;" value="Оставить заявку"></div>
		<?php }?>
		<?php }?>
		<div class="cls"></div>
        <?php }?>
	 </div>  
	 </div>
   </div>     
<?php } ?>
<div class="cls"></div>
</div>
