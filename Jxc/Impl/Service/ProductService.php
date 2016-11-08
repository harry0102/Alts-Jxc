<?php

namespace Jxc\Impl\Service;


use Jxc\Impl\Core\JxcService;
use Jxc\Impl\Dao\ProductDao;
use Jxc\JxcConfig;

class ProductService extends JxcService {

    private $productDao;

    public function __construct() {
        parent::__construct();
        $this->productDao = new ProductDao(JxcConfig::$DB_Config);
    }

    public function saveProduct($request) {

    }

    /**
     * 采购
     */
    public function procure($request) {
        $this->productDao->selectById();

    }


    public function sell($request) {

        return array('xx' => 1);
    }


}