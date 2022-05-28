        <?php 
require_once("db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $category=$_POST["category"];
    $date1=$_POST["date1"];
    $cost=$_POST["cost"];
    $data = ["$category", "$date1", "$cost"];
    $sql = 'INSERT INTO `chrismoney` (`category`, `date`, `cost`) VALUES (?, ?, ?)';
    $sth = $PDO->prepare($sql);
    try {
        if ($sth->execute($data)) {
            echo "<script>alert(‘新增完成’);</script>";
            echo "<a href='insertn.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:1;url=insertn.php");
        } else {
            echo 'ERROR';
        }
    } catch (PDOException $e) {
        echo '新增失敗';
    }
    }

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='list.php';
    </script>"; 
    
    return false;
} 
?>