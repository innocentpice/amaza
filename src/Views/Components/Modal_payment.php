<div id="payment-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">แจ้งชำระเงิน</p>
                <button class="delete" aria-label="close" onClick="$('#payment-modal').removeClass('is-active');"></button>
            </header>
            <form action="./mytour/payment" method="post">
            <section class="modal-card-body">
                <div class="field-body">
                    <div class="field">
                        <label class="label">หมายเลขอ้างอิง</label>
                        <div class="control">
                            <input id="trip_id" class="input" type="hidden" name="trip_id" value="">
                            <input class="input" type="text" placeholder="หมายเลขอ้างอิง" name="payment_number" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">ยอดที่ชำระ</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="ยอดที่ชำระ" name="payment_price" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">เวลาที่ชำระ</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="เวลาที่ชำระ" name="payment_log" value="">
                        </div>
                    </div>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-fullwidth is-info">ยืนยัน</button>
            </footer>
        </form>
    </div>
</div>