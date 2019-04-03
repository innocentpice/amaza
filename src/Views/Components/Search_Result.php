<div class="container" style="margin-top:2.5em;">
    <div class="tile is-ancestor">
        <div class="tile is-parent is-8 is-vertical">
            <?php foreach($this->searchResult as $result){?>
                <a href="<?=URL_Path?>/trips/id/<?=$result['trip_id']?>" class="media box">
                    <div class="media-left">
                        <figure class="image is-96x96">
                            <img src="<?=URL_Public?>/images/trips/<?=$result['trip_id']?>_0.png" alt="Image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong><?=$result['trip_name']?></strong>
                                <small>@<?=$result['trip_province']?></small>
                                <br>
                                <?=$this->mb_wordwrap($result['trip_detail'],100)?>
                            </p>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <span class="level-item" aria-label="reply">
                                    จำนวนคน:
                                    <?=$result['trip_guest']?>
                                </span>
                                <span class="level-item" aria-label="retweet">
                                    ราคา:
                                    <?=money_format('%.0n',$result['trip_price'])?>
                                </span>
                            </div>
                        </nav>
                    </div>
                </a>
            <?php }?>
        </div>

        <div class="tile is-parent is-vertical">
            <article class="box">
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-3">
                                แนะนำ
                            </p>
                        </div>
                    </div>
                </nav>

                <?php foreach($this->tripList_hit as $trip){ ?>
                <a href="<?=URL_Path?>/trips/id/<?=$trip['trip_id']?>">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img class="img-top-radius" src="<?=URL_Public?>/images/trips/<?=$trip['trip_id']?>_0.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="subtitle">
                                <?=$trip['trip_name']?>
                            </p>
                            <div class="content" style="height:100px;word-wrap:break-word;">
                                <?=substr_replace(substr($trip['trip_detail'],0,310),'...',-1,5)?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-item">ราคา: <?=money_format('%.0n',$trip['trip_price'])?></div>
                            <div class="card-footer-item">จำนวนคน: <?=money_format('%.0n',$trip['trip_guest'])?></div>
                        </div>
                    </div>
                </a>
                <?php } ?>

            </article>
        </div>
    </div>
</div>