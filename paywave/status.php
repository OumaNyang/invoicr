<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  >
<style>
    body{
        background: #f1eff4;
    }
 .container{
min-height: 500px !important;
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
</style>
<div class="container m-2">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
        <div class="card  p-4 m-auto">
        <div id="responsemessage">
    <?php
    if (!isset($_GET[md5('status')]) ){
        header("Location:./checkout");
    }

    if($_GET[md5('status')] ==md5('completed')){
        echo '<p  class="alert alert-success rounded-0">Your payment has been received successfully. You will receive a download link shortly in the email address you provided (mouma@gmail.com).</p>
    ';
    if($_GET[md5('status')] ==md5('in-progress')){
        echo '<p  class="alert alert-info rounded-0">Your payment is being processed!</p>
        ';
    }
    }else{
    echo '<p class="alert alert-danger rounded-0">Sorry! We could not complete your payment.</p>
    ';
    }
?>
</div>
               
 <button id="backHomepage" type="button" class="btn-block  btn btn-md btn-primary rounded-0">Back to Homepage</button> 
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
 
</body>
</html>