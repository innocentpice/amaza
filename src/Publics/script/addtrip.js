function preview_images() {
    var total_file = document.getElementById("images").files.length;
    for (var i = 0; i < total_file; i++) {
        $('#image_preview').append("<img class='img-responsive' src='" + URL.createObjectURL(event.target.files[i]) + "' style='width:255px; height:169px;'>");
    }
}

$(document).ready(() => {
    tinymce.init({
        selector: '#Addtrip_detail',
        height: 450,
        setup: function (editor) {
            editor.on('change', function (e) {
                $('#Addtrip_detail').html(this.getContent());
            });
        },
        plugins: 'preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat'
    });
});
