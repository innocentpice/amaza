<footer class="footer" style="background:#fff;margin-top:2.5em;">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>ออกแบบและพัฒนาโดย</strong>
                <a href="">Amaza Delvoloper Team.</a> &nbsp;มหาวิทยาลัยเทคโนโลยีพระจอมเกล้า พระนครเหนือ
                <br/>เว็บไซต์นี้เป็นส่วนหนึ่งของวิชา E-Commerce ภาควิชาคอมพิวเตอร์
            </p>
        </div>
    </div>
</footer>

</div>
<?php
    if(isset($this->GoTo)){
        empty($this->GoTo['delay'])?'3000':$this->GoTo['delay'];
        echo "<script> setTimeout(()=>{ window.location = '".$this->GoTo['url']."' },".$this->GoTo['delay']."); </script>";
    }
?>

<?php
    if(isset($this->ReactInject)){
?>
<!-- React -->
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<?php
            foreach ($this->ReactInject as $JS) {
                echo '<script defer type="text/babel" src="';
                echo $JS;
                echo '"></script>';
            }
        }
?>


<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js "></script>
<script defer src="<?=URL_Public?>/script/script.js "></script>
<script>window.URL_Path = "<?=URL_Path?>";</script>

<?php
    if(isset($this->JSInject)){
            foreach ($this->JSInject as $JS) {
                echo '<script defer src="';
                echo $JS;
                echo '"></script>';
            }
        }
?>
<?php
    if(isset($this->JSAlert)){
            foreach ($this->JSAlert as $alert) {
                echo '<script>';
                echo 'alert("'.$alert.'");';
                echo '</script>';
            }
        }
?>

</body>
</html>