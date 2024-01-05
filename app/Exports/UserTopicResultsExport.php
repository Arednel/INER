<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class UserTopicResultsExport implements FromArray, WithStrictNullComparison, WithHeadings, ShouldAutoSize
{
    protected $results;

    public function __construct(array $results)
    {
        $this->results = $results;
    }

    public function array(): array
    {
        return $this->results;
    }

    public function headings(): array
    {
        return ["Пользователь", "Тема", "Баллов", "", "Средний балл"];
    }

    public function columnFormats(): array
    {
        return [
            'C' => NumberFormat::FORMAT_NUMBER,
        ];
    }
}
