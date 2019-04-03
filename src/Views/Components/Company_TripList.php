<div class="container" style="margin-top:3.5em;">
    <div class="columns is-centered">
        <div class="column is-10">
            <article class="tile is-child box">
                <p class="has-text-centered" style="font-size:28px;">
                    <strong>My Trip</strong>
                </p>
                <p>
                    <a href="<?=URL_Path?>/company/addtrip" class="button is-primary">
                        <span class="icon is-small">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span>เพิ่มทริป</span>
                    </a>
                </p>
                <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="width:100%;margin-top:1em;">
                    <thead>
                        <tr>
                            <th class="has-text-centered" style="padding:.5em;">ลำดับ</th>
                            <th class="has-text-centered" style="padding:.5em;">รายการทริป</th>
                            <th class="has-text-centered" style="padding:.5em;width:7.5em;">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;foreach($this->tripList as $trip){?>
                        <tr>
                            <td style="width:3.5em;padding:.7em"><?=$i?></td>
                            <td style="padding:.7em">
                                <p><?=$trip['trip_name']?></p>
                            </td>
                            <td style="padding:.7em">
                                <div class="level-item has-text-centered">
                                    <a href="<?=URL_Path?>/company/mytrip/<?=$trip['trip_id']?>" class="button is-link is-rounded button is-small">รายละเอียด</a>
                                </div>
                            </td>
                        </tr>
                        <?php $i++;}?>
                    </tbody>
                </table>
                </div>
            </article>
        </div>
    </div>
</div>