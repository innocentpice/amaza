<section class="hero is-info is-medium ">
    <div class="hero-body ">
        <div class="container ">

            <h1 class="title has-text-centered ">
                ค้นหาทริปที่น่าสนใจ แล้วท่องเที่ยวไปกับเรา
            </h1>
            <h2 class="subtitle has-text-centered ">
                กรอกข้อมูลของสถานที่ที่คุณสนใจในช่องค้นหา
            </h2>
            <form id="search_bar" action="./search" method="get">
                <div class="search-box ">
                    <div class="field has-addons has-addons-centered">
                        <p class="control ">
                            <a class="button is-static is-medium ">
                                ค้นหา
                            </a>
                        </p>
                        <p class="control is-expanded ">
                            <input class="input is-medium" type="text " placeholder="ชื่อสถานที่ หมู่บ้าน อำเภอ ตำบล แม่น้ำ น้ำตก" name="keyword">
                        </p>
                        <p class="control">
                            <a class="button is-success is-medium" style="border: 2px solid #fff;" onClick="$('#search_bar').submit();">
                                <span class="icon is-medium " style="padding:1em; ">
                                  <i class="fas fa-search "></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>