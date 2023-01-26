<?php
session_start();
// print_r($_SESSION['product_data']);
// print_r($run);
?>


<div data-w-id="b2cef3ef-fb2d-5f8c-91bb-10560e683d52" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid brix---grid-3-columns">

    <a data-w-id="b2cef3ef-fb2d-5f8c-91bb-10560e683d53" href="<?= $_SESSION['product_data']['header_link'] ?>" class="brix---card-link w-inline-block">
        <div class="brix---image-wrapper---br-top"><img src="https://uploads-ssl.webflow.com/63d250366b16a5a5dccc21a8/63d25141d30e6638c3fec418_mobile-app-features-mini-illustration-brix-templates.svg" alt="Mobile App - Elements Webflow Library - BRIX Templates" class="brix---image-width-100" /></div>
        <div class="brix---content-inside-card">
            <div class="brix---color-neutral-800">
                <h3 class="brix---heading-h3-size"><?= $_SESSION['product_data']['heading'] ?></h3>
            </div>
            <div class="brix---mg-bottom-24px">
                <div class="brix---paragraph-default">
                    <div class="brix---color-neutral-600">
                        <p><?= $_SESSION['product_data']['content'] ?></p>
                    </div>
                </div>
            </div>
            <div class="brix---link-wrapper">
                <div class="brix---color-accent-1">
                    <div class="brix---text-200-bold">Read more</div>
                </div><img src="https://uploads-ssl.webflow.com/63d250366b16a5a5dccc21a8/63d25141d30e667857fec41a_icon-arrow-color-elements-brix-templates.svg" alt="Arrow - Elements Webflow Library - BRIX Templates" class="brix---link-icon-right" />
            </div>
        </div>


    </a>


</div>
</div>

<?php
$_SESSION['load_product'] = $_SESSION['product_data']['id'];
print_r($_SESSION['load_product']);
?>