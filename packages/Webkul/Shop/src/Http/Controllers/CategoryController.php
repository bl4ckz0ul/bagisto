<?php

namespace Webkul\Shop\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Category\Repositories\CategoryRepository as Category;
use Webkul\Product\Repositories\ProductRepository as Product;

/**
 * Category controller
 *
 * @author    Jaypee Villanueva <339y4j@gmail.com> @jaypee-soft
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class CategoryController extends Controller
{

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * CategoryRepository object
     *
     * @var array
     */
    protected $category;

    /**
     * ProductRepository object
     *
     * @var array
     */
    protected $product;

    /**
     * Create a new controller instance.
     *
     * @param  Webkul\Category\Repositories\CategoryRepository $category
     * @param  Webkul\Product\Repositories\ProductRepository $product
     * @return void
     */
    public function __construct(Category $category, Product $product)
    {
        $this->product = $product;

        $this->category = $category;

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $category = $this->category->findBySlugOrFail($slug);

        return view($this->_config['view'], compact('category'));
    }
}
