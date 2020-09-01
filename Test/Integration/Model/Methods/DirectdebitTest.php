<?php
/*
 * Copyright Magmodules.eu. All rights reserved.
 *  * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Test\Integration\Model\Methods;

use Mollie\Payment\Model\Methods\Directdebit;

class DirectdebitTest extends AbstractMethodTest
{
    protected $instance = Directdebit::class;

    protected $code = 'directdebit';
}
