<?php defined('SYSTEM_INIT') or die('Invalid Usage'); ?>

<?php
		if($_action=="view_payment_option")
		{
			
			/*echo "<pre>";
			print_r($buyer_orders);
			echo "</pre>";
			exit;*/
?>


 <div class="payment-page" style="max-width: 800px; margin: 0 auto">
 
 <div style="min-height: 50px;margin-top: 10px;background: #efefef;padding-top: 10px;padding: 10px;margin: 10px 0;margin-bottom: 0;border: 1px solid #ccc;">
 	
 	<div class="reff total-pay">
        <p class="fl" style="font-size: 18px;font-weight: 600;text-transform: uppercase;">
      		Payable Amount: <strong><?=$buyer_orders['order_actual_paid']?></strong> 
      	</p>
      	<p class="fr" style="font-size: 18px;font-weight: 600;text-transform: uppercase;">
      		Order Invoice: <strong><?=$buyer_orders['order_invoice_number']?></strong> 
      	</p>
    </div>


 </div>
 
 <div class="cc-payment">
 
 	
			 <div class="payment-from" style="padding: 10px;border: 1px solid #ccc;">
			 
			 
			 
<?php 
	$my_order_referance=$buyer_orders['order_reference'];

?>
<table style="font-size: 12px;">
	 
	
	
	
	
	 <tr>
		<td style="width: 100px;vertical-align: text-bottom;position: relative;">
		<!--	<img src="http://www.bidorbuy.co.za/images/ui/bobe.sprites_payment_d9b21511470d470f360f54dff1c3cedd.png" style="position: absolute;clip: rect(0, 100px, 50px, 0);" />-->
			<img src="/images/bank_logo/absa.png" />
		</td>
		<td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
			<p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
			<p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
			<strong>Order Referance No : </strong> <?=$my_order_referance?>	<br/>
			<strong>Bank Name : </strong> xyz bank 	<br/>
			<strong>Account No: </strong> 1234567890 	<br/>
		</td>
	</tr>
	
	<tr>
		<td style="width: 100px;vertical-align: text-bottom;position: relative;">
		<!--	<img src="http://www.bidorbuy.co.za/images/ui/bobe.sprites_payment_d9b21511470d470f360f54dff1c3cedd.png" style="position: absolute;clip: rect(0, 100px, 50px, 0);" />-->
			<img src="/images/bank_logo/capitec.png" />
		</td>
		<td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
			<p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
			<p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
			<strong>Order Referance No : </strong> <?=$my_order_referance?>	<br/>
			<strong>Bank Name : </strong> xyz bank 	<br/>
			<strong>Account No: </strong> 1234567890 	<br/>
		</td>
	</tr>
	
 	<tr>
		<td style="width: 100px;vertical-align: text-bottom;position: relative;">
		<!--	<img src="http://www.bidorbuy.co.za/images/ui/bobe.sprites_payment_d9b21511470d470f360f54dff1c3cedd.png" style="position: absolute;clip: rect(0, 100px, 50px, 0);" />-->
			<img src="/images/bank_logo/fnb.png" />
		</td>
		<td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
			<p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
			<p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
			<strong>Order Referance No : </strong> <?=$my_order_referance?>	<br/>
			<strong>Bank Name : </strong> xyz bank 	<br/>
			<strong>Account No: </strong> 1234567890 	<br/>
		</td>
	</tr>
	
	<tr>
		<td style="width: 100px;vertical-align: text-bottom;position: relative;">
		<!--	<img src="http://www.bidorbuy.co.za/images/ui/bobe.sprites_payment_d9b21511470d470f360f54dff1c3cedd.png" style="position: absolute;clip: rect(0, 100px, 50px, 0);" />-->
			<img src="/images/bank_logo/investec.png" />
		</td>
		<td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
			<p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
			<p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
			<strong>Order Referance No : </strong> <?=$my_order_referance?>	<br/>
			<strong>Bank Name : </strong> xyz bank 	<br/>
			<strong>Account No: </strong> 1234567890 	<br/>
		</td>
	</tr>

	<tr>
		<td style="width: 100px;vertical-align: text-bottom;position: relative;">
		<!--	<img src="http://www.bidorbuy.co.za/images/ui/bobe.sprites_payment_d9b21511470d470f360f54dff1c3cedd.png" style="position: absolute;clip: rect(0, 100px, 50px, 0);" />-->
			<img src="/images/bank_logo/nedbank.png" />
		</td>
		<td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
			<p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
			<p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
			<strong>Order Referance No : </strong> <?=$my_order_referance?>	<br/>
			<strong>Bank Name : </strong> xyz bank 	<br/>
			<strong>Account No: </strong> 1234567890 	<br/>
		</td>
	</tr>

	<tr>
		<td style="width: 100px;vertical-align: text-bottom;position: relative;">
		<!--	<img src="http://www.bidorbuy.co.za/images/ui/bobe.sprites_payment_d9b21511470d470f360f54dff1c3cedd.png" style="position: absolute;clip: rect(0, 100px, 50px, 0);" />-->
			<img src="/images/bank_logo/rmb.png" />
		</td>
		<td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
			<p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
			<p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
			<strong>Order Referance No : </strong> <?=$my_order_referance?>	<br/>
			<strong>Bank Name : </strong> xyz bank 	<br/>
			<strong>Account No: </strong> 1234567890 	<br/>
		</td>
	</tr>
	
	 
</table>
                  
                        
                        
                        
                  		 
 
                  
              </div>
 </div>              
 </div>              
              
<?php			
		}else
		{
			
?>
<div class="body clearfix">
    <?php include CONF_THEME_PATH . $controller.'/_partial/account_subheader.php'; ?>
    <div class="fixed-container">
      <div class="dashboard">
        <?php include CONF_THEME_PATH . $controller.'/_partial/account_leftpanel.php'; ?>
        <div class="data-side">
          <?php include CONF_THEME_PATH . $controller.'/_partial/account_tabs.php'; ?>
          <div class="tabz-content">
              <h3><?php echo Utilities::getLabel('M_Your_Product_Purchases')?></h3>
              <div class="orders-list">
                <ul>
                  <li> <a href="<?php echo Utilities::generateUrl('account', 'orders')?>"><span class="txt-big"><?php echo Utilities::displayMoneyFormat($user_details["totUserOrderPurchases"])?> </span>
                    <p><?php echo Utilities::getLabel('M_Total_Purchases')?></p>
                    </a> </li>
                  <li> <a href="<?php echo Utilities::generateUrl('account', 'credits')?>"><span class="txt-big"><?php echo Utilities::displayMoneyFormat($user_details["totUserBalance"])?> </span>
                    <p><?php echo Utilities::getLabel('M_My_Total_Credits')?></p>
                    </a> </li>
                    <li><a href="<?php echo Utilities::generateUrl('account', 'orders')?>"><span class="txt-big"><?php echo $user_details["totUserOrders"]?> </span>
                    <p><?php echo Utilities::getLabel('M_Total_Orders')?></p>
                    </a> </li>
                    <li> <a href="<?php echo Utilities::generateUrl('account', 'messages')?>"><span class="txt-big"><?php echo $user_details["unreadMessages"]?></span>
                    <p><?php echo Utilities::getLabel('M_Unread_Messages')?></p>
                    </a> </li>
                </ul>
              </div>
              
              
              
              
              
              
              
              <div class="gap"></div>
              <div class="tbl-dashboard">
                <div class="tbl-left">
                  <div class="box-head">
                	<h3><?php echo sprintf(Utilities::getLabel('L_Latest_x_Orders'),5)?></h3>
                	<div class="btn-view"> <a href="<?php echo Utilities::generateUrl('account', 'orders')?>" class="view-more"><?php echo Utilities::getLabel('L_View_All')?> </a> </div>
              </div>
                  <?php if (count($buyer_orders)>0 && (!empty($buyer_orders))):?>	
                  <div class="latest-order">
                    <table class="tbl-normal">
                      <tbody>
                        <tr>
                          <th><?php echo Utilities::getLabel('L_Order_Particulars')?></th>
                          <th width="25%"><?php echo Utilities::getLabel('L_Amount')?>/<?php echo Utilities::getLabel('L_Status')?></th>
                          <th width="22%"><?php echo Utilities::getLabel('L_Action')?></th>
                        </tr>
                        <?php foreach ($buyer_orders as $key=>$val):?>
                        <tr>
                          <td>
                          <span class="cellcaption"><?php echo Utilities::getLabel('L_Order_Particulars')?></span><?php echo Utilities::formatDate($val["order_date_added"])?><br/>
                          <a href="<?php echo Utilities::generateUrl('account','view_order',array($val["order_id"],$val["opr_id"]))?>" class="order"><?php echo $val["opr_order_invoice_number"]?></a><br/>
                          <span class="cellcaption"><?php echo Utilities::getLabel('L_Ordered_Products')?></span><?php echo $val["opr_name"]?> (<?php echo Utilities::getLabel('L_QTY')?>:<?php echo $val["opr_qty"]?>)
                                      <?php if ($val["totOrders"]>1):?><br/>
                                      <span class="txtinline"><?php echo Utilities::getLabel('L_Part_combined_order')?> <a href="<?php echo Utilities::generateUrl('account','view_order',array($val["order_id"]))?>"><?php echo $val["order_invoice_number"]?></a></span>
									  <?php endif;?>
									  	
									  </td>
                          <td>
                          	<span class="cellcaption">
                          		<?php echo Utilities::getLabel('L_Amount')?>
                          			
                          	</span>
                          	
                          	<?php
                          	 if (!($val["totOrders"]>1)): 
										echo $currencyObj->format(($val["opr_net_charged"]-$val["order_discount_total"]),$val["order_currency_code"],$val["order_currency_value"]);
									else:
										echo '-';
							endif;?>
									 <br/><?php 
												echo $val["orders_status_name"];
							if($val["orders_status_name"]=='Payment Pending')
							{
						?>
							<a target="_blank" href="<?php echo Utilities::generateUrl('account', 'dashboard_buyer',array('view_payment_option',$val["order_id"]))?>">
								View Payment Option
							</a>
						<?php		
							} 
							?>
					</td>
                          <td>
                          <span class="cellcaption"><?php echo Utilities::getLabel('L_Action')?></span> 
                          
                          <a class="actions" title="<?php echo Utilities::getLabel('L_Cancel')?>" href="<?php echo Utilities::generateUrl('account', 'cancellation_request',array($val["opr_id"]))?>"><img src="<?php echo CONF_WEBROOT_URL?>images/retina/close.svg" alt=""/></a>
                          
                          <!--<a class="actions" title="<?php echo Utilities::getLabel('L_Send_a_message')?>" href="<?php echo Utilities::generateUrl('account', 'send_message',array("order",$val["opr_id"]))?>"><img alt="" src="<?php echo CONF_WEBROOT_URL?>images/retina/message.svg"></a>-->
                          <?php if (Settings::getSetting("CONF_ALLOW_REVIEWS")):?>
                          <a class="actions" title="<?php echo Utilities::getLabel('L_Feedback')?>" href="<?php echo Utilities::generateUrl('account','feedback',array($val["opr_id"]))?>"><img alt="" src="<?php echo CONF_WEBROOT_URL?>images/retina/list.svg"></a>
                          <?php endif;?>
						  	                          
                          <a class="actions" title="<?php echo Utilities::getLabel('L_Refund')?>" href="<?php echo Utilities::generateUrl('account', 'return_request',array($val["opr_id"]))?>"><img src="<?php echo CONF_WEBROOT_URL?>images/retina/dollar-arrow.svg" alt=""/></a>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                  <?php else:?>
                  <div class="space-lft-right">
                      <div class="alert alert-info">
                        <p><?php echo Utilities::getLabel('L_You_have_not_placed_any_order')?></p>
                      </div>
                  </div> 
                <?php endif;?>
                  
                  
                  
                  <div class="gap"></div>
                </div>
                <div class="tbl-right">
                  <h3><?php echo Utilities::getLabel('M_Latest_Messages')?></h3>
                  <div class="message-list">
	                  <ul>
                  	<?php if (count($messages)>0) {
						 foreach ($messages as $key=>$val):?> 	
                      <li>
                        <div class="pic">
                        <img class="img" alt="" src="<?php echo Utilities::generateUrl('image', 'user',array($val["message_sent_by_profile"],'SMALL'))?>">
                        </div>
                        <div class="text">
                          <h4><?php echo $val["message_sent_by_username"]?></h4>
                          <p><?php echo substringbywords($val["message_text"],100)?></p>
                          <a class="readmore" href="<?php echo Utilities::generateUrl('account', 'view_message',array($val["message_thread"],$val["message_id"]))?>"><img alt="" src="<?php echo CONF_WEBROOT_URL?>images/reammore.png"></a> </div>
                      </li>
                      <?php endforeach; 
					   } else {?>
		                <li><?php echo Utilities::getLabel('M_you_do_not_have_messages')?></li>
                     <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php
		}
?>
