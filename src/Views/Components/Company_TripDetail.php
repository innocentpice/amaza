<?php $myTrip = $this->myTrip;?>
<div class="container" style="margin-top:3.5em;">
    <article class="tile is-child box">
        <div class="columns">
            <div class="column is-one-third is-offset-2" style="margin-top:3em;">
                <h5 class="title is-5">
                    ชื่อ:
                    <?=$myTrip['trip_name']?>
                </h5>
                <h5 class="title is-5">
                    ราคา:
                    <?=$myTrip['trip_price']?>
                </h5>
                <h5 class="title is-5">
                    จำนวนคน:
                    <?=$myTrip['trip_guest']?>
                </h5>
            </div>
        </div>
        <div class="columns" style="margin-top:3em;">
            <div class="column">
                <div class="has-text-centered">
                    <h4 class="subtitle is-4">ยังไม่ได้ชำระเงิน
                        </h4><h4>
                </h4></div>
                <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="margin-top:30px;">
                    <thead>
                        <tr>
                            <th class="has-text-centered " style="padding:.5em ;width:3em;">ลำดับ</th>
                            <th class="has-text-centered" style="padding:.5em;">ชื่อผู้จอง</th>
                            <th class="has-text-centered" style="padding:.5em;">หมายเลขอ้างอิง</th>
                            <th class="has-text-centered" style="padding:.5em;">จำนวนเงิน</th>
                            <th class="has-text-centered" style="padding:.5em;">เวลาโอน</th>
                            <th class="has-text-centered" style="padding:.5em;width:11.5em;">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;foreach($this->tripSlot0 as $slot){?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$slot['member_name']?></td>
                            <td><?=$slot['payment_number']?></td>
                            <td><?=$slot['payment_price']?></td>
                            <td><?=$slot['payment_log']?></td>
                            <td>
                                <div class="level">
                                    <a href="./company/tripcpnfirmslot/<?=$slot['tripSlot_tripID']?>/<?=$slot['tripSlot_id']?>" 
                                        onClick="return confirm('ยืนยันการชำระ ?');"
                                        class="button is-primary is-rounded button is-small">ชำระเเล้ว</a>
                                    <a href="./company/tripdelslot/<?=$slot['tripSlot_tripID']?>/<?=$slot['tripSlot_id']?>" 
                                        onClick="return confirm('ยกเลิกการจอง ?');"
                                        class="button is-danger is-rounded button is-small">ยกเลิกการจอง</a>
                                </div>
                            </td>
                        </tr>
                        <?php $i++;}?>
                    </tbody>
                </table>
                </div>
                <div class="column">
                    <div class="has-text-centered">
                        <h4 class="subtitle is-4">
                            ชำระเงินเรียบร้อยแล้ว
                        </h4>
                    </div>
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="margin-top:30px;">
                        <thead>
                            <tr>
                                <th class="has-text-centered" style="padding:.5em ;width:3em;">ลำดับ</th>
                                <th class="has-text-centered" style="padding:.5em;">ชื่อผู้จอง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($this->tripSlot1 as $slot){?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$slot['member_name']?></td>
                            </tr>
                            <?php $i++;}?>
                        </tbody>
                    </table>
                </div>
            </div>
    </article>
</div>