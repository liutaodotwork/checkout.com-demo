<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Checkout - Smooth CKO Flow</title>
        <!-- SEO Meta Tags-->
        <meta name="description" content="Checkout - Smooth CKO Flow">
        <meta name="author" content="LiuTao">
        <!-- Mobile Specific Meta Tag-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Favicon and Apple Icons-->
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="apple-touch-icon" href="touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
        <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
        <link rel="stylesheet" media="screen" href="<?= $asset_path ?>/css/vendor.min.css">
        <!-- Interactive Credit Card-->
        <link rel="stylesheet" media="screen" href="<?= $asset_path ?>/css/card.min.css">
        <!-- Main Template Styles-->
        <link id="mainStyles" rel="stylesheet" media="screen" href="<?= $asset_path ?>/css/styles.min.css">
        <!-- Modernizr-->
        <script src="<?= $asset_path ?>/js/modernizr.min.js"></script>
    </head>
    <!-- Body-->
    
    <body>
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Checkout</h1></div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="/">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row">
                <!-- Checkout Adress-->
                <div class="col-xl-8 col-lg-7">
                    <div class="card mb-4">
                        <div class="card-header"><span class="text-lg">User Details</span></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Name"><span class="input-group-addon"><i class="icon-user"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="input-group">
                                        <input class="form-control" type="email" placeholder="Email"><span class="input-group-addon"><i class="icon-mail"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"><span class="text-lg">Payment Details</span></div>
                        <div class="card-body">
                            <div class="text-center modal-spinner"><div class="spinner-border text-primary m-2" role="status"></div></div>
                            <div class="cko-fields" style="display:none;">
                                <p>We accept following cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="<?= $asset_path ?>/img/credit-cards.png" style="width: 120px;" alt="Cerdit Cards"></p>
                                <p class="error-message text-primary"></p>
                                <p class="success-payment-message"></p>
                                <form class="interactive-credit-card row" id="payment-form" method="POST" action="https://merchant.com/charge-card">
                                    <div class="form-group col-12">
                                        <div class="icon-container">
                                            <i class="icon-credit-card"></i>
                                        </div>
                                        <div class="card-number-frame"></div>
                                    </div>
                                    <div class="form-group col-6">
                                        <div class="icon-container">
                                            <i class="icon-calendar"></i>
                                        </div>
                                        <div class="expiry-date-frame"></div>
                                    </div>
                                    <div class="form-group col-6">
                                        <div class="icon-container">
                                            <i class="icon-lock"></i>
                                        </div>
                                        <div class="cvv-frame"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center paddin-top-1x mt-4">
                        <a class="btn btn-primary" href="">
                            <span class="hidden-xs-down" id="pay-button">PAY 860£</span>
                        </a>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar">
                        <div class="padding-top-2x hidden-lg-up"></div>
                        <!-- Order Summary Widget-->
                        <section class="widget widget-order-summary widget-featured-products">
                            <h3 class="widget-title">Summary</h3>
                            <div class="entry">
                                <div class="entry-thumb">
                                    <a href="/"><img src="/assets/img/shop/widget/iphone-xr-white-select-201809.png" alt="Product"></a>
                                </div>
                                <div class="entry-content">
                                    <h4 class="entry-title"><a href="/">iPhone XR</a></h4>
                                    <span class="entry-meta">64 GB White</span>
                                    <span class="entry-meta text-gray-dark text-right">850£ x 1</span>
                                </div>
                            </div>
                            <hr class="mb-3">
                            <table class="table">
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="text-gray-dark">850£</td></tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td class="text-gray-dark">10£</td></tr>
                                <tr>
                                    <td class="text-lg">Total</td>
                                    <td class="text-lg text-gray-dark">860£</td>
                                </tr>
                            </table>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
        <!-- Backdrop-->
        <div class="site-backdrop"></div>
        <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
        <script src="<?= $asset_path ?>/js/vendor.min.js"></script>
        <script src="<?= $asset_path ?>/js/scripts.min.js"></script>
        <script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
        <script>
            $( document ).ready( function()
            {
                var custom_style = {
                    base: {
                        color: '#505050',
                        fontSize: '14px',
                        fontFamily: '"Rubik",Helvetica,Arial,sans-serif',
                        letterSpacing: '0.02rem',
                        lineHeight: '1.5',
                        fontWeight: '400',
                        display: 'block',
                        height: '46px'
                    },
                    autofill: {
                        backgroundColor: '#ffa000'
                    },
                    hover: {
                        color: '#505050'
                    },
                    focus: {
                        color: "#505050"
                    },
                    valid: {
                        color: "#4caf50"
                    },
                    invalid: {
                        color: "#f44336"
                    },
                    placeholder: {
                        base: {
                            color: '#999999'
                        },
                        focus: {
                        }
                    }
                };
                var payButton = document.getElementById("pay-button");
                var form = document.getElementById("payment-form");
                var errorStack = [];

                var config = {
                    publicKey: "pk_test_9e252075-8cb4-40ed-8568-c290301ced8d",
                    namespace: "Frames",
                    style: custom_style,
                    localization: {
                        cardNumberPlaceholder: "Card number",
                        expiryMonthPlaceholder: "MM",
                        expiryYearPlaceholder: "YY",
                        cvvPlaceholder: "CVV",
                    },
                    ready: function( event )
                    {
                        form.addEventListener("submit", function (event)
                        {
                            event.preventDefault();
                            Frames.submitCard();
                        });
                    },
                    frameActivated: function()
                    {
                        $( '.cko-fields' ).show();
                        $( '.modal-spinner' ).remove();
                    },
                    cardValidationChanged: function()
                    {
                        payButton.disabled = !Frames.isCardValid();
                    },
                    frameValidationChanged: function( event )
                    {
                        var errorMessageElement = document.querySelector(".error-message");
                        var hasError = !event.isValid && !event.isEmpty;

                        if (hasError)
                        {
                            errorStack.push(event.element);
                        }
                        else
                        {
                            errorStack = errorStack.filter(function (element)
                            {
                              return element !== event.element;
                            });
                        }

                        var errorMessage = errorStack.length
                        ? getErrorMessage(errorStack[errorStack.length - 1])
                        : "";
                        errorMessageElement.textContent = errorMessage;
                    },
                    cardTokenizationFailed: function( error )
                    {
                        Frames.enableSubmitForm();
                    },
                    cardTokenized: function( event )
                    {
                        var el = document.querySelector(".success-payment-message");
                        el.innerHTML = "Card tokenization completed<br>" +
                        'Your card token is: <span class="token">' + event.token + "</span>";
                    }
                };

                Frames.init(config);
            });

            function getErrorMessage(element)
            {
                var errors =
                {
                    "card-number": "Please enter a valid card number",
                    "expiry-date": "Please enter a valid expiry date",
                    "cvv": "Please enter a valid cvv code",
                };

                return errors[element];
            }
        </script>
    </body>
</html>
