<html>
    <head>
        <title>Portfolio Desarrollos Web</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
        <script src="index.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.waitforimages/1.5.0/jquery.waitforimages.min.js"></script>
    </head>
    <body data-options='<?php echo json_encode(glob("img/*.{jpg,png,gif}", GLOB_BRACE)); ?>'>
        <form style="padding: 20px;">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <button type="button" id="nextImageBtn" class="btn btn-default">
                        <strong>
                            <span id="loadingAnimation" style="display: none;" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>
                            Siguiente animaci&oacute;n <span id="numeroImagen"></span>
                            <span id="animaciones"></span>
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </strong>
                    </button>
                </div>
            </div>        </form>
    </body>
</html>