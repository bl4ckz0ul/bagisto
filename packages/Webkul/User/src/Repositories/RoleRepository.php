<?php

namespace Webkul\User\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Role Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class RoleRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\User\Contracts\Role';
    }
}
