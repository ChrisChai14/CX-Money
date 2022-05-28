    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>CX 新增消費</title>
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

        <div class=”container”>
            <div class="row justify-content-center">
                <div class="card shadow-lg" style="width: 25rem;">
                    <div class="card-body">
                        <form name="insertForm" method="post" action="inserting.php" onsubmit="return validateForm()">
                            <fieldset>
                                <legend>新增消費</legend>
                                <div class='control-group'>
                                    <label class="form-label text-secondary">消費標籤</label>
                                    <div class='input-group'>
                                        <select class="form-select" name='category' id='category' required>
                                            <option selected>選擇</option>
                                            <option value='食物'>食物</option>
                                            <option value='交通'>交通</option>
                                            <option value='生活用品'>生活用品</option>
                                            <option value='繳費'>繳費</option>
                                            <option value='其他'>其他</option>
                                        </select>
                                    </div>
                                </div><br />
                                <div class='control-group'>
                                    <label class="form-label text-secondary">消費日期</label>
                                    <div class='input-group'>
                                        <input class="form-control" type='date' name='date1'>
                                    </div>
                                </div>
                                <br />
                                <div class='control-group'>
                                    <label class="form-label text-secondary">消費金額</label>
                                    <div class='input-group'>
                                        <input class="form-control" type='number' name='cost' min='1'
                                            placeholder='消費金額'>
                                    </div>
                                </div>
                                <br />
                                <hr>
                                <input type='hidden' name='op' value='add1'>
                                <button type='submit' class='btn'>新增</button>
                    </div>
                </div>
            </div>
        </div>
        </fieldset>
        </form>
    </body>

    </html>