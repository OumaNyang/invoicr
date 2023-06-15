
// let isJavaScriptEnabled = (typeof window !== 'undefined' && typeof window.navigator !== 'undefined' && typeof window.navigator.Enabled !== 'undefined') ? true : false;

// if (!isJavaScriptEnabled) {
//       document.querySelector('.container').style.display = 'none';
      
//       var warningMessage = document.createElement('p');
//       warningMessage.textContent = 'JavaScript is required to use this application. Please enable JavaScript in your browser settings.';
//       document.body.insertBefore(warningMessage, document.body.firstChild);
//   }
//  document.addEventListener('contextmenu', event => event.preventDefault());

let timeoutId;  
$('.intaSendPayButton').on('click', function(e) {
    e.preventDefault();
    clearTimeout(timeoutId); 
 });

 const homepage = 'https://oumanyang.com/';
$('#backHomepage').on('click', function(e) {
    e.preventDefault(); 
    window.location = homepage;
 });

// new window.IntaSend({
//     publicAPIKey: "ISPubKey_test_995f0e29-81ae-48f7-9f95-a96537837ae1",
//     live: false
// })
// .on("COMPLETE", (results) => {
//     timeoutId = setTimeout(() => {
//         window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("completed"); ?>');
//     }, 30000);
// })
// .on("FAILED", (results) => {
//     timeoutId = setTimeout(() => {
//         window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("failed"); ?>');
//     }, 60000);
// })
// .on("IN-PROGRESS", (results) => {
//     timeoutId = setTimeout(() => {
//         window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("in-progress"); ?>');
//     }, 120000);
// });

 $('.intaSendPayButton').on('click', function(e) {
    e.preventDefault();

    let invoiceId = document.getElementById('invoiceid').value;
    let currency = document.getElementById('currency').value;
    let invoiceAmount_usd = document.getElementById('invoiceamount').value;
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let billingEmail = document.getElementById('billingEmail').value;
    const dollar_rate = 139.88;
    
    var paymentAmount_ksh = parseFloat(invoiceAmount_usd *dollar_rate ).toFixed(2);

    if (invoiceId.trim() === '' || currency.trim() === '' || invoiceAmount.trim() === '' || firstName.trim() === '' || lastName.trim() === '' || billingEmail.trim() === '') {
        $('#msgresponse').append('<div class="alert alert-danger rounded-0">Please fill in all the required fields.</div>');
        setTimeout(() => {
            $('#msgresponse .alert').remove();
        }, 3000);
        return;
    } else {


// Get the button element
let intaSendButton = document.querySelector('.intaSendPayButton');

// Add data parameters to the button using jQuery's attr() method
$(intaSendButton).attr('data-amount',invoiceAmount_usd);
$(intaSendButton).attr('data-currency', currency);
$(intaSendButton).attr('data-email', billingEmail);
$(intaSendButton).attr('data-first_name', firstName);
$(intaSendButton).attr('data-last_name', lastName);
$(intaSendButton).attr('data-country', 'KE');

new window.IntaSend({
publicAPIKey: "ISPubKey_test_995f0e29-81ae-48f7-9f95-a96537837ae1",
 live: false
})
.on("COMPLETE", (results) => {
    timeoutId = setTimeout(() => {
        window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("completed"); ?>');
    }, 30000);
})
.on("FAILED", (results) => {
    timeoutId = setTimeout(() => {
        window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("failed"); ?>');
    }, 60000);
})
.on("IN-PROGRESS", (results) => {
    timeoutId = setTimeout(() => {
        window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("in-progress"); ?>');
    }, 120000);
});

/*  Ajaxt Post Request  */
 
        // $(document).ready(function() {
        //     $.ajax({
        //         url: 'https://api.intasend.com/api/v1/payments',
        //         type: 'POST',
        //         headers: {
        //             'Authorization': 'Bearer ISPubKey_test_995f0e29-81ae-48f7-9f95-a96537837ae1',
        //             'Content-Type': 'application/json'
        //         },
        //         data: JSON.stringify({
        //             // Add your payment data here
        //         }),
        //         success: function(results) {
        //             timeoutId = setTimeout(() => {
        //                 window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("completed"); ?>');
        //             }, 30000);
        //         },
        //         error: function(results) {
        //             timeoutId = setTimeout(() => {
        //                 window.location.href = './status?' + encodeURIComponent('<?php echo md5("status"); ?>') + '=' + encodeURIComponent('<?php echo md5("failed"); ?>');
        //                 }, 60000);
        //         }
        //     });
        // });
 
    }

});
 