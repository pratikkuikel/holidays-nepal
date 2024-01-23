<?php

namespace Spatie\Holidays\Countries;

use Carbon\CarbonImmutable;

class Nepal extends Country
{
    public function countryCode(): string
    {
        return 'np';
    }

    protected function allHolidays(int $year): array
    {
        return array_merge([
            'International Labor Day' => '05-01',
            'Christmas' => '12-25',
        ], $this->variableHolidays($year));
    }

    /** @return array<string, CarbonImmutable> */
    protected function variableHolidays(int $year): array
    {
        $easter = CarbonImmutable::createFromTimestamp(easter_date($year))
            ->setTimezone('Asia/Kathmandu');

        return [];
    }
}
