<div class="container" style="margin-top:3.5em;">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box">

                <h3 class="title is-3 has-text-centered	">Add Trip Form</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Trip Name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input class="input" maxlength="30" type="text" placeholder="Trip Name" name="trip" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Province</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div id="province_select" class="control"></div>
                            </div>
                        </div>
                    </div>
    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Detail</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea id="Addtrip_detail" class="textarea" placeholder="Detail" name="detail" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Price</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="number" placeholder="Price" name="price" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Guest</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="number" placeholder="Guest" name="guest" required>
                                </div>
                            </div>
                        </div>
                    </div>         
    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">IMG</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <div class="file">
                                        <label class="file-label">
                                        <input class="file-input" type="file" id="images" name="images[]" onchange="preview_images();" multiple required/>
                                        <span class="file-cta">
                                            <span class="file-icon">
                                                <i class="fas fa-upload"></i>
                                            </span>
                                            <span class="file-label">
                                                Choose a file…
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label"></label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <div class="row" id="image_preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary">
                                        Add Trip
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
</div>