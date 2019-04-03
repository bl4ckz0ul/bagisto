<?php

namespace Webkul\Product\Repositories;

use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;
use Webkul\Product\Repositories\ProductRepository as Product;
use Webkul\Product\Helpers\Price;

/**
 * Product Repository
 *
 * @author Jaypee Villanueva <339y4j@gmail.com> @jaypee-soft
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class ProductFlatRepository extends Repository
{
    protected $product;

    /**
     * Price Object
     *
     * @var array
     */
    protected $price;

    public function __construct(
        Product $product,
        Price $price,
        App $app
    ) {
        $this->product = $product;

        $this->price = $price;

        parent::__construct($app);
    }

    public function model()
    {
        return 'Webkul\Product\Contracts\ProductFlat';
    }
}
