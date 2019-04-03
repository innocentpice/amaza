<div class="container" style="margin-top:2.5em;">
    <div class="columns is-centered">
        <div class="column is-5">
            <article class="tile is-child box">
                <form  method="post">
                    <nav class="level">
                        <div class="level-item">
                            <p class="subtitle is-3">
                                <strong>แก้ไขข้อมูลส่วนตัว</strong>
                            </p>
                        </div>
                    </nav>
                    <div class="is-divider" data-content="ข้อมูลผู้ใช้"></div>
                    <div class="field">
                        <div class="control">
                            <p>ชื่อผู้ใช้</p>
                            <input class="input <?php echo $this->Form_err == 23000 ? 'is-danger':'';?>" type="text" placeholder="" name="username" value="<?=$_SESSION['auth']['member_username']?>" disabled>
                            <?php if($this->Form_err == 23000){?>
                            <p class="help is-danger">ชื่อผู้ใช้นี้ถูกใช้แล้ว</p>
                            <?php }?>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>รหัสผ่านเดิม</p>
                            <input class="input" type="password" placeholder="" name="passwordold">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>รหัสผ่านใหม่</p>
                            <input class="input" type="password" placeholder="" name="newpassword">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>ชื่อ</p>
                            <input class="input" type="text" placeholder="" name="name" value="<?=$_SESSION['auth']['member_name']?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>นามสกุล</p>
                            <input class="input" type="text" placeholder="" name="surname" value="<?=$_SESSION['auth']['member_surname']?>" required>
                        </div>
                    </div>
                    <div class="is-divider" data-content="ที่อยู่"></div>
                    <div class="field">
                        <div class="control">
                            <p>บ้านเลขที่</p>
                            <?php $address = explode(";",$_SESSION['auth']['member_address']); ?>
                            <input class="input" type="text" placeholder="" name="h_number" value="<?=$address[0]?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>ตำบล</p>
                            <input class="input" type="text" placeholder="" name="sub_district" value="<?=$address[1]?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>อำเภอ</p>
                            <input class="input" type="text" placeholder="" name="district" value="<?=$address[2]?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>จังหวัด</p> 
                            <input class="input" type="text" placeholder="" name="province" value="<?=$address[3]?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>รหัสไปรษณีย์</p>
                            <input class="input" type="text" placeholder="" name="zip" value="<?=$address[4]?>" required>
                        </div>
                    </div>
                    <div class="field-body">
                        <div class="column">
                            <button type="submit" class="button is-info is-fullwidth">ยืนยัน</button>
                        </div>
                    </div>
            </article>
        </div>
    </div>
</div>


