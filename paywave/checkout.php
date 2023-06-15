<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paywave Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  >
<style>
    body{
        background: #f1eff4;
    }
 .container{
/* min-height: 800px !important; */
 }
 
   .form-control:focus {
        box-shadow: none;
        border: .5px solid #555;

    }
    .footer {
        top: 4em !important;
        left: 0;
        right: 0;
        position: relative;
        background-color: #3f0ab2;
        padding: 20px;
        text-align: center;
        color: #f1eff4;
        font-size: 20px;
     }

    .footer p {
        margin: 0;
        font-size: 14px;
        color: #555;
    }

    .intaSendPayButton {
  background: #1b70ba;
  border-radius: 20px;
   color: #fff;
  padding: 8px 10px;
  border: none !important;
  display :inline-block
}
  .mpesapay{
    background: #12a310;
;
}
.intaSendPayButton:hover {
  cursor: pointer;
  background: #581bba;
;
}
.no-script-alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f8d7da;
        color: #721c24;
        padding: 25px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        border-radius: 0px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 999;
        min-height: 50%;
    }
 </style>
<noscript class="no-script-alert">
    You need to have JavaScript enabled to use this application.Please enable javascript in your browser settings
</noscript>
<div class="container m-2">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card m-3 p-4">
                <p>Proceed to checkout to complete the purchase</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Payment Checkout</h5>
                </div>
<div class="card-body">
  <form  method="post">

  <?php
$invoiceamount_usd =49.95;
$dolar_rate =139.89;
$invoiceamount_ksh = round($invoiceamount_usd * $dolar_rate );
$invoicenumber ="INV55865";
$currency =  "USD";
$payment_method = "M-PESA";
$billing_email = "info@customer.com";
$first_name = "first_name";
$last_name = "last_name";
$country = "KE";
 
?>
<div class="row g-3">
<div class="col-md-5">
<label class="form-label">Invoice Id</label>
<input type="text"required maxlength="10" class="form-control form-control-sm" value="<?=$invoicenumber ?>" name="invoiceid"  id="invoiceid">
</div>
<div class="col-md-3">
<label class="form-label">Currency </label>
<input type="text" required value ="<?=$currency ?>" readonly class="form-control form-control-sm" name="currency" id="currency">
</div>
<div class="col-md-4">
<label class="form-label">Invoice Amount</label>
<input type="text" required maxlength="10"  value ="<?=$invoiceamount_usd ?>" class="form-control form-control-sm" id="invoiceamount" name="invoiceamount">
</div>
</div>
<div class="row g-3">
    <div class="col-md-6 mb-1">
        <label class="form-label">Invoice Date</label>
        <input   type="text" maxlength="10" class="form-control form-control-sm" id="invoiceDate">
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Invoice Due</label>
        <input   type="text" maxlength="10" class="form-control form-control-sm" id="invoiceDue">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6 mb-1">
        <label class="form-label">First name</label>
        <input   type="text" maxlength="10" class="form-control form-control-sm" name="firstName" id="firstName">
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Last name</label>
        <input   type="text" maxlength="10" class="form-control form-control-sm"  name="lastName" id="lastName">
    </div>
</div>
<div class="col-md-12 mb-1">
        <label class="form-label">Email</label>
        <input   type="text" maxlength="10" class="form-control form-control-sm" name="billingEmail" id="billingEmail">
    </div>

<hr>
  <div class="col-12 mt-2 mb-2 " id="msgresponse"></div>

</form>  
<div class="row justify-content-center">
    <p class="alert alert-primary p-2 rounded-0 ">Please input invoice number REFFERENCE Number</p>
    <div class="col-12 text-center">
         <!-- <button class="intaSendPayButton mpesapay" data-amount="<?=$invoiceamount_ksh ?>" data-currency="KES" data-email="<?= $billing_email ?>" data-first_name="<?= $first_name ?>" data-last_name="<?= $last_name?>" data-country="KE">Pay With Visa /Master Card /M-Pesa</button> -->
         <button class="intaSendPayButton mpesapay" >Pay With Visa /Master Card /M-Pesa</button>

  
        </div>

</div>
 </div>
<div class="card-footer">
    <span style="display:block; text-align: center">
        <a href="https://intasend.com/security" target="_blank">
            <img src="https://intasend-prod-static.s3.amazonaws.com/img/trust-badges/intasend-trust-badge-with-mpesa-hr-light.png" width="375px" alt="IntaSend Secure Payments (PCI-DSS Compliant)">
        </a>
        <strong>
            <a style="display: block; color: #454545; text-decoration: none; font-size: 0.8em; margin-top: 0.6em;" href="https://intasend.com/security" target="_blank">Secured by IntaSend Payments</a>
        </strong>
    </span>
</div>
        </div>
    </div>
</div>
</div>

  
<div class="footer">
    <div class="row">
        <div class="col-12">

            &copy;2023 - Angulat Group (Pty)  Limited
        </div>
    </div>
</div>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.4/build/intasend-inline.js"></script>
<script src="./assets/js/panther.js"> </script> 
  
</body>
</html>