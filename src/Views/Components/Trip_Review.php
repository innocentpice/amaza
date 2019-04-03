<?php if(isset($_SESSION['auth']) && empty($_POST)){if(!$this->reviewCheck){?>
<div class="box">
    <form action="./trips/id/<?=$this->tripDetail['trip_id']?>" method="post">
    <article class="media">
      <figure class="media-left">
        <p class="image is-64x64">
          <img src="<?=URL_Public?>/images/user/<?=$_SESSION['auth']['member_id']?>.png">
        </p>
      </figure>
      <div class="media-content">
        <div class="field">
          <p class="control">
            <textarea class="textarea" maxlength="450" name="review" placeholder="แสดงความคิดเห็น"></textarea>
          </p>
        </div>
        <nav class="level">
          <div class="level-left"></div>
          <div class="level-right">
            <div class="level-item">
              <button class="button is-info">Submit</button>
            </div>
          </div>
        </nav>
      </div>
    </article>
    </form>
</div>
<?php }}?>
<?php if(count($this->reviews) > 0){ ?>
<div class="box">
    <?php $i=1;foreach($this->reviews as $review){?>
    <article class="media">
        <figure class="media-left">
            <p class="image is-64x64">
                <img src="<?=URL_Public?>/images/user/<?=$review['member_id']?>.png">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong><?=$review['member_name']?></strong>
                    <br><?=$review['tripReview_content']?><br>
                    <small>
                        <?=$review['tripReview_log']?>
                    </small>
                </p>
            </div>
        </div>
    </article>
    <?php }?>
</div>
<?php }?>