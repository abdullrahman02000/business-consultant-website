<?php
function text_block($title, $subtitle, $elid) {
?>
<div class="h-50vw d-flex justify-content-center align-items-center flex-column text-center" id="<?= $elid ?>">
    <h1 class="display-1 fw-bold"><?= $title ?></h1>
    <h2><?= $subtitle ?></h2>
</div>
<?php
}
?>
<?php
function readmore_btn($url) {?>
<span class="d-block border-bottom text-primary border-primary border-2" onclick="open_lightbox('<?= $url ?>')">Read More</span>
<?php } ?>
<?php
function close_lightbox() {?>
<button class="d-block rounded-circle btn-close" onclick="close_lightbox()" aria-label="Close"></button>
<?php } ?>
<?php
function text_block_link($title, $subtitle, $link_txt, $link_target, $elid) { ?>
<div class="h-50vw d-flex justify-content-center align-items-center flex-column text-center" id="<?= $elid ?>">
    <h1 class="display-1 fw-bold"><?= $title ?></h1>
    <h2><?= $subtitle ?></h2>
    <button class="btn btn-primary rounded-0 text-uppercase my-4" onclick="open_lightbox('<?= $link_target ?>')"><?= $link_txt ?></button>
</div>
<?php } ?>
<?php function navbar($brand, $nav_items) { ?>
        <nav class="navbar container-fluid navbar-expand-lg navbar-text shadow bg-white navbar-light text-uppercase py-3 position-sticky">
            <div class="navbar-brand mb-3 mb-md-0 me-md-auto ">
                <img src="logo.png" alt="Morshed Logo" aria-label="Morshed Logo" title="Morshed Logo" width="40" height="auto">
                <h1 class="h6 text-center d-md-inline d-none"><?= $brand ?></h1>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="container-fluid d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center justify-content-center text-center">
                    <ul class="navbar-nav">
                    <?php for ($a=0; $a<count($nav_items); $a++) { $item = $nav_items[$a]; ?>
                        <a class="nav-link <?php if (array_key_exists("active", $item) and $item["active"]) { echo "active"; } ?>" href="<?= $item["target"] ?>"><?= $item["title"] ?></a>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
<?php } ?>

<?php function block_card1($card) {
    $title = $card["title"];
    $content = $card["content"];
    $icon = $card["icon"];
    $iconAlt = $card["icon-alt"];
    ?>
    <div class="col-xl-4 col-lg-6 col-12 p-2 p-md-4 mx-auto d-flex flex-column justify-content-start align-items-center">
        <div class="d-flex justify-content-center align-items-center">
        <div class="img-container rounded-circle bg-primary d-flex justify-content-center align-items-center">
            <img  src="<?= $icon ?>" alt="<?= $iconAlt ?>">
        </div>
        </div>
        <?php if (gettype($content)=='string') { ?>
            <span class="h1 my-2"><?= $title ?></span>
            <p class="my-2 text-center"><?= $content ?></p>
        <?php } else if (gettype($content)=='array') { ?>
            <?php if (count($content)<=2) { ?>
                <span class="h1 my-2"><?= $title ?></span>
                <?php foreach ($content as $p) { ?>
                    <p class="my-2 text-center"><?= $p ?></p>
                <?php } ?>
            <?php } else { ?>
                <div class="lightbox" id="<?= $card['id'] ?>">
                    <div>
                        <div class="box-target-flex container-fluid justify-content-end">
                            <span class="d-block rounded-circle btn-close" onclick="close_lightbox()" aria-label="Close"></span>
                        </div>
                        <div class="lightbox-content">
                            <span class="h1 my-2"><?= $title ?></span>
                            <?php for ($a=0; $a<2; $a++) { ?>
                                <p class="my-2 text-center"><?= $content[$a] ?></p> 
                            <?php } ?>
                            <?php for ($a=2; $a<count($content); $a++) { ?>
                                <p class="box-target my-2 text-center"><?= $content[$a] ?></p>
                            <?php } ?>
                            <div class="d-flex justify-content-center box-target-none">
                                <?php readmore_btn('#' . $card['id']) ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        <?php } ?>
    </div>
<?php } ?>

<?php function light_box($title, $content, $elid) { ?>
    <div class="lightbox lightbox-hidden" id="<?= $elid ?>">
        <div>
            <div class="d-flex container-fluid justify-content-end">
                <?php close_lightbox(); ?>
            </div>
            <div class="lightbox-content bg-white p-4 overflow-auto">
                <span class="h1"><?= $title ?></span>
                <?php if (gettype($content)=='string') { ?>
                    <p class="my-2"><?= $content ?></p>
                <?php } else if (gettype($content)=='array') { ?>
                    <?php foreach ($content as $p) { ?>
                        <p class="my-2"><?= $p ?></p>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>