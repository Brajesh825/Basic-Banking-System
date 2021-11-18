<?php
    session_start();
    include('./class/Product.php');
    $product = new Product();

    require_once ('./includes/header.php');
?>
   <div class="container">
        <div class="filterMenu">
            <div class="brand">
                <div class="brand_heading">
                    <h2>Brand</h2>
                </div>
                <div class="brandList">

                    <?php
                        $brand = $product->getBrand();

                        foreach ($brand as $brandDetails) {
                    ?>   
                        <div class="brandItem">
                            <label>
                                <input type="checkbox" class="productDetail brand" value="<?php echo $brandDetails["brand"]; ?>"  > <?php echo $brandDetails["brand"]; ?>
                            </label>
                        </div>
                    <?php    
                        }
                    ?>

                </div>
            </div>
            <div class="ram">
                <div class="ram_heading">
                    <h2>RAM</h2>
                </div>
                <div class="ramList">
                    <?php
                        $ram = $product->getRam();

                        foreach ($ram as $ramDetails) {
                    ?>   
                        <div class="ramItem">
                            <label>
                                <input type="checkbox" class="productDetail ram" value="<?php echo $ramDetails["ram"]; ?>"  > <?php echo $ramDetails["ram"]."GB"; ?>
                            </label>
                        </div>
                    <?php    
                        }
                    ?>
                </div>
            </div>

            <div class="internal">
                <div class="internal_heading">
                    <h2>RAM</h2>
                </div>
                <div class="internalList">
                    <?php
                        $storage = $product->getStorage();

                        foreach ($storage as $storageDetails) {
                    ?>   
                        <div class="internalItem">
                            <label>
                                <input type="checkbox" class="productDetail storage" value="<?php echo $storageDetails["storage"]; ?>"  > <?php echo $storageDetails["storage"]."GB"; ?>
                            </label>
                        </div>
                    <?php    
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="products">
            <div class="searchResult">
                
            </div>
        </div>
   </div>
<?php
    require_once('./includes/footer.php');

?>