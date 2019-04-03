<div class="container" style="margin-top:2.5em;">
    <div class="tile is-ancestor">
        <div class="tile is-parent is-8 is-vertical">
            <div class="content box">
                <h1 class="has-text-centered">
                    <?=$this->tripDetail['trip_name']?><br>
                    <small class="is-italic subtitle">@<?=$this->tripDetail['trip_province']?></small>
                </h1>
                <p>
                    <?=$this->tripDetail['trip_detail']?>
                </p>
                <?php $a=array(
                        "ก้องภพ ธรรมมี",
                        "เก้าอาทิตย์ คุณโฑ",
                        "ปฏิพาล  ปรางอยู่",
                        "นายสมบูรณ์  เอื้ออัชฌาสัย",
                        "นายชูศักดิ์  เกียรติเฉลิมคุณ",
                        "นายดำรงค์  ปคุณวานิช",
                        "นายนุปกรณ์  หาญภูวดล",
                        "นายสมหวัง  จตุรงค์ล้ำเลิศ",
                        "นางสุมาลี  ดลสุขวงศาวัฒน์",
                    );
                    
                    echo 'ชื่อ : '.
                    $a[rand(0,8)];
                
                    echo '<p>เลขบัญชี : ';
                    
                    for($i=1;$i<=10;$i++){
                        echo rand(0,9);
                    }
                    echo '</p>';
                ?>
            </div>
        </div>

        <div class="tile is-parent is-vertical">
            <article class="box">
                <?php 
                    $path = $_SERVER['DOCUMENT_ROOT'].'/src/Publics/images/trips/';
                    $this->Carousel = array();
                    for($i=0;file_exists($path.$this->tripDetail['trip_id'].'_'.$i.'.png');$i++){
                        array_push($this->Carousel,URL_Public.'/images/trips/'.$this->tripDetail['trip_id'].'_'.$i.'.png');
                    }
                ?>
                <?php $this->render('Components/Carousel');?>
            </article>
            <article class="box">
                <aside class="menu">
                    <ul class="menu-list">
                        <li>
                            <a>
                            จำนวนคน: 
                            <?=$this->tripDetail['trip_guest']?>
                            </a>
                        </li>
                        <li>
                            <a>
                            ราคา: 
                            <?=$this->tripDetail['trip_price']?>
                            </a>
                        </li>
                        <li>
                            <?php if(isset($_SESSION['auth'])){?>
                                <a href="./booking/id/<?=$this->tripDetail['trip_id']?>" <?php
                                    echo $this->BookingCheck?' disabled':'';
                                ?>>
                                    <button class="button is-link is-outlined is-fullwidth" <?php
                                    echo $this->BookingCheck?' disabled':'';
                                ?>>
                                        <?php echo $this->BookingCheck?'จองเรียบร้อย':'จองทริปนี้';?>
                                    </button>
                                </a>
                            <?php }else{ ?>
                                <button class="button is-info is-fullwidth" onClick="$('#login-modal').addClass('is-active');">เข้าสู่ระบบเพื่อจองทริปนี้</button>
                            <?php }?>
                        </li>
                    </ul>
                </aside>
            </article>
            <?php $this->render('Components/Trip_Review');?>
        </div>
    </div>
</div>