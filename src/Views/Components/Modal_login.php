<div id="login-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        
            <header class="modal-card-head">
                <p class="modal-card-title">เข้าสู่ระบบ</p>
                <button class="delete" aria-label="close" onClick="$('#login-modal').removeClass('is-active');"></button>
            </header>
            <form action="../login" method="post">
            <section class="modal-card-body">
                <div class="field-body">
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="USERNAME" name="username" value="Administrator">
                        </div>
                    </div>
                </div>
                <div class="field-body" style="margin-top:1em;">
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input" type="password" placeholder="PASSWORD" name="password" value="123456">
                        </div>
                    </div>
                </div>
                <div class="has-text-right" style="margin-top:20px;">
                    <a href="./register">ยังไม่ได้เป็นสมาชิก?</a>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-fullwidth is-info">ยืนยัน</button>
            </footer>
        </form>
    </div>
</div>