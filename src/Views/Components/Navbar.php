<nav class="navbar is-link" role="navigation" aria-label="dropdown navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="./">
                <h1 class="title" style="color:#fff;">Amaza</h1>
            </a>
            <?php 
                if(isset($_SESSION['auth'])){
            ?>
            <div class="navbar-burger burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php }else{?>
            <div class="navbar-item navbar-burger burger" style="width:auto !important;">
                <button class="button is-info is-hidden-desktop" onClick="$('#login-modal').addClass('is-active');">เข้าสู่ระบบ</button>
            </div>
            <?php }?>
        </div>

        <div class="navbar-end">
            <?php 
                if(isset($_SESSION['auth'])){
            ?>
            <nav id="NavDropdown" class="navbar is-hidden-touch">
                <div class="navbar-item has-dropdown">
                    <a id="member_menu" class="navbar-link is-hidden-touch" style="background-color:hsl(217, 71%, 53%);">
                      <?=$_SESSION['auth']['member_username']?>
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="./mytour">
                            รายการทัวร์ของฉัน
                        </a>
                        <a class="navbar-item " href="./company">
                            ธุรกิจของฉัน
                        </a>
                        <a class="navbar-item " href="./profile">
                            ตั้งค่าโปรไฟล์
                        </a>
                        <hr class="navbar-divider ">
                        <div class="navbar-item">
                            <a href="./logout"><button class="button is-danger is-fullwidth">ออกจากระบบ</button></a>
                        </div>
                    </div>
                </div>
            </nav>
            <?php }else{?>
            
            <div class="navbar-item is-hidden-touch">
                <button class="button is-info is-fullwidth" onClick="$('#login-modal').addClass('is-active');">เข้าสู่ระบบ</button>
            </div>
            
            <?php }?>
        </div>
    </div>
</nav>