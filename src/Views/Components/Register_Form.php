<div class="container" style="margin-top:2.5em;">
    <div class="columns is-centered">
        <div class="column is-5">
            <article class="tile is-child box">
                <form id="registerForm" method="post" action="./register">
                    <nav class="level">
                        <div class="level-item">
                            <p class="subtitle is-3">
                                <strong>สมัครสมาชิก</strong>
                            </p>
                        </div>
                    </nav>
                    <div class="is-divider" data-content="ข้อมูลผู้ใช้"></div>
                    <div class="field">
                        <div class="control">
                            <p>ชื่อผู้ใช้</p>
                            <input class="input <?php echo $this->Form_err == 23000 ? 'is-danger':'';?>" type="text" placeholder="" name="username" value="<?=$_POST['username']?>" required>
                            <?php if($this->Form_err == 23000){?>
                            <p class="help is-danger">ชื่อผู้ใช้นี้ถูกใช้แล้ว</p>
                            <?php }?>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>รหัสผ่าน</p>
                            <input class="input" type="password" placeholder="" name="password" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>ยืนยันรหัสผ่าน</p>
                            <input class="input" type="password" placeholder="" name="confirm" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>ชื่อ</p>
                            <input class="input" type="text" placeholder="" name="name" value="<?=$_POST['name']?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>นามสกุล</p>
                            <input class="input" type="text" placeholder="" name="surname" value="<?=$_POST['surname']?>" required>
                        </div>
                    </div>
                    <div class="is-divider" data-content="ที่อยู่"></div>
                    <div class="field">
                        <div class="control">
                            <p>บ้านเลขที่</p>
                            <input class="input" type="text" placeholder="" name="h_number" value="<?=$_POST['h_number']?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>ตำบล</p>
                            <input class="input" type="text" placeholder="" name="sub_district" value="<?=$_POST['sub_district']?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>อำเภอ</p>
                            <input class="input" type="text" placeholder="" name="district" value="<?=$_POST['district']?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>จังหวัด</p> 
                            <input class="input" type="text" placeholder="" name="province" value="<?=$_POST['province']?>" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p>รหัสไปรษณีย์</p>
                            <input class="input" type="text" placeholder="" name="zip" value="<?=$_POST['zip']?>" required>
                        </div>
                    </div>
                    <div class="field-body">
                        <div class="column is-2">
                            <button type="submit" class="button is-info">ยืนยัน</button>
                        </div>
                        <div class="column is-2">
                            <a href="./"><button class="button is-danger">ยกเลิก</button></a>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
</div>