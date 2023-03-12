<?php

require_once __DIR__ . "/vendor/autoload.php";

use Ahmedelarabykhaled\PdfSearch\PDFSearch;

$pdf_files = [
    'result.pdf',
    'result.pdf'
];

try{

    $pdf_search = new PDFSearch('victory',$pdf_files);

    $result = $pdf_search->search();

    print "<pre>" . print_r($result,true) . "</pre>";

}catch(Error $e){
    print_r($e->getMessage());
}

