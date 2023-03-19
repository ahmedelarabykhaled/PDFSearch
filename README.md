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
          'bath_to_tile/file_name.pdf',
          'bath_to_tile/file_name.pdf'
      ];

      $pdf_search = new PDFSearch('search_word',$pdf_files);

      /**
       * @var $search_result = Array
              (
                  [files] => Array
                      (
                          [0] => Array
                              (
                                  [name] => file name
                                  [file] => path_to_file/file_name.pdf
                                  [search_result] => 10 // result count
                              )

                          [1] => Array
                              (
                                  [name] => file name
                                  [file] => path_to_file/file_name.pdf
                                  [search_result] => 10 // result count
                              )

                      )

                  [count] => 2 // how many files has the search key
              )

       */
      $search_result = $pdf_search->search();

  ```

## License
  - MIT