<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500&display=swap" rel="stylesheet">
    <title>cx WEB記帳</title>
    <style>
    body {
        background-image: url("./gd3.jpg");
        background-size: cover;
    }

    .box {
        height: 100px;
        background-color: #69F0AE;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <nav class=" navbar navbar-expand-md bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">資訊板</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-right me-auto mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link" href="./insertn.php">新增消費</a></li>
                    <li class="nav-item"><a class="nav-link" href="./list.php">日期紀錄</a></li>
                    <li class="nav-item"><a class="nav-link disabled">CXMONEY</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    require_once 'db.php';
    $data = array();
    $sql = "SELECT SUM(cost) AS 'tcost' FROM `chrismoney` WHERE TO_DAYS(date) = TO_DAYS(NOW());";
        try{
            $res  = $PDO -> query($sql);
            $data = $res -> fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo 'ERROR：'.$e -> getMessage();
        }
        $rowCount = count($data);
    ?>



    <div class="container px-4">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 15rem;">
                    <div class="card-body bac">
                        <h5 class="card-title">本日消費</h5>
                        <p class="card-text">
                            <?php 
                            $rowCount = count($data);
                            if($rowCount > 0) {
                            foreach($data as $row) {
                            echo $row['tcost'];
                            } }?>
                        </p>
                        <a href="./list.php" class="btn btn-success">查看詳細</a>
                    </div>
                </div>
            </div>
        </div>

        <br />
        <div class="card" style="width: 18rem;">
            <div class="card-header ">
                CXMONEY
            </div>
            <li class="list-group-item" style="text-align: center">今日</li>
            <li class="list-group-item" id="current_date" style="text-align: center"></li>
            <script>
            date = new Date();
            year = date.getFullYear();
            month = date.getMonth() + 1;
            day = date.getDate();
            document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
            </script>
            <ul class="list-group list-group-flush">
                <a href="./insertn.php" class="btn btn-light ">新增紀錄
                </a>
                <a href="./list.php" class="btn btn-light">檢視記錄
                </a>
            </ul>
        </div>
    </div>
    <script src="./app.js"></script>

</html>