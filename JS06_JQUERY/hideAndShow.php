<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleHideAndShow.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!-- CDN jQuery -->
        <script>
            $(document).ready(function(){
                // Sembunyikan semua div
                $(".tombol1").click(function(){
                    $("div").hide();
                });
                // Tampilkan semua div
                $(".tombol2").click(function(){
                    $("div").show();
                });
                // Fade Out: Menghilangkan dengan efek memudar
                $(".tombol3").click(function(){
                    $("#div1").fadeOut();
                    $("#div2").fadeOut("slow");
                    $("#div3").fadeOut(3000);
                });
                // Fade In: Menampilkan dengan efek memudar
                $(".tombol4").click(function(){
                    $("#div1").fadeIn();
                    $("#div2").fadeIn("slow");
                    $("#div3").fadeIn(3000);
                });
                // Fade To: Mengatur opacity/kejelasan secara bertahap
                $(".tombol5").click(function(){
                    $("#div1").fadeTo("slow", 0.15);
                    $("#div2").fadeTo("slow", 0.4);
                    $("#div3").fadeTo("slow", 0.7);
                });
            });
        </script>
    </head>
    <body>
        <p>JQuery Effect</p>
        <div id="div1" class="kotak"></div> <br><br>
        <div id="div2" class="kotak"></div> <br><br>
        <div id="div3" class="kotak"></div> <br><br>
        <button class="tombol1">Sembunyikan</button>
        <button class="tombol2">Tampilkan</button>
        <button class="tombol3">Fade Out</button>
        <button class="tombol4">Fade In</button>
        <button class="tombol5">Fade To</button>
    </body>
</html>
