<div class="container" style="margin-top:2.5em;">
    <div class="tile is-ancestor">
        <div class="tile is-parent is-12">
            <article class="tile is-child box">

                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-3">
                                ทริปใหม่น่าเที่ยว
                            </p>
                        </div>
                    </div>
                    <div class="level-right">
                        <p class="level-item">
                            <a class="button is-info is-outlined" href="./search?keyword=new">
                                <strong>ดูทั้งหมด</strong>
                                <span class="icon is-small">
                                  <i class="fa fa-angle-double-right"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </nav>

                <div class="columns catagory-content">
                    <?php foreach($this->tripList_new as $trip){ ?>
                    <div class="column is-one-quarter">
                        <a href="<?=URL_Path?>/trips/id/<?=$trip['trip_id']?>">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img class="img-top-radius" src="<?=URL_Public?>/images/trips/<?=$trip['trip_id']?>_0.png" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <p class="subtitle">
                                        <?=$this->mb_wordwrap($trip['trip_name'],25)?>
                                        <br>
                                        <small>@<?=$trip['trip_province']?></small>
                                    </p>
                                    <div class="content" style="height:100px;word-wrap:break-word;">
                                        <?=$this->mb_wordwrap($trip['trip_detail'],180)?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="card-footer-item">จำนวนคน:
                                        <?=$trip['trip_guest']?>
                                    </div>
                                    <div class="card-footer-item">ราคา:
                                        <?=money_format('%.0n',$trip['trip_price'])?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>

            </article>
        </div>
    </div>
</div>