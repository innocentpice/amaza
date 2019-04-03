<div class="container" style="margin-top:2.5em;">
<div class="tile is-ancestor">
    <div class="tile is-parent">
        <article class="tile is-child box">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th><abbr title="Position">#</abbr></th>
                        <th><abbr title="Trip Name">ชื่อทริป</abbr></th>
                        <th><abbr title="Price">ราคา</abbr></th>
                        <th><abbr title="Man Slot">จำนวนคน</abbr></th>
                        <th><abbr title="Payment">สถานะการจ่ายเงิน</abbr></th>
                        <th><abbr title="Option">Option</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;foreach($this->tourList as $tour){?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$tour['trip_name']?></td>
                        <td><?=$tour['trip_price']?></td>
                        <td><?=$tour['trip_guest']?></td>
                        <td><?=$tour['tripSlot_status']?'ชำระเงินแล้ว':'ยังไม่ชำระเงิน'?></td>
                        <td>
                            <a href="./trips/id/<?=$tour['trip_id']?>" class="button is-primary">
                                <span class="icon has-text-white">
                                  <i class="fas fa-search-plus"></i>
                                </span>
                            </a>
                            <a class="button is-info" onClick="$('#payment-modal').addClass('is-active');$('#trip_id').val(<?=$tour['trip_id']?>);">
                                <span class="icon has-text-white">
                                  <i class="fas fa-credit-card"></i>
                                </span>
                            </a>
                            <a href="./mytour/tripdelslot/<?=$tour['trip_id']?>/<?=$tour['tripSlot_id']?>" 
                                onClick="return confirm('ยกเลิกการจอง ?');"
                                class="button is-danger">
                                <span class="icon has-text-white">
                                  <i class="fas fa-trash-alt"></i>
                                </span>
                            </a>
                        </td>
                    </tr>
                    <?php $i++;}?>
                </tbody>
            </table>
        </article>
    </div>
</div>
</div>
<?php $this->render('Components/Modal_payment');?>