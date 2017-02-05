window.onload = function() {

    var fileInput = document.getElementById('foodpic');
    var fileDisplayArea = document.getElementById('fileDisplayArea');


    fileInput.addEventListener('change', function(e) {
        var file = fileInput.files[0];
        var imageType = /image.*/;

        if (file.type.match(imageType)) {
            var reader = new FileReader();

            reader.onload = function(e) {
                fileDisplayArea.innerHTML = "";

                var img = new Image();
                img.src = reader.result;
                img.style.height='100px';
                img.style.width='100px';

                fileDisplayArea.appendChild(img);
            }

            reader.readAsDataURL(file);
        } else {
            fileDisplayArea.innerHTML = "File not supported!"
        }
    });

}/**
 * Created by yanghu on 2/4/17.
 */
