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
   
   // Invoice details
   $this->SetFont($contentFont, '', 12);
   $this->Cell(0); // Add an empty cell to align to the left
   $this->Cell(50, 10, 'REFERENCE:', 0, 0, 'L');
   $this->Cell(40, 10, 'INVOICE2', 0, 0, 'R');
   $this->Ln();
   
   $this->Cell(0); // Add an empty cell to align to the left
   $this->Cell(50, 10, 'BILLING DATE:', 0, 0, 'L');
   $this->Cell(40, 10, '12/11/2021', 0, 0, 'R');
   $this->Ln();
   
   $this->Cell(0); // Add an empty cell to align to the left
   $this->Cell(50, 10, 'DUE DATE:', 0, 0, 'L');
   $this->Cell(40, 10, '14/11/2021', 0, 0, 'R');
   $this->Ln();
   
   $this->Ln(10); // Add some spacing
   
// Header row
$this->SetFont($headerFont, 'B', 10);
$this->Cell(90, 5, 'BILLING TO', 'B');
$this->Ln();

// Content row
$this->SetFont($contentFont, '', 8);
$this->Cell(90, 10, 'Yusuf Pangoma', 0, 0, 'L');
$this->Ln(10);

$this->Cell(90, 5, 'Arusha, TZ', 0, 0, 'L');
$this->Ln();

$this->Cell(90, 5, 'Norcross, US', 0, 0, 'L');
$this->Ln(10);

$this->Ln(5); // Add some spacing


    // Customer shipping details
    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(50, 10, 'DUE DATE:');
    $this->Cell(40, 10, '14/11/2021');
    $this->Ln();

    // TABLE HEADER
    $this->SetFont($headerFont, 'B', 12);
    $this->SetFillColor($tableHeaderColor[0], $tableHeaderColor[1], $tableHeaderColor[2]);
    $this->SetTextColor(0);
    $this->Cell($columnWidths[0], 10, 'PRODUCT', 1, 0, 'C', true);
    $this->Cell($columnWidths[1], 10, 'AMOUNT', 1, 0, 'C', true);
    $this->Cell($columnWidths[2], 10, 'VAT', 1, 0, 'C', true);
    $this->Cell($columnWidths[3], 10, 'PRICE', 1, 0, 'C', true);
    $this->Cell($columnWidths[4], 10, 'DISCOUNT', 1, 0, 'C', true);
    $this->Cell($columnWidths[5], 10, 'TOTAL', 1, 1, 'C', true);

    // TABLE ROWS
    $this->SetFont($contentFont, '', 12);
    $rowCount = 0;

    // Example product data
    $productData = array(
        array('Product Name 1', '2', '$10.00', '$2.00', '$1.00', '$18.00'),
        array('Product Name 2', '1', '$5.00', '$0.50', '$0.00', '$4.50'),
        array('Product Name 3', '3', '$8.00', '$1.20', '$0.80', '$26.40')
    );

    foreach ($productData as $row) {
        $rowColor = $tableRowColors[$rowCount % 2];
        $this->SetFillColor($rowColor[0], $rowColor[1], $rowColor[2]);

        for ($i = 0; $i < count($row); $i++) {
            $this->Cell($columnWidths[$i], 10, $row[$i], 1, 0, 'C', true);
        }

        $this->Ln();
        $rowCount++;
    }

    $this->Ln(10); // Add some spacing

    // Subtotal, Discount, and VAT
    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(90, 10, 'Subtotal');
    $this->Cell(0, 10, '$48.90');
    $this->Ln();

    $this->Cell(90, 10, 'Discount');
    $this->Cell(0, 10, '$2.80');
    $this->Ln();

    $this->Cell(90, 10, 'VAT (10%)');
    $this->Cell(0, 10, '$4.61');
    $this->Ln();

    $this->Ln(10); // Add some spacing

    // Total due
    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(90, 10, 'Total Due');
    $this->Cell(0, 10, '$51.71');
    $this->Ln();

    $this->Ln(10); // Add some spacing

    // Paid
    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(30, 10, 'PAID');
    $this->Ln();

    // CUSTOMER NOTES
    $this->SetFont($headerFont, 'B', 12);
    $this->Cell(30, 10, 'CUSTOMER NOTES');
    $this->Ln();
    $this->SetFont($contentFont, '', 12);
    $this->MultiCell(0, 10, 'Completed!');

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




