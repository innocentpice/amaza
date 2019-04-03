<div class="container" style="margin-top:2.5em;">
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <?php
                if(isset($this->BCList)){
                    $index=0;
                    $last= count($this->BCList)-1;
                    foreach ($this->BCList as $bc) {
                        if($index == $last){
                            echo '<li class="is-active"><a href="'.$bc[0].'" aria-current="page">'.$bc[1].'</a></li>';
                        }else{
                            echo '<li><a href="'.$bc[0].'">'.$bc[1].'</a></li>';
                        }
                        $i++;
                    }
                }
            ?>
        </ul>
    </nav>
</div>