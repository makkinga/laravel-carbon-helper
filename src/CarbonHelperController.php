<?php

namespace Makkinga\CarbonHelper;

use Carbon\Carbon;

class CarbonHelperController
{

    protected $carbon;

    /**
     * CarbonHelperController constructor.
     * @param Carbon $carbon
     */
    public function __construct(Carbon $carbon)
    {
        $this->carbon = $carbon;
    }

}