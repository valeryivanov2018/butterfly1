
<?php
if(isset($_POST['save_data'])) {
    $data =  $_POST['save_data']."\n";
    $ret = file_put_contents('data.txt', $data, FILE_APPEND);
    if($ret === false) {
        die('There was an error writing this file');
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row padding15 alert alert-info">
            <div class="col-md-10">
                <div class="col-md-12">
                    <span class=" form-item">Name</span>
                    <input type="text" class="form-control form-item" id="fname" name="fname">
                </div>
                <div class="col-md-12">
                    <span class="form-item">Input</span>
                    <input type="text" class="form-control form-item" id="finput" name="finput">
                </div>
                <div class="col-md-12">
                    <span class=" form-item">VCODEC</span>
                    <input type="text" class="form-control form-item" id="vcodec" name="vcodec">
                </div>
                <div class="col-md-12">
                    <span class=" form-item">ACODEC</span>
                    <input type="text" class="form-control form-item" id="acodec" name="acodec">
                </div>
                <div class="col-md-12">
                    <span class=" form-item">OutPut</span>
                    <input type="text" class="form-control form-item" id="fout" name="fout">
                </div>
            </div>
            <div class="col-md-12 padding15">
                <button class="btn btn-info" onclick="show_text();">Show Result</button>
            </div>
        </div>

        <div class="row padding15 alert alert-success">
            <form action="index.php" method="post">
                <div class="col-md-9">
                    <input type="text" class="text-info form-item text-left" name="save_data" id="show_result" readonly>
                </div>
                <div class="col-md-3">
                    <input type="submit" name="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="index.js"></script>
</html>