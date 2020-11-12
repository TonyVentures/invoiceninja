<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Events\Quote;

use App\Models\Company;
use App\Models\Quote;
use Illuminate\Queue\SerializesModels;

/**
 * Class InvoiceWasMarkedSent.
 */
class QuoteWasMarkedSent
{
    use SerializesModels;

    public $quote;

    public $company;

    public $event_vars;

    /**
     * Create a new event instance.
     *
     * @param Quote $quote
     * @param Company $company
     * @param array $event_vars
     */
    public function __construct(Quote $quote, Company $company, array $event_vars)
    {
        $this->quote = $quote;
        $this->company = $company;
        $this->event_vars = $event_vars;
    }
}