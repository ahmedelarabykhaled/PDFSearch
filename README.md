Search in pdf files
===

## Dependence
- Laravel
- composer

## Install
- using composer
  ```powershell
    composer require ahmedelarabykhaled/pdf-search
    
  ```

## Usage
- to search for a string in a list of pdf files
  ```php
  
      use Ahmedelarabykhaled\PdfSearch\PDFSearch;

      // each item is a full url for the pdf file
      $pdf_files = [
          'result.pdf',
          'result.pdf'
      ];

      $pdf_search = new PDFSearch('search_word',$pdf_files);

      /**
       * @return array
       */
      $search_result = $pdf_search->search();

  ```

## License
  - GPL