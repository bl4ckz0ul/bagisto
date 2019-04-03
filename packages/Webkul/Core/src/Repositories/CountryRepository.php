<?php

namespace Webkul\Core\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Country Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class CountryRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Core\Contracts\Country';
    }
}
