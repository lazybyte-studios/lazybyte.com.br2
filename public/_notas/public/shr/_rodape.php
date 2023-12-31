    <footer class="badge">
        <!-- <a href="javascript:;" onclick="window.print(); return false;" >Baixar PDF</a> -->
        <!-- <a href="https://drive.google.com/file/d/1gi3RwFgwVg3xG2bNRPdHIrmwCgcv4I2L/view?usp=drive_link">Baixar PDF</a> -->
        <a href="/notas">Retornar <i class="bi bi-box-arrow-left"></i></a>
    </footer>

    <div class="progress"></div>

    <script src="../../vendor/shr/shower/shower.js"></script>
    <script src="../../vendor/plantUML/jquery.min.js"></script>
    <script src="../../vendor/plantUML/plantuml-encoder.min.js"></script>
    <!-- Copyright © 3000 Yours Truly, Famous Inc. -->

    <script>
        $("uml").each(function() {
            var src = "//www.plantuml.com/plantuml/img/" + window.plantumlEncoder.encode( $(this).text() )
            $(this).replaceWith($('<img>').attr('src', src));
        });
    </script>


</body>
</html>
