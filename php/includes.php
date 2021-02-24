<?php
require('db.php');
session_start();


function query($sql) 
{
	global $connection; //global makes sure its the same conn from config
	return mysqli_query($connection, $sql);
}


function confirm($result)
{
	global $connection;
	if(!$result) {
		die("QUERY FAILED" . mysqli_error($connection));
	}
}

function escape_string($string)
{
	global $connection;
	return mysqli_real_escape_string($connection, $string); 
	//to prevent sql injection
}

function fetch_array($result)
{
	return mysqli_fetch_array($result);
}

// ***************** FRONT END FUNCTIONS *****************

// get products
function get_products_laptop()
{
	$query = query("SELECT * FROM products where cat_id=1");
	confirm($query);
	while ($row = fetch_array($query))
	{
        $product = <<<DELIMETER
            <div class="col-md-4 product-men mt-md-0 mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="images/lap/{$row['image']}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="#" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="#">{$row['p_name']}</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$ {$row['price']}</span>
                        </div>
                        <div
                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="{$row['p_name']}" />
                                    <input type="hidden" name="amount" value="{$row['price']}" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        DELIMETER;
		echo $product;
	}
}

function get_products_phones()
{
	$query = query("SELECT * FROM products where cat_id=4");
	confirm($query);
	while ($row = fetch_array($query))
	{
        $product = <<<DELIMETER
            <div class="col-md-4 product-men mt-md-0 mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="images/mp/{$row['image']}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="#" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="#">{$row['p_name']}</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$ {$row['price']}</span>
                        </div>
                        <div
                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="{$row['p_name']}" />
                                    <input type="hidden" name="amount" value="{$row['price']}" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        DELIMETER;
		echo $product;
	}
}

function get_categories(){
	  $query = query( "SELECT * FROM categories");
	  confirm($query); 
	  while($row = fetch_array($query))
  		{
            $category_links = <<<DELIMETER
                <option value="{$row['CID']}">{$row['category_name']}</option>
            DELIMETER;
	        echo $category_links;
        }
}
