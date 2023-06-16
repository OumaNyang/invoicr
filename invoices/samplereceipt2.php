<?php
  require_once('fpdf/fpdf.php');

 class Invoice extends FPDF {
    //  function __construct() {
    //      parent::__construct();
    //  }
     
     function Header() {
         // Add header content here if needed
     }
     
     function Footer() {
         // Add footer content here if needed
     }
     function generateInvoice()
{
 
    // Set colors
$headerColor = array(255, 255, 255);
$tableHeaderColor = array(204, 204, 204);
$tableRowColors = array(array(236, 236, 236), array(255, 255, 255));

// Set fonts
$headerFont = 'Arial';
$contentFont = 'Helvetica';

// Set column widths for the table
$columnWidths = array(40, 50, 30, 40, 40, 40);
$this->SetFont($headerFont, 'B', 30);
// $this->SetFillColor($headerColor[0], $headerColor[1], $headerColor[2]);
// $this->SetFillColor(120, 250, 250);

$this->SetTextColor(73, 2, 144); 
$this->Cell(0); // Add an empty cell to align to the left
$this->Cell(0, 15, 'RECEIPT', 0, 0, 'R', true); // Align to the right

 
$this->SetXY(145,26); 
$this->SetFillColor(250, 250, 250);
$this->SetTextColor(0);
$this->SetDrawColor(255);
 $this->SetFont($contentFont,'B',9);
$this->Cell(30, 7, 'Receipt  No.', 'T', 0, 'L', true); 
$this->Cell(30, 7, '235965', 'T', 1, 'L', true); 

$this->SetXY(145,33); 
$this->SetFillColor(250, 250, 250);
$this->SetTextColor(0);
$this->SetDrawColor(255);
 $this->SetFont($contentFont,'B',9);
 $this->Cell(30, 7, 'Invoice Refference', 'T', 0, 'L', true); 
 $this->Cell(30, 7, 'VOITIX595965', 'T', 1, 'L', true); 

$this->SetXY(145,40); 
$this->SetFillColor(250, 250, 250);
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->SetFont($contentFont,'B',9);
$this->Cell(30, 7, 'Date', 'T', 0, 'L', true);
$this->Cell(30, 7, date('d/m/Y'), 'T', 1, 'L', true);

 
 
$this->Ln(10);  
$this->SetFont($headerFont, '', 9);
$this->SetTextColor(0);

// Logo
$this->Image('../images/logo.png', 10, 10, 20); // Replace with the path to your company logo

$this->SetXY(40, 9);
$this->Cell(0, 7, 'ParkSuites Towers, 4th Floor,');
$this->Ln();
$this->SetX(40);

$this->Cell(0, 7, 'Parklands Road, Nairobi');
$this->Ln();

$this->SetX(40);
$this->Cell(0, 7, 'P.0 B0X 16727 NAIROBI');
$this->Ln();
$this->SetX(40);
$this->Cell(0, 7, 'Tel: +254 700 390736 / +254 731 777 362');
$this->Ln();

$this->SetX(40);
$this->Cell(0, 7, 'PIN: P5456625555T');
$this->Ln();

$this->Ln(10);
 
$this->SetX(10);
$this->SetFillColor(192, 192, 192);
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->SetFont($headerFont, 'B', 9);
$this->Cell(50, 7, 'Billing Information', 0, 0, 'L', true);
$this->Ln();

$this->SetX(10);
$this->SetFillColor(251, 253, 255);
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->SetFont($contentFont, '', 9);
$this->Cell(80, 7, 'Tanzanite Energies Limited', 0, 1);

$this->SetX(10);
$this->SetFont($contentFont, '', 9);
$this->Cell(80, 7, 'tanzanite.energies@yahoo.com', 0, 1);

$this->SetX(10);
$this->SetFont($contentFont, '', 9);
$this->Cell(80, 7, '+25578142563', 0, 1);

$this->SetX(10);
$this->SetFont($contentFont, '', 9);
$this->Cell(80, 7, 'Nyerere Square, Dodoma, TZ', 0, 1);

$this->Ln(10); 
  
// $this->SetFillColor($tableHeaderColor[0], $tableHeaderColor[1], $tableHeaderColor[2]);
// $this->SetDrawColor(255); 
// $this->SetTextColor(0);

// $this->SetFont($headerFont, 'B', 10);

// $this->Cell(90, 7, 'Description', 1, 0, 'C', true); 
// $this->Cell(35, 7, 'Quantity', 1, 0, 'C', true); 
// $this->Cell(35, 7, 'Unit Price', 1, 0, 'C', true); 
// $this->Cell(35, 7, 'TOTAL', 1, 1, 'C', true); 
 

// $this->SetFillColor($tableRowColors[0][0], $tableRowColors[0][1], $tableRowColors[0][2]);
// $this->SetTextColor(0);
// $this->SetDrawColor(255);
// $this->SetFont($contentFont, '', 9);
// $this->Cell(90, 7, 'Product Six - This is a sample product six.', 'RBT', 0, 'L', true);  
// $this->Cell(35, 7, '11', 'BTRL', 0, 'C', true);  
// $this->Cell(35, 7, '$ 12.00', 'BTRL', 0, 'C', true);  
// $this->Cell(35, 7, '$ 132.00', 'BTL', 1, 'C', true);  

// $this->Cell(90, 7, 'Product Seven - This is a sample product seven.', 'RBT', 0, 'L', true);  
// $this->Cell(35, 7, '11', 'BTRL', 0, 'C', true);  
// $this->Cell(35, 7, '$ 12.00', 'BTRL', 0, 'C', true);  
// $this->Cell(35, 7, '$ 132.00', 'BTL', 1, 'C', true);  

// $this->Cell(90, 7, 'Product Eight - This is a sample product eight.', 'RBT', 0, 'L', true); 
// $this->Cell(35, 7, '11', 'BTRL', 0, 'C', true);  
// $this->Cell(35, 7, '$ 15.00', 'BTRL', 0, 'C', true);  
// $this->Cell(35, 7, '$ 120.00', 'BTL', 1, 'C', true);  


$this->SetX(30);

$this->SetFillColor(250, 255, 250);
$this->SetTextColor(73,2,144);
$this->SetDrawColor(180);
// $this->SetFont($contentFont, 'B', 12);
$this->SetFont('Courier', 'B', 20);  
$this->Cell(80, 10, 'PAID : KES', 'BT', 0, 'L', true);
$this->SetFont('Courier', 'B', 10);  
$this->Cell(80, 10, '834,851.00', 'BT', 1, 'C', true);
$this->SetX(30);

$amountInWords = 'EIGHT HUNDRED THIRTY-FOUR THOUSAND EIGHT HUNDRED FIFTY-ONE SHILLINGS ONLY';
$this->MultiCell(0, 15, $amountInWords);

 
$this->Ln(10);

$this->SetDrawColor(192, 192, 192);
$this->Line(10, $this->GetY(), $this->GetPageWidth() - 10, $this->GetY());
// CUSTOMER NOTES
$this->SetFillColor(192, 192, 192); 
$this->SetTextColor(0);
$this->SetDrawColor(0);
$this->SetFont($headerFont, 'B', 9);
$this->Cell(80, 7, 'CUSTOMER NOTES',0,1, 'C', true);
$this->Ln(2);
$this->SetFont($contentFont, '', 9);
$this->MultiCell(0, 9, 'If you need a signed and stamped Invoice please contact us on info@novel.co.ke');
$this->MultiCell(0, 9, 'Thank you for trusting in Novel Technologies');

// PAYMENT INFORMATION
$this->SetDrawColor(192, 192, 192);
$this->Line(10, $this->GetY(), $this->GetPageWidth() - 10, $this->GetY());
$this->SetFillColor(192, 192, 192); 
$this->SetTextColor(0);
$this->SetDrawColor(0);
$this->SetFont($headerFont, 'B', 9);
$this->Cell(80,7, 'PAYMENT INFORMATION',0,1, 'C', true);
$this->Ln(2);
$this->SetFont('Courier', 'B', 10);  

$this->SetFillColor(250, 250, 250); 
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->Cell(40, 7, 'Payment Mode', 'BT', 0, 'L', true);  
$this->Cell(35, 7, 'Bank transfer', 'BT', 1, 'L', true);

$this->SetFillColor(250, 250, 250); 
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->Cell(40, 7, 'Payer', 'BT', 0, 'L', true);  
$this->Cell(35, 7, 'Tanzanite Energies Limited', 'BT', 1, 'L', true);
   
$this->SetFillColor(250, 250, 250); 
$this->SetTextColor(0);
$this->SetDrawColor(255);
 $this->Cell(40, 7, 'Payment Date',  'BT', 0, 'L', true);  
$this->Cell(40, 7, date('d/m/Y'), 'BT', 1, 'L', true);

$this->SetFillColor(250, 250, 250); 
$this->SetTextColor(0);
$this->SetDrawColor(255);
 $this->Cell(40, 7, 'Payment ID', 'BT', 0, 'L', true);  
$this->Cell(40, 7, 'TXN65757GFHJ', 'BT', 1, 'L', true);  
 
$this->Ln();
 

$this->SetDrawColor(192, 192, 192);
$this->Line(10, $this->GetY(), $this->GetPageWidth() - 10, $this->GetY());
$this->SetFillColor(255, 255, 255); 
$this->SetTextColor(0);
$this->SetDrawColor(0);
$this->SetFont($headerFont, 'B', 9);
$this->Cell(80,7, 'Prepared by',0,1, 'L', true);
$this->Ln(2);
$this->SetFont($contentFont, '', 9);
 
// $this->SetFillColor(250, 250, 250); 
$this->SetTextColor(0);
 $this->SetFont($contentFont, '', 9);
$this->Cell(40, 7, 'Ouma Nyang ,Software Engineer', 0,0, 'L', true);  
  
$this->SetY(-25);

 // Set line color to gray (adjust RGB values as needed)
 $this->SetDrawColor(192, 192, 192);

 // Draw a thin horizontal line
 $this->Line(10, $this->GetY(), $this->GetPageWidth() - 10, $this->GetY());

 // Set font and alignment for the footer text
 $this->SetFont($contentFont,'B');
 $this->SetTextColor(20);
 $this->SetFillColor(255); // White background

 // Print the footer text in the center
 $this->Cell(0, 0, 'VOITIX (voitixsolutions.com)', 0, 0, 'C', true);

}

}
$invoice = new Invoice();
$invoice->AddPage();
$invoice->generateInvoice();
// $invoice->Output('invoice.pdf', 'D');
$invoice->Output();



 

?>




