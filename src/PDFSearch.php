<?php

namespace Ahmedelarabykhaled\PdfSearch;

class PDFSearch
{
    private $files;

    private $search_text;

    public function __construct($search_text = '', $pdf_files = [])
    {
        $this->files = $pdf_files;

        $this->search_text = $search_text;
    }

    public function search()
    {
        $parser = new \Smalot\PdfParser\Parser();

        $count = 0;

        $final_result = [
            'files' => [],
            'count' => 0
        ];

        foreach ($this->files as $file) {

            $file_url = $file;

            $pdf = $parser->parseFile($file_url);

            $pdf_file_details = $pdf->getDetails();

            $text = $pdf->getText();

            $search_result_count = substr_count(strtolower($text), strtolower($this->search_text));

            $search_result = stripos(strtolower($text), strtolower($this->search_text));

            if ($search_result !== false) {

                $final_result['files'][] =
                    [
                        'name' => $pdf_file_details['Title'],
                        'search_result' => $search_result_count
                    ];

                $count += 1;
            }
        }

        $final_result['count'] = $count;

        return $final_result;
    }
}
