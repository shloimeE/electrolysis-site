<?
$this_page = 'testimonials';
require_once 'header.php';
// require_once 'main_slider.php';
?>

<div class="quote-container">
    <?foreach($testimonials as $author => $testimonial):?>
        <div class="note yellow">
            <?=$testimonial?>
            <cite class="author"> ~ <?=ucfirst($author)?></cite>
        </div>
    <?endforeach;?>
</div>

<? require_once 'footer.php'?>