<?php

namespace Webkul\Sales\Repositories;

use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;

/**
 * Order Address Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */

class OrderAddressRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return Mixed
     */

    function model()
    {
        return 'Webkul\Sales\Contracts\OrderAddress';
    }
}
