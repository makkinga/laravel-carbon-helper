<?php

namespace Makkinga\CarbonHelper;

use Carbon\Carbon;

class CarbonHelperController
{

    protected $date;
    protected $carbon;

    /**
     * CarbonHelperController constructor.
     */
    public function __construct($date)
    {
        $this->date = reset($date);

        if ($this->date) {
            $this->carbon = Carbon::parse($this->date);
        } else {
            $this->carbon = Carbon::now();
        }
    }

    public function carbon()
    {
        return $this->carbon;
    }

}