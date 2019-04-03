<?php

namespace Webkul\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\DataGrids\TestDataGrid;

/**
 * TestDataGrid controller
 *
 * @author    Nikhil Malik <nikhil@webkul.com> @ysmnikhil
 * @author    Jaypee Villanueva <339y4j@gmail.com> @jaypee-soft
 * @copyright 2019 JP Software  (http://www.webkul.com)
 */
class DataGridController extends Controller
{
    protected $_config;
    protected $testgrid;

    public function __construct(TestDataGrid $testgrid)
    {
        $this->middleware('admin');

        $this->_config = request('_config');

        $this->testgrid = $testgrid;
    }

    public function massDelete() {
        dd(request()->all());
    }

    public function massUpdate() {
        dd(request()->all());
    }

    public function testGrid() {
        return $this->testgrid->render();
    }
}
