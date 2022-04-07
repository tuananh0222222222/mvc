<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them thanh voen</title>
</head>
<body>
    <form action="" method="POST">
        <table style="margin: 50px auto;">
            <tr>
                <td>Ten thanh vien:</td>
                <td>
                    <input type="text" name="hoten" placeholder="Ten thanh vien" required >
                </td>
            </tr>
            <tr>
                <td>nam sinh:</td>
                <td>
                    <input type="text" name="namsinh" placeholder="nam sinh" >
                </td>
            </tr>
            <tr>
                <td>que quan:</td>
                <td>
                    <input type="text" name="quequan" placeholder="que quan" >
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="them moi" name="add_user" >
                </td>
            </tr>

            <?php 
            if(isset($thanhcong) && in_array('success' ,$thanhcong )) {
                echo "<p>them moi thanh cong</p>";
            }
             ?>
        </table>
    </form>
</body>
</html>