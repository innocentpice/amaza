<div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true" data-delay="5000">
  <div class='carousel-container'>
    <?php foreach($this->Carousel as $img){?>
    <div class='carousel-item has-background'>
      <img class="is-background" src="<?=$img?>" alt="" width="640" height="310" />
    </div>
    <?php }?>
  </div>
  <div class="carousel-navigation is-overlay">
    <div class="carousel-nav-left">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="carousel-nav-right">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>
</div>