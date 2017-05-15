@extends('layouts/main')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form action="#" class="checkout" method="post" name="checkout">
                            <div id="customer_details" class="col2-set">
                                <div class="col-md-12">
                                    <div class="woocommerce-shipping-fields">
                                        <h3 id="ship-to-different-address">
                                            <label class="checkbox" for="ship-to-different-address-checkbox">Check Out</label>
                                        </h3>
                                        <div class="shipping_address" style="display: block;">
                                            <div id="shipping_first_name_field" class="form-row form-row-first validate-required col-md-6">
                                                <label class="" for="shipping_first_name">First Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
                                            </div>

                                            <div id="shipping_last_name_field" class="form-row form-row-last validate-required col-md-6">
                                                <label class="" for="shipping_last_name">Last Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="shipping_last_name" name="shipping_last_name" class="input-text ">
                                            </div>
                                            <div class="clear"></div>

                                            <div id="shipping_company_field" class="form-row form-row-wide validate-required col-md-6">
                                                <label class="" for="shipping_company">Email <abbr title="required" class="required">*</abbr></label>
                                                <input type="text" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                            </div>

                                            <div id="shipping_company_field" class="form-row form-row-wide validate-required col-md-6">
                                                <label class="" for="shipping_company">Phone <abbr title="required" class="required">*</abbr></label>
                                                <input type="text" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                            </div>

                                            <div id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required col-md-12">
                                                <label class="" for="shipping_address_1">Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <textarea cols="5" rows="2" id="shipping_address_1" name="shipping_address_1" class="input-text "></textarea>
                                            </div>

                                            <div id="shipping_city_field" class="form-row form-row-wide address-field validate-required col-md-6">
                                                <label class="" for="shipping_city">แขวง <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Town / City" id="shipping_city" name="shipping_city" class="input-text ">
                                            </div>

                                            <div id="shipping_state_field" class="form-row form-row-first address-field validate-state col-md-6">
                                                <label class="" for="shipping_state">ตำบล <abbr title="required" class="required">*</abbr></label>
                                                <input type="text" id="shipping_state" name="shipping_state" placeholder="State / County" value="" class="input-text ">
                                            </div>

                                             <div id="shipping_state_field" class="form-row form-row-first address-field validate-state col-md-6">
                                                <label class="" for="shipping_state">จังหวัด <abbr title="required" class="required">*</abbr></label>
                                                <input type="text" id="shipping_state" name="shipping_state" placeholder="State / County" value="" class="input-text ">
                                            </div>

                                            <div id="shipping_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode col-md-6">
                                                <label class="" for="shipping_postcode">Postcode <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Postcode / Zip" id="shipping_postcode" name="shipping_postcode" class="input-text ">
                                            </div>

                                            <div class="clear"></div>


                                        </div>

                                        <div id="order_comments_field" class="form-row notes col-md-12">
                                            <label class="" for="order_comments">Order Notes</label>
                                            <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                        </div>


                                    </div>

                                </div>

                            </div>

                            <h3 id="order_review_heading">Your order</h3>

                            <div id="order_review" style="position: relative;">
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Ship Your Idea <strong class="product-quantity">× 1</strong> </td>
                                                <td class="product-total">
                                                    <span class="amount">£15.00</span> </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>

                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal</th>
                                                    <td><span class="amount">£15.00</span>
                                                    </td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Shipping and Handling</th>
                                                    <td>

                                                        Free Shipping
                                                        <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                    </td>
                                                </tr>


                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><strong><span class="amount">£15.00</span></strong> </td>
                                                </tr>

                                            </tfoot>
                                        </table>


                                        <div id="payment">
                                            <ul class="payment_methods methods">
                                                <li class="payment_method_bacs">
                                                    <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                    <label for="payment_method_bacs">Direct Bank Transfer </label>
                                                    <div class="payment_box payment_method_bacs">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </li>
                                                <li class="payment_method_cheque">
                                                    <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                    <label for="payment_method_cheque">Cheque Payment </label>
                                                    <div style="display:none;" class="payment_box payment_method_cheque">
                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </li>
                                                <li class="payment_method_paypal">
                                                    <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                                    <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal....(line truncated)...
                                                    </label>
                                                    <div style="display:none;" class="payment_box payment_method_paypal">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="form-row place-order">

                                                <input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


                                            </div>

                                            <div class="clear"></div>

                                        </div>
                                    </div>
                                </form>

                            </div>                       
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        @endsection


        @section('script')
        <script type="text/javascript">
            $(document).ready(function(){

            });
        </script>
        @endsection