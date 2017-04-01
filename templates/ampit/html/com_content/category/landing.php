<?php defined('_JEXEC') or die;
$i = 1;
?>
<div class="landing-article">
    <?php foreach ($this->items as $item) { ?>
        <!-- Section <?php echo $i; ?> -->
        <section class="line-<?php echo $i. ' '.$item->alias ?>">
            <div class="container">
                <?php echo $item->text; ?>
            </div>
        </section>
    <?php $i++; } ?>
</div>

