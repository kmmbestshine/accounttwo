<?php

namespace BT\Events;

use BT\Modules\Quotes\Models\Quote;
use Illuminate\Queue\SerializesModels;

class QuoteModified extends Event
{
    use SerializesModels;

    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }
}
