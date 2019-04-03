<div class="container" style="margin-top:2em;">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box">
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-3">
                                รีวิวแนะนำ
                            </p>
                        </div>
                    </div>
                </nav>


                <?php foreach($this->reviews as $review){ ?>
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="<?=URL_Public?>/images/user/<?=$review['member_id']?>.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <a href="./trips/id/<?=$review['trip_id']?>">
                                    <strong>
                                        <?=$review['member_username']?>
                                        @<?=$this->mb_wordwrap($review['trip_name'],50)?>
                                    </strong>
                                </a>
                                <br>
                                <?=$this->mb_wordwrap($review['tripReview_content'],70)?>
                                <br>
                                <small><?=$review['tripReview_log']?></small>
                            </p>
                        </div>
                    </div>
                </article>
                <?php } ?>
                
            </article>
        </div>
        <!--<div class="tile is-parent">-->
        <!--    <article class="tile is-child box">-->
        <!--        <nav class="level">-->
        <!--            <div class="level-left">-->
        <!--                <div class="level-item">-->
        <!--                    <p class="subtitle is-3">-->
        <!--                        กิจกรรม-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </nav>-->

        <!--        <?php for($i=1;$i<=6;$i++){ ?>-->
        <!--        <article class="media">-->
        <!--            <figure class="media-left">-->
        <!--                <p class="image is-64x64">-->
        <!--                    <img src="https://bulma.io/images/placeholders/128x128.png">-->
        <!--                </p>-->
        <!--            </figure>-->
        <!--            <div class="media-content">-->
        <!--                <div class="content">-->
        <!--                    <p>-->
        <!--                        <strong>Barbara Middleton</strong>-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </article>-->
        <!--        <?php } ?>-->
                
        <!--    </article>-->
        <!--</div>-->
        
        <!--<div class="tile is-parent">-->
        <!--    <article class="tile is-child box">-->
        <!--        <nav class="level">-->
        <!--            <div class="level-left">-->
        <!--                <div class="level-item">-->
        <!--                    <p class="subtitle is-3">-->
        <!--                        อันดับนักเที่ยว-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </nav>-->

        <!--        <?php for($i=1;$i<=6;$i++){ ?>-->
        <!--        <article class="media">-->
        <!--            <figure class="media-left">-->
        <!--                <p class="image is-64x64">-->
        <!--                    <img src="https://bulma.io/images/placeholders/128x128.png">-->
        <!--                </p>-->
        <!--            </figure>-->
        <!--            <div class="media-content">-->
        <!--                <div class="content">-->
        <!--                    <p>-->
        <!--                        <strong>Barbara Middleton</strong>-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </article>-->
        <!--        <?php } ?>-->

        <!--    </article>-->
        <!--</div>-->
    </div>
</div>