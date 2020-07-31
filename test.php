<?php
    $stt = array(1,2,3,4,5,6);
    $ten = array ("binz","bòn","mũm","su","đậu","gấu");
    $gt = array("đực","đực","đực","đực","cái","đực");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td ,tr {
            border: 1px solid black;
            border-collapse: collapse;
            width:30%;
        }
    </style>
    </head>
    <body>
        <table border = "1">
            <tr>
                <th>STT</th>
                <th>TÊN</th>
                <th>GIỚI TÍNH</th>
            </tr>
            <!--  Mở vòng for -->
            <?php
                for($i=0;$i<6;$i++){
                    ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo ($ten[$i]); ?></td>
                        <td><?php echo ($gt[$i]); ?></td>
                    </tr>
            <?php    
              }
            ?>
            <!-- Đóng vòng for -->
        </table>
        <?php
        // Kiểm tra có phải người dùng click vào nút Kiểm Tra
        if (isset($_POST['tenmeo'])) {
            $tenmeo = $_POST['tenmeo'];
            echo "tên mèo: $tenmeo <br>";
            switch ($tenmeo) {
                case "binz":
                    echo "màu lông: tam thể";
                    break;
                case "bòn":
                    echo "màu lông: Trắng";
                    break;
                case "mũm":
                    echo "màu lông: xám tro";
                    break;
                case "su":
                    echo "màu lông: nâu";
                    break;
                case "đậu":
                    echo "màu lông: Trắng xám";
                    break;
                case "gấu":
                    echo "màu lông: vằn";
                    break;
                default:
                    echo "k có con mèo này trong nhà";
                    break;
            }
        }
        // {
        //     var_dump($_POST);
        //     // Lấy giá trị của ô input có tên là number theo phương thức POST
        //     $tenmeo = (int)$_POST['tenmeo'];
        //     if ($tenmeo % 7 == 0){
        //         echo "$number chia hết cho 7";
        //     }
        //     else {
        //         echo "$number KHÔNG chia hết cho 7";
        //     }
        // }
            //aaaaaaaaaaaaaaa";
            //$a = TRUE;
            // $b = FALSE;
            // $att = FALSE && TRUE;
            // echo $att;
            // var_dump($att);
            // $tenmeo = array("binz","bòn","mũm","su","đậu","gấu");
            
         // var_dump($_POST);
        ?>
        <!-- <div> -->
            <!-- <?php
            // $meomeo = array('1' =>"Binz" ,'2'=>"Bòn",'3'=>"Mũm" );
            // foreach ($meomeo as $i=>$j)
                // echo "$i-$j <br>"
            ?> -->
        <!-- </div> -->
        <div>
            <form method="post" action="">
                <input type="text" name="tenmeo" value=""/>
                <input type="submit" name="cal" value="Kiểm tra"/>
            </form> 
        </div>
    </body>
</html>