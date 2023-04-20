<?php
$this_page = 'home';
require_once 'header.php';
require_once 'main_slider.php';
?>
<div class="container" style="margin-top: 30px;" >
    <div class="middle-section">
        <div class="home-info">
            <h2>
                Achieve flawless, smooth, hair-free skin with electrolysis
            </h2>

            <p>
                <p>
                    Unwanted hair is a common problem affecting most women to varying degrees throughout their lives and prompting the use of various temporary methods of hair reduction or hair management systems. 
                </p>
                <p>
                    However electrolysis is a safe, effective, progressive and permanent method of removing unwanted hair. Indeed it is the only method approved as <b>permanent hair removal</b> by the American FDA and the British Medical Association.
                </p>
                <p>
                    We treat <b><u>all</u></b> hair and skin types. With the choice of Galvanic Multi-Needle, Diathermy and Blend there is something to suit all. Treatment is 'tailor made' to suit YOU.
                </p>
                <p>
                    If you haven't tried electrolysis for a while give it another chance - <i>Simcha will give you the results you always dreamed of!</i>
                </p>
                <p>
                    Call Simcha NOW on <?=$phone_number?> to finally get that <b>smooth, hair-free</b> skin you always wished for...
                </p>
            </p>       
        </div>
    
        <div class="testimonial-section">
            <div style="padding: 15px 15px 5px">
                <h3>Testimonials</h3>
                <div style="border: 1px solid darkgrey;margin-bottom:20px;"></div>
                <div class="swiper-container testimonial-swiper">
                    <div class="swiper-wrapper">
                        <?foreach ($testimonials as $author => $testimonial):?>
                        <? $length = strlen($testimonial);
                        $ellipses = $length > 300 ? '.....' : '';
                        $testimonial = $length > 300 ? substr($testimonial,0,300) : substr($testimonial,0,strlen($testimonial)-10)?>
                            <div class="swiper-slide">
                                <div style="font-size: 16px;min-height:250px;">
                                    <i class="fas fa-quote-left"></i>
                                    <?=$testimonial.$ellipses?>
                                    <div class="testimonial-author"><?=ucwords($author)?></div>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                    <div class="swiper-pagination" style="margin-top:20px;"></div>
                </div>
            </div>

            <div class="testimonial-button">
                <a class="btn btn-primary" href="<?=BASE_PATH?>/testimonials.php" role="button">See All Testimonials</a>
            </div>
        </div>
    
    </div>

</div>
<?php require_once 'footer.php'?>


