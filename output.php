<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css" />



<div class="container">
    <h1>Button Preview:</h1>
    <div class="row">
        <div class="col-4">
            <a href="<?php echo $_POST[" url "]; ?>" target="_blank"><button type="button" style="color:<?php echo $_POST["colour3"]; ?> !important; background-color: <?php echo $_POST["backcolor"]; ?> !important; background: linear-gradient(<?php echo $_POST["angle"]; ?>, <?php echo $_POST["colour1"]; ?>, <?php echo $_POST["colour2"]; ?>) !important;" class="btn btn-primary btn-sqr"><?php echo $_POST["title"]; ?></button></a>
        </div>
    </div>

    <div class="row">

        <div class="col">

            <strong>Copy following code to index.html</strong>
            <xmp>
                <div class="col-4"><a href="<?php echo $_POST[" url "]; ?>" target="_blank"><button type="button" style="color:<?php echo $_POST["colour3"]; ?> !important; background-color: <?php echo $_POST["backcolor"]; ?>!important; background: linear-gradient(<?php echo $_POST["angle"]; ?>, <?php echo $_POST["colour1"]; ?>, <?php echo $_POST["colour2"]; ?>) !important;" class="btn btn-primary btn-sqr"><?php echo $_POST["title"]; ?></button></a></div>
            </xmp>




        </div>


    </div>

    <div class="row">
        <div class="col">

            <a href="buttongenerator.php"><button style="color:white !important;" class="btn btn-lg blueback">Back to Generator</button></a>
        </div>
    </div>
</div>
