<?php 

use Hcode\Page;
use \Hcode\Model\product;

$app->get('/', function() {
    
	$products = Product::listAll();

	$page = new Page();

	$page->setTpl("index", [
		'products'=>Product::checkList($products)
	]);

});

 ?>