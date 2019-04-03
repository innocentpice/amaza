<div class="container" style="margin-top:2.5em;">
    <div class="columns is-centered" style="padding:0px 2em;">
        <div class="column is-one-quarter">
            <article class="message">
                <div class=" message-header">
                    <p>
                        รูปโปรไฟล์

                    </p>
                </div>
                <div class="message-body" style="background:white;">
                    <img src="<?=URL_Public?>/images/user/<?=$_SESSION['auth']['member_id']?>.png" style="width:100%;height:100%;">
                    <form method="post" enctype="multipart/form-data">
                        <input type="file"  name="image" onchange="form.submit();" />
                    </form>
                </div>
            </article>
        </div>
        <div class="column is-three-quarters">
            <article class="message">
                <div class=" message-header">
                    <p>
                        ข้อมูลส่วนตัว
                        <a href="./profile/edit_profile">แก้ไข</a>
                    </p>
                </div>
                <div class="message-body content" style="background:white;">
                    <ul>
                        <li><?=$_SESSION['auth']['member_name']?> <?=$_SESSION['auth']['member_surname']?></li>
                        <li><?=$_SESSION['auth']['member_address']?></li>
                    </ul>
                </div>
            </article>
            <article class="message ">
                <div class="message-header">
                    <p>เกี่ยวกับฉัน</p>
                </div>
                <div class="message-body" style="background:white;">
                    <p>คะแนนการเที่ยว: 100</p>
                </div>
            </article>
        </div>
    </div>
</div>
