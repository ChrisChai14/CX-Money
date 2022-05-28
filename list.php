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
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>cx WEB記帳</title>
    <style>
    body {
        background-image: url("./gd3.jpg");
        background-size: cover;
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
$datas = array();
// $sql = "select * from `chrismoney` WHERE TO_DAYS(date) = TO_DAYS(NOW()); ";
$sql = "select * from `chrismoney`; ";
    try{
        $sql  = "SELECT * FROM `chrismoney` order by `date` desc;";
        $res  = $PDO -> query($sql);
        $data = $res -> fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo 'ERROR：'.$e -> getMessage();
    }
     $rowCount = count($data);
?>

    <div class=”container”>
        <div class="row justify-content-center">
            <div class="card shadow-lg" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">紀錄</h5>
                    <h6 class="card-subtitle mb-2 text-muted">依照最新日期排序</h6>
                    <table class="table table-sm " style="text-align:center;">
                        <thead style="text-align:center;">
                            <tr style="text-align:center;">
                                <th>類型</th>
                                <th>日期</th>
                                <th>開銷</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- 大括號的上、下半部分 分別用 PHP 拆開 ，這樣中間就可以純用HTML語法-->
                            <?php
                            if($rowCount > 0)
                            {
                                foreach($data as $row)
                                {
                            ?>
                            <tr>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['cost']; ?></td>
                            </tr>
                            <?php
				  }
				}
			?>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</body>

</div>

</html>