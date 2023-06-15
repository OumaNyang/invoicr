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
   $this->SetFillColor($headerColor[0], $headerColor[1], $headerColor[2]);
   $this->SetTextColor(70);
   $this->Cell(0); // Add an empty cell to align to the left
   $this->Cell(0, 15, 'INVOICE', 0, 0, 'R', true); // Align to the right
   $this->Ln(); // Move to the next line
   
   $this->Ln(10); // Add some spacing
   
   $this->SetFont($headerFont, '', 9);
   
   // Logo
   $this->Image('images/logo.png', 10, 10, 20); // Replace with the path to your company logo
   
   $this->SetXY(40, 10);
   $this->SetFont($contentFont, '', 10);
   $this->Cell(0, 7, 'ParkSuites Towers, 4th Floor');
   $this->Ln();
   $this->SetX(40);
   $this->Cell(0, 7, 'Parklands, Nairobi');
   $this->Ln();
   $this->SetX(40);
   $this->Cell(0, 7, 'VAT: P5456625555T');
   $this->Ln();
   $this->SetX(40);
   $this->Cell(0, 7, 'PIN: P89669579T');
   $this->Ln();
   $this->SetX(40);
   $this->Cell(0, 7, 'Company Number: 768987989');
   $this->Ln();
   
   $this->Ln(10); // Add some spacing
// On the Right column
$this->SetFont($headerFont, 'B', 10);
$this->Cell(90, 5, 'BILLING TO', 'B');
$this->Ln();

$this->SetFont($contentFont, '', 8);
$this->Cell(90, 5, 'Yusuf Pangoma', 0, 0, 'L');
$this->Cell(0); 

$this->Cell(90, 5, 'Yusuf.Pangoma@gmail.com', 0, 0, 'L');
$this->Cell(0);  

$this->Cell(90, 5, '+255782355616', 0, 0, 'L');
$this->Cell(0);  

$this->Cell(90, 5, 'Dodoma, TZ', 0, 0, 'L');
$this->Cell(0); 

$this->Ln();

// On the left Column

$this->Cell(90); // Empty cell to align to the right
$this->SetFont($headerFont, 'B', 10);
$this->Cell(90, 5, 'BILL DETAILS', 'B');
$this->Ln();

$this->Cell(90); // Empty cell to align to the right
$this->Cell(30, 7, 'REFERENCE:', 0, 0, 'R');
$this->Cell(0);  
$this->Cell(40, 7, 'INVOICE=752', 0, 0, 'R');
$this->Ln();

$this->Cell(90); // Empty cell to align to the right
$this->Cell(50, 7, 'BILLING DATE:', 0, 0, 'R');
$this->Cell(0);  
$this->Cell(80, 7, '12/06/2023', 0, 0, 'R');
$this->Ln();

$this->Cell(90); // Empty cell to align to the right
$this->Cell(50, 7, 'DUE DATE:', 0, 0, 'R');
$this->Cell(0); 
$this->Cell(80, 7, '12/06/2023', 0, 0, 'R');
 
 
$this->Ln(10); // Add some spacing
// Display the product and invoice details


// $this->SetFont($headerFont, '', 10);
// $this->SetFillColor($tableHeaderColor[0], $tableHeaderColor[1], $tableHeaderColor[2]);
// // $this->SetTextColor(65);

// $this->SetFont($headerFont, 'B', 10);

// $this->Cell(90, 8, 'Description', 0, 0, 'C', true);
// $this->Cell(35, 8, 'Quantity', 0, 0, 'C', true);
// $this->Cell(35, 8, 'Unit Price', 0, 0, 'C', true);
// $this->Cell(35, 8, 'TOTAL', 0, 1, 'C', true);

// $this->SetFillColor($tableRowColors[0][0], $tableRowColors[0][1], $tableRowColors[0][2]);
// $this->SetTextColor(0);
// $this->SetDrawColor(255);
// $this->SetFont($contentFont, '', 9);
// $this->Cell(90, 8, 'Product Six - This is a sample product six.', 'LTR', 0, 'L', true);
// $this->Cell(35, 8, '11', 'LTR', 0, 'C', true);
// $this->Cell(35, 8, '$ 12.00', 'LTR', 0, 'C', true);
// $this->Cell(35, 8, '$ 132.00', 'LTR', 0, 'C', true);



// $this->Cell(120, 8, ' ', 'LR', 0, 'L', true);
// $this->SetFillColor($tableRowColors[1][0], $tableRowColors[1][1], $tableRowColors[1][2]);
// $this->SetTextColor(0);
// $this->SetDrawColor(255);
// $this->SetFont($contentFont, 'B', 10);
// $this->Cell(35, 8, 'Total', 1, 0, 'R', true);
// $this->Cell(35, 8, '$ 132.00', 1, 1, 'C', true);


$this->Cell(120, 8, ' ', 'LR', 0, 'L', true);
$this->SetFillColor(192, 192, 192); // Gray background
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->SetFont($contentFont, 'B', 10);
$this->Cell(40, 8, 'Discount', 1, 0, 'R', true);
$this->Cell(35, 8, '$ 0.00', 1, 1, 'C', true);

$this->SetFillColor(250, 250, 249); // Gray background
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->SetFont($contentFont, 'B', 10);
$this->Cell(120, 8, ' ', 'LR', 0, 'L', true);
$this->Cell(40, 8, 'VAT/Tax (16%)', 1, 0, 'R', true);
$this->Cell(35, 8, '$ 0.00', 1, 1, 'C', true);

$this->Cell(120, 8, ' ', 'LR', 0, 'L', true);
$this->SetFillColor(25, 20, 250); // Blue background
$this->SetTextColor(255);
$this->SetDrawColor(255);
$this->SetFont($contentFont, 'B', 10);
$this->Cell(40, 8, 'Net Total ', 1, 0, 'R', true);
$this->Cell(35, 8, '$ 216.70', 1, 1, 'C', true);

$this->SetFillColor(250, 250, 249); // Gray background
$this->SetTextColor(0);
$this->SetDrawColor(255);
$this->SetFont($contentFont, 'B', 10);
$this->Cell(120, 8, ' ', 'LR', 0, 'L', true);
$this->Cell(40, 8, 'PAID', 1, 0, 'R', true);
$this->Cell(35, 8, '$ 0.00', 1, 1, 'C', true);


$this->Cell(120, 8, ' ', 'LR', 0, 'L', true);
$this->SetFillColor(25, 20, 250); // Blue background
$this->SetTextColor(255);
$this->SetDrawColor(255);
$this->SetFont($contentFont, 'B', 10);
$this->Cell(40, 8, 'Total Due', 1, 0, 'R', true);
$this->Cell(35, 8, '$ 216.70', 1, 1, 'C', true);

$this->Ln(10);

    // CUSTOMER NOTES
    $this->SetFillColor(230, 190, 200); // Blue background

    $this->SetTextColor(0);
    $this->SetDrawColor(0);

    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(80, 8, 'CUSTOMER NOTES',0,1, 'C', true);
    $this->Ln(2);
    $this->SetFont($contentFont, '', 12);
    $this->MultiCell(0, 10, 'Your Invoice is due for payment .Please swetlle thwe invoice within 2 days to avoid penalties and inconvenience');

    // PAYMENT INFORMATION
    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(30, 10, 'PAYMENT INFORMATION');
    $this->Ln();
    $this->SetFont($contentFont, '', 12);
    $this->Cell(30, 10, 'Invoice Mg System.');
    $this->Ln();
    $this->Cell(30, 10, 'Sort Code: 00-00-00');
    $this->Ln();
    $this->Cell(30, 10, 'Account Number: 12345678');
    $this->Ln();
}

}
 // Usage Example
 $invoice = new Invoice();
 $invoice->AddPage();
 $invoice->generateInvoice();
 $invoice->Output();
 

?>




