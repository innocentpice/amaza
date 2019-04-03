<div class="container" style="margin-top:2.5em;">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box">
                <form id="search_bar" action="./search" method="get">
                    <div class="search-box ">
                        <div class="field has-addons has-addons-centered">
                            <p class="control ">
                                <a class="button is-static is-medium ">
                                ค้นหา
                            </a>
                            </p>
                            <p class="control is-expanded">
                                <input class="input is-medium" type="text " value="<?=$_GET['keyword']?>" placeholder="ชื่อสถานที่ หมู่บ้าน อำเภอ ตำบล แม่น้ำ น้ำตก" name="keyword">
                            </p>
                            <p class="control ">
                                <a class="button is-success is-medium " style="border: 2px solid rgb(219, 219, 219);" onClick="$('#search_bar').submit();">
                                    <span class="icon is-medium " style="padding:1em; ">
                                      <i class="fas fa-search "></i>
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
</div>