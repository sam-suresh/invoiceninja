<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2023. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace App\DataMapper\Schedule;

class ScheduleEntity
{
    /**
     * Defines the template name
     *
     * @var string
     */
    public string $template = 'schedule_entity';

    /**
     * Defines the template name
     *
     * @var string
     */
    public string $entity = ''; // invoice, credit, quote, purchase_order

    /**
     * Defines the template name
     *
     * @var string
     */
    public string $entity_id = '';
}