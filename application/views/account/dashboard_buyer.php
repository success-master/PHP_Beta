<?php defined('SYSTEM_INIT') or die('Invalid Usage'); ?>

<?php
    if ($_action == "view_payment_option")
    {

        /* echo "<pre>";
          print_r($buyer_orders);
          echo "</pre>";
          exit; */


        //echo "<pre>";
        //print_r($bank);
        ?>


        <div class="payment-page" style="max-width: 800px; margin: 0 auto">

            <div style="min-height: 50px;margin-top: 10px;background: #efefef;padding-top: 10px;padding: 10px;margin: 10px 0;margin-bottom: 0;border: 1px solid #ccc;">

                <div class="reff total-pay">
                    <p class="fl" style="font-size: 18px;font-weight: 600;text-transform: uppercase;">
                        Payable Amount: <strong><?= $buyer_orders['order_actual_paid'] ?></strong> 
                    </p>
                    <p class="fr" style="font-size: 18px;font-weight: 600;text-transform: uppercase;">
                        Order Invoice: <strong><?= $buyer_orders['order_invoice_number'] ?></strong> 
                    </p>
                </div>


            </div>

            <div class="cc-payment">


                <div class="payment-from" style="padding: 10px;border: 1px solid #ccc;">



                    <?php
                    $my_order_referance = $buyer_orders['order_reference'];
                    ?>

                    <style>
                        .btn-radio {
                            width: 100%;
                        }
                        .img-radio {
                            opacity: 0.5;
                            margin: 5px;
                            display: inline-block;
                        }

                        .space-20 {
                            margin-top: 20px;
                        }
                    </style>
                    <script>
                        $(function () {
                            $('.img-radio').click(function (e) {
                                $('.img-radio').css('opacity', '0.5');
                                $(this).css('opacity', '1');
                                //	alert($(this).data('id'));
                                $('#bankDetails').show();
                                $('#bank_name').html($(this).data('bank_name'));
                                $('#bank_account_no').html($(this).data('bank_account_no'));
                                $('#bank_iban').html($(this).data('bank_iban'));
                                $('#bank_swift').html($(this).data('bank_swift'));
                                $('#bank_branch').html($(this).data('bank_branch'));
                                $('#bank_description').html($(this).data('bank_description'));

                            });
                        });


                    </script>

                    <div class="row" style="text-align: center">

                        <h3 style="padding:5px 10px ">Select Bank </h3>
                        <?php
                        $mydb = Syspage::getdb();
                        $banksdetails = $mydb->query("select * from tbl_banks ");
                        $bank = $mydb->fetch_all($banksdetails);
                        foreach ($bank as $det)
                        {
                            ?>
                            <img  src="<?= $det['bank_logo'] ?>" class="img-responsive img-radio"  data-id="<?= $det['bank_id'] ?>" data-bank_name="<?= $det['bank_name'] ?>" data-bank_account_no="<?= $det['bank_account_no'] ?>"  data-bank_iban="<?= $det['bank_iban'] ?>" data-bank_swift="<?= $det['bank_swift'] ?>" data-bank_branch="<?= $det['bank_branch'] ?>"  data-bank_description="<?= $det['bank_description'] ?>" />
                            <?php
                        }
                        ?>
                    </div>


                    <style>
                        .bankDetails  
                        {  
                            max-width: 350px;
                            margin: 20px auto;
                            border: 1px solid #FF883E;
                            padding-bottom: 20px;

                        }

                        .bankDetails p{
                            padding: 10px;
                        }   

                        .bankDetails h3{
                            text-transform: uppercase;    padding: 5px; text-align:center; background: #ff883e;color: #fff
                        } 
                    </style>

                    <div class="bankDetails" id="bankDetails" style="display: none">
                        <h3 style="" id="bank_name">Bank Name</h3>
                        <p><strong>Order Referance  No : </strong> <span><?= $my_order_referance ?></span></p>
                        <p><strong>Account No : </strong> <span id="bank_account_no"></span></p>
                        <p><strong>Iban No : </strong> <span id="bank_iban"></span></p>
                        <p><strong>Swift No : </strong> <span id="bank_swift"></span></p>
                        <p><strong>Branch : </strong> <span id="bank_branch"></span></p>
                        <p><strong>Description : </strong> <span id="bank_description"></span></p>
                    </div>


                    <!--
                    <table style="font-size: 12px;">
                             
                             
                            
                             <tr>
                                    <td style="width: 100px;vertical-align: text-bottom;position: relative;">
                                            <img src="/images/bank_logo/absa.png" />
                                    </td>
                                    <td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
                                            <p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
                                            <p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
                                            <strong>Order Referance No : </strong> <?= $my_order_referance ?>	<br/>
                                            <strong>Bank Name : </strong> xyz bank 	<br/>
                                            <strong>Account No: </strong> 1234567890 	<br/>
                                    </td>
                            </tr>
                            
                            <tr>
                                    <td style="width: 100px;vertical-align: text-bottom;position: relative;">
                     
                                            <img src="/images/bank_logo/capitec.png" />
                                    </td>
                                    <td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
                                            <p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
                                            <p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
                                            <strong>Order Referance No : </strong> <?= $my_order_referance ?>	<br/>
                                            <strong>Bank Name : </strong> xyz bank 	<br/>
                                            <strong>Account No: </strong> 1234567890 	<br/>
                                    </td>
                            </tr>
                            
                            <tr>
                                    <td style="width: 100px;vertical-align: text-bottom;position: relative;">
                     
                                            <img src="/images/bank_logo/fnb.png" />
                                    </td>
                                    <td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
                                            <p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
                                            <p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
                                            <strong>Order Referance No : </strong> <?= $my_order_referance ?>	<br/>
                                            <strong>Bank Name : </strong> xyz bank 	<br/>
                                            <strong>Account No: </strong> 1234567890 	<br/>
                                    </td>
                            </tr>
                            
                            <tr>
                                    <td style="width: 100px;vertical-align: text-bottom;position: relative;">
                     
                                            <img src="/images/bank_logo/investec.png" />
                                    </td>
                                    <td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
                                            <p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
                                            <p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
                                            <strong>Order Referance No : </strong> <?= $my_order_referance ?>	<br/>
                                            <strong>Bank Name : </strong> xyz bank 	<br/>
                                            <strong>Account No: </strong> 1234567890 	<br/>
                                    </td>
                            </tr>
                    
                            <tr>
                                    <td style="width: 100px;vertical-align: text-bottom;position: relative;">
                     
                                            <img src="/images/bank_logo/nedbank.png" />
                                    </td>
                                    <td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
                                            <p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
                                            <p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
                                            <strong>Order Referance No : </strong> <?= $my_order_referance ?>	<br/>
                                            <strong>Bank Name : </strong> xyz bank 	<br/>
                                            <strong>Account No: </strong> 1234567890 	<br/>
                                    </td>
                            </tr>
                    
                            <tr>
                                    <td style="width: 100px;vertical-align: text-bottom;position: relative;">
                     
                                            <img src="/images/bank_logo/rmb.png" />
                                    </td>
                                    <td style="position: relative;padding-left: 20px;padding-bottom: 20px;">
                                            <p>Pay using direct bank transfer (EFT) from any South African bank. Sell-SA will confirm the payment and notify the seller. This option will display our banking details.</p>
                                            <p><span style="color: #ff0000;font-weight: 600">Please Note :</span> This option will display the banking details you need to make an EFT payment.</p>
                                            <strong>Order Referance No : </strong> <?= $my_order_referance ?>	<br/>
                                            <strong>Bank Name : </strong> xyz bank 	<br/>
                                            <strong>Account No: </strong> 1234567890 	<br/>
                                    </td>
                            </tr>
                            
                             
                    </table>-->







                </div>
            </div>              
        </div>              

        <?php
    }
    elseif ($_action == 'pay_now')
    {
        ?>
        <div class="payment-page" style="max-width: 800px; margin: 0 auto">
            <div style="min-height: 50px;margin-top: 10px;background: #efefef;padding-top: 10px;padding: 10px;margin: 10px 0;margin-bottom: 0;border: 1px solid #ccc;">

                <div class="reff total-pay">
                    <p class="fl" style="font-size: 18px;font-weight: 600;text-transform: uppercase;">
                        Order Amount: <strong><?= $buyer_orders['order_net_charged'] ?></strong> 
                    </p>
                    <p class="fr" style="font-size: 18px;font-weight: 600;text-transform: uppercase;">
                        Order Invoice: <strong><?= $buyer_orders['order_invoice_number'] ?></strong> 
                    </p>
                </div>


            </div>

            <div class="cc-payment">
                <div class="payment-from" style="padding: 10px;border: 1px solid #ccc;">
                    <?php
                    $my_order_referance = $buyer_orders['order_reference'];
                    ?>

                    <style>
                        .btn-radio {
                            width: 100%;
                        }
                        .img-radio {
                            opacity: 0.5;
                            margin: 5px;
                            display: inline-block;
                        }

                        .space-20 {
                            margin-top: 20px;
                        }
                    </style>

                    <div class="row" style="text-align: center">
                        <h3 style="padding:5px 10px ">Select Payment </h3>
                        <br/>
                    </div>



                    <style>
                        #vertical_tab_nav{
                            width: 700px;
                            margin:0 auto;
                            display: block;
                            overflow:hidden;
                        }
                        #vertical_tab_nav ul{
                            display: block;
                            float: left;
                            margin: 0px;
                            padding: 0px;
                            list-style: none;
                            overflow: hidden;
                            width: 300px;
                            /*border-radius: 15px 0 0 15px;*/
                        }
                        #vertical_tab_nav li{
                            margin-bottom: 1px;
                            text-align: left;
                            padding: 0px;
                            border:1px solid #e8e9ea;
                            /*border-radius:2px;*/
                            color:#777777;
                        }
                        #vertical_tab_nav li:hover {
                            /*margin-bottom: 1px;*/
                            text-align: left;
                            /*padding: 2px;*/
                        }
                        #vertical_tab_nav li:last-child{
                            margin-bottom: 0px;
                            /*border-bottom: 0px;*/
                        }
                        #vertical_tab_nav li a{
                            display: block;
                            font-size: 14px;
                            color: #777777;
                            text-decoration: none;
                            font-weight:600;
                            padding: 4%;
                            background: #ffffff ;
                            background: -webkit-linear-gradient(top,#ffffff,#ffffff);
                            background: -moz-linear-gradient(top,#ffffff,#ffffff);
                        }
                        #vertical_tab_nav li a.selected{
                            background: #ffffff;
                            color: #FF883E;
                            border:1px solid #FF883E;

                        }
                        #vertical_tab_nav div{
                            display: block;
                            float: left;
                            background: #efefef;
                            width:350px;
                            min-height: 260px;
                            padding: 10px 3% 3% 3%;
                            /* border-radius: 0 10px 10px 0;*/
                        }
                        #vertical_tab_nav div article{
                            display: none;
                            margin: 0px;
                            color: #000;
                            font-size:14px;

                        }
                        #vertical_tab_nav div article p{
                            margin: 0px 0px 20px 0px;
                        }                        
                    </style>

                    <div id="vertical_tab_nav">
                        <ul>
                            <?php
                            $tab_pos = FALSE;
                            $_mydb = Syspage::getdb();

                            foreach ($payment_methods as $sn => $val)
                            {
                                if ($val['pmethod_id'] != Settings::getSetting("CONF_COD_PAYMENT_METHOD"))
                                {
                                    $custom_method_ids = array(
                                        '9999', '9997'
                                    );

                                    if (in_array($val['pmethod_id'], $custom_method_ids))
                                    {
                                        $rs = $_mydb->query("SELECT * FROM tbl_buyer_payment_options where tbpo_shop_id = '" . $shop_id . "' AND tbpo_method_name='" . $val['pmethod_code'] . "' AND tbpo_status = '1' limit 1");
                                        $row = $_mydb->fetch_all($rs);
                                        if (count($row) > 0)
                                        {
                                            ?>
                                            <li class="selected">
                                                <a href="#">
                                                    <?php echo $val['pmethod_name']; ?>
                                                    <img  src="<?php echo Utilities::generateUrl('image', 'payment_icon', array($val["pmethod_icon"])); ?>" class="img-responsive img-radio"  data-id="<?php echo $val['pmethod_id'] ?>" data-bank_name="<?php echo $det['pmethod_name'] ?>"  data-bank_description="<?php echo $det['pmethod_details'] ?>" />
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <li class="selected">
                                            <a href="#">
                                                <?php echo $val['pmethod_name']; ?>
                                                <img  src="<?php echo Utilities::generateUrl('image', 'payment_icon', array($val["pmethod_icon"])); ?>" class="img-responsive img-radio"  data-id="<?php echo $val['pmethod_id'] ?>" data-bank_name="<?php echo $det['pmethod_name'] ?>"  data-bank_description="<?php echo $det['pmethod_details'] ?>" />
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                            }
                            ?>

                        </ul>
                        <div>
                            <?php
                            foreach ($payment_methods as $sn => $val)
                            {
                                if ($val['pmethod_id'] != Settings::getSetting("CONF_COD_PAYMENT_METHOD"))
                                {
                                    $custom_method_ids = array(
                                        '9999', '9997'
                                    );

                                    if (in_array($val['pmethod_id'], $custom_method_ids))
                                    {
                                        $rs = $_mydb->query("SELECT * FROM tbl_buyer_payment_options where tbpo_shop_id = '" . $shop_id . "' AND tbpo_method_name='" . $val['pmethod_code'] . "' AND tbpo_status = '1' limit 1");
                                        $row = $_mydb->fetch_all($rs);
                                        if (count($row) > 0)
                                        {
                                            ?>
                                            <article>
                                                <h3 style="font-size:18px;"><?php echo $val['pmethod_name']; ?></h3>
                                                <hr />
                                                <p><?php echo $val['pmethod_details']; ?></p>
                                                <a href="<?php echo Utilities::generateUrl(strtolower(str_replace("_", "", $val["pmethod_code"])) . "_pay", 'pay_now', array($buyer_orders['order_id'])) ?>">CONFIRM PAYMENT</a>
                                            </article>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <article>
                                            <h3 style="font-size:18px;"><?php echo $val['pmethod_name']; ?></h3>
                                            <hr />
                                            <p><?php echo $val['pmethod_details']; ?></p>                                           
                                            <a href="<?php echo Utilities::generateUrl(strtolower(str_replace("_", "", $val["pmethod_code"])) . "_pay", 'pay_now', array($buyer_orders['order_id'])) ?>">CONFIRM PAYMENT</a>
                                        </article>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {


        //----------Select the first tab and div by default

                            $('#vertical_tab_nav > ul > li > a').eq(0).addClass("selected");
                            $('#vertical_tab_nav > div > article').eq(0).css('display', 'block');


        //---------- This assigns an onclick event to each tab link("a" tag) and passes a parameter to the showHideTab() function

                            $('#vertical_tab_nav > ul').click(function (e) {

                                if ($(e.target).is("a")) {

                                    /*Handle Tab Nav*/
                                    $('#vertical_tab_nav > ul > li > a').removeClass("selected");
                                    $(e.target).addClass("selected");

                                    /*Handles Tab Content*/
                                    var clicked_index = $("a", this).index(e.target);
                                    $('#vertical_tab_nav > div > article').css('display', 'none');
                                    $('#vertical_tab_nav > div > article').eq(clicked_index).fadeIn();

                                }

                                $(this).blur();
                                return false;

                            });


                        });//end ready	
                    </script>

                </div>
            </div>
        </div>
        <?php
    }
    else
    {
        ?>
        <div class="body clearfix">
            <?php include CONF_THEME_PATH . $controller . '/_partial/account_subheader.php'; ?>
            <div class="fixed-container">
                <div class="dashboard">
                    <?php include CONF_THEME_PATH . $controller . '/_partial/account_leftpanel.php'; ?>
                    <div class="data-side">
                        <?php include CONF_THEME_PATH . $controller . '/_partial/account_tabs.php'; ?>
                        <div class="tabz-content">
                            <h3><?php echo Utilities::getLabel('M_Your_Product_Purchases') ?></h3>
                            <div class="orders-list">
                                <ul>
                                    <li> <a href="<?php echo Utilities::generateUrl('account', 'orders') ?>"><span class="txt-big"><?php echo Utilities::displayMoneyFormat($user_details["totUserOrderPurchases"]) ?> </span>
                                            <p><?php echo Utilities::getLabel('M_Total_Purchases') ?></p>
                                        </a> </li>
                                    <li> <a href="<?php echo Utilities::generateUrl('account', 'credits') ?>"><span class="txt-big"><?php echo Utilities::displayMoneyFormat($user_details["totUserBalance"]) ?> </span>
                                            <p><?php echo Utilities::getLabel('M_My_Total_Credits') ?></p>
                                        </a> </li>
                                    <li><a href="<?php echo Utilities::generateUrl('account', 'orders') ?>"><span class="txt-big"><?php echo $user_details["totUserOrders"] ?> </span>
                                            <p><?php echo Utilities::getLabel('M_Total_Orders') ?></p>
                                        </a> </li>
                                    <li> <a href="<?php echo Utilities::generateUrl('account', 'messages') ?>"><span class="txt-big"><?php echo $user_details["unreadMessages"] ?></span>
                                            <p><?php echo Utilities::getLabel('M_Unread_Messages') ?></p>
                                        </a> </li>
                                </ul>
                            </div>







                            <div class="gap"></div>
                            <div class="tbl-dashboard">
                                <div class="tbl-left">
                                    <div class="box-head">
                                        <h3><?php echo sprintf(Utilities::getLabel('L_Latest_x_Orders'), 5) ?></h3>
                                        <div class="btn-view"> <a href="<?php echo Utilities::generateUrl('account', 'orders') ?>" class="view-more"><?php echo Utilities::getLabel('L_View_All') ?> </a> </div>
                                    </div>
                                    <?php if (count($buyer_orders) > 0 && (!empty($buyer_orders))): ?>	
                                        <div class="latest-order">
                                            <table class="tbl-normal">
                                                <tbody>
                                                    <tr>
                                                        <th><?php echo Utilities::getLabel('L_Order_Particulars') ?></th>
                                                        <th width="30%"><?php echo Utilities::getLabel('L_Amount') ?>/<?php echo Utilities::getLabel('L_Status') ?></th>
                                                        <th width="22%"><?php echo Utilities::getLabel('L_Action') ?></th>
                                                    </tr>
                                                    <?php foreach ($buyer_orders as $key => $val): ?>
                                                        <tr>
                                                            <td>
                                                                <span class="cellcaption"><?php echo Utilities::getLabel('L_Order_Particulars') ?></span><?php echo Utilities::formatDate($val["order_date_added"]) ?><br/>
                                                                <a href="<?php echo Utilities::generateUrl('account', 'view_order', array($val["order_id"], $val["opr_id"])) ?>" class="order"><?php echo $val["opr_order_invoice_number"] ?></a><br/>
                                                                <span class="cellcaption"><?php echo Utilities::getLabel('L_Ordered_Products') ?></span><?php echo $val["opr_name"] ?> (<?php echo Utilities::getLabel('L_QTY') ?>:<?php echo $val["opr_qty"] ?>)
                                                                <?php if ($val["totOrders"] > 1): ?><br/>
                                                                    <span class="txtinline"><?php echo Utilities::getLabel('L_Part_combined_order') ?> <a href="<?php echo Utilities::generateUrl('account', 'view_order', array($val["order_id"])) ?>"><?php echo $val["order_invoice_number"] ?></a></span>
                                                                <?php endif; ?>

                                                            </td>
                                                            <td>
                                                                <span class="cellcaption">
                                                                    <?php echo Utilities::getLabel('L_Amount') ?>

                                                                </span>

                                                                <?php
                                                                if (!($val["totOrders"] > 1))
                                                                {
                                                                    echo $currencyObj->format(($val["opr_net_charged"] - $val["order_discount_total"]), $val["order_currency_code"], $val["order_currency_value"]);
                                                                }
                                                                else
                                                                {
                                                                    echo '-';
                                                                }
                                                                ?>
                                                                <br/><?php
                                                                echo $val["orders_status_name"];
                                                                if ($val["orders_status_name"] == 'Payment Pending')
                                                                {
                                                                    ?>
                                                                                                                    <!--                                                                    <a target="_blank" href="<?php echo Utilities::generateUrl('account', 'dashboard_buyer', array('view_payment_option', $val["order_id"])) ?>">
                                                                                                                                                                                            View Payment Option
                                                                                                                                                                                        </a> 
                                                                    -->
                                                                    <br/>
                                                                    <?php
                                                                    $Date = $val["order_date_added"];
                                                                    $expireDate = date('M d, Y H:i:s', strtotime($Date . ' + ' . AUTO_CANCELLED_DAYS . 'days'));
                                                                    $expireDate;
                                                                    ?>
                                                                    <a target="_blank" href="<?php echo Utilities::generateUrl('account', 'dashboard_buyer', array('pay_now', $val["order_id"], $val["opr_id"])) ?>">Pay Now</a> 
                                                                    <a href="#" class="timecounter" style="display:table-row-group;color:red"><?php echo $expireDate; ?></a>
                                                                    <img src="<?php echo CONF_WEBROOT_URL . 'images/icons8-about-20.png' ?>" width="24px;" style="display:inline-block;" title="Your order will be cancelled once the displayed time is up."/>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <span class="cellcaption"><?php echo Utilities::getLabel('L_Action') ?></span> 

                                                                <a class="actions" title="<?php echo Utilities::getLabel('L_Cancel') ?>" href="<?php echo Utilities::generateUrl('account', 'cancellation_request', array($val["opr_id"])) ?>"><img src="<?php echo CONF_WEBROOT_URL ?>images/retina/close.svg" alt=""/></a>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--<a class="actions" title="<?php echo Utilities::getLabel('L_Send_a_message') ?>" href="<?php echo Utilities::generateUrl('account', 'send_message', array("order", $val["opr_id"])) ?>"><img alt="" src="<?php echo CONF_WEBROOT_URL ?>images/retina/message.svg"></a>-->
                                                                <?php if (Settings::getSetting("CONF_ALLOW_REVIEWS")): ?>
                                                                    <a class="actions" title="<?php echo Utilities::getLabel('L_Feedback') ?>" href="<?php echo Utilities::generateUrl('account', 'feedback', array($val["opr_id"])) ?>"><img alt="" src="<?php echo CONF_WEBROOT_URL ?>images/retina/list.svg"></a>
                                                                <?php endif; ?>

                                                                <a class="actions" title="<?php echo Utilities::getLabel('L_Refund') ?>" href="<?php echo Utilities::generateUrl('account', 'return_request', array($val["opr_id"])) ?>"><img src="<?php echo CONF_WEBROOT_URL ?>images/retina/dollar-arrow.svg" alt=""/></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php else: ?>
                                        <div class="space-lft-right">
                                            <div class="alert alert-info">
                                                <p><?php echo Utilities::getLabel('L_You_have_not_placed_any_order') ?></p>
                                            </div>
                                        </div> 
                                    <?php endif; ?>



                                    <div class="gap"></div>
                                </div>
                                <div class="tbl-right">
                                    <h3><?php echo Utilities::getLabel('M_Latest_Messages') ?></h3>
                                    <div class="message-list">
                                        <ul>
                                            <?php
                                            if (count($messages) > 0)
                                            {
                                                foreach ($messages as $key => $val):
                                                    ?> 	
                                                    <li>
                                                        <div class="pic">
                                                            <img class="img" alt="" src="<?php echo Utilities::generateUrl('image', 'user', array($val["message_sent_by_profile"], 'SMALL')) ?>">
                                                        </div>
                                                        <div class="text">
                                                            <h4><?php echo $val["message_sent_by_username"] ?></h4>
                                                            <p><?php echo substringbywords($val["message_text"], 100) ?></p>
                                                            <a class="readmore" href="<?php echo Utilities::generateUrl('account', 'view_message', array($val["message_thread"], $val["message_id"])) ?>"><img alt="" src="<?php echo CONF_WEBROOT_URL ?>images/reammore.png"></a> </div>
                                                    </li>
                                                    <?php
                                                endforeach;
                                            } else
                                            {
                                                ?>
                                                <li><?php echo Utilities::getLabel('M_you_do_not_have_messages') ?></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                //var currentDate = '<?php echo date('M d, Y H:i:s'); ?>';

                jQuery('.timecounter').each(function () {
                    var currentElement = $(this);
                    var text = currentElement.text();
                    console.log(text);
                    // Set the date we're counting down to
                    var countDownDate = new Date(text).getTime();
        // Update the count down every 1 second
                    var x = setInterval(function () {
        // Get todays date and time
                        //var now = new Date().getTime();
                        var timestring = new Date().toLocaleString("en-US", {timeZone: "Africa/Johannesburg"});
                        var now = new Date(timestring).getTime();
        // Find the distance between now an the count down date
                        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Display the result in the element with id="demo"
                        currentElement.text(days + "d " + hours + "h "
                                + minutes + "m " + seconds + "s ");
        // If the count down is finished, write some text 
                        if (distance < 0) {
                            clearInterval(x);
                            currentElement.text("Cancelled");
                        }
                    }, 1000);
                });
            });
        </script>
        <?php
    }
?>
