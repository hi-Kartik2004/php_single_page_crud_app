<?php
require_once("php/get_info.php");
// print_r($data);
// print_r($run);
?>

<div class="brix---section wf-section">
    <div class="brix---container-default w-container">
        <div class="brix---mg-bottom-48px">
            <div data-w-id="b2cef3ef-fb2d-5f8c-91bb-10560e683d49" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="brix---inner-container-600px---center">
                <div class="brix---text-center">
                    <div class="brix---mg-bottom-12px">
                        <div class="brix---color-neutral-800">
                            <h2 class="brix---heading-h2-size">Browse our set of features</h2>
                        </div>
                    </div>
                    <div class="brix---color-neutral-600">
                        <p class="brix---paragraph-default">Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div data-w-id="b2cef3ef-fb2d-5f8c-91bb-10560e683d52" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid brix---grid-3-columns">
            <?php
            foreach ($run as $row) {

            ?>

                <a data-w-id="b2cef3ef-fb2d-5f8c-91bb-10560e683d53" href="<?= $row['header_link'] ?>" class="brix---card-link w-inline-block">
                    <div class="brix---image-wrapper---br-top"><img src="https://uploads-ssl.webflow.com/63d250366b16a5a5dccc21a8/63d25141d30e6638c3fec418_mobile-app-features-mini-illustration-brix-templates.svg" alt="Mobile App - Elements Webflow Library - BRIX Templates" class="brix---image-width-100" /></div>
                    <div class="brix---content-inside-card">
                        <div class="brix---color-neutral-800">
                            <h3 class="brix---heading-h3-size"> <?= $row['heading'] ?> </h3>
                        </div>
                        <div class="brix---mg-bottom-24px">
                            <div class="brix---paragraph-default">
                                <div class="brix---color-neutral-600">
                                    <p><?= $row['content'] ?></p>
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
            <?php
            }
            ?>


        </div>
    </div>