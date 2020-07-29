Php+html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KALKULATOR</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'] ;
        $bil2= $_POST['bil2'] ;
        $operasi = $_POST ['operasi'] ;
        switch($operasi) {
            case 'tambah' :
            $hasil = $bil1+$bil2 ;
            break;
            case 'kurang' :
            $hasil = $bil1-$bil2 ;
            break;
            case 'kali' :
            $hasil = $bil1*$bil2 ;
            break;
            case 'bagi' :
            $hasil = $bil1/$bil2 ;
            break;
        }
    }
    ?>
    <div class= "KALKULATOR">
        <h2 class= ' judul'>KALKULATOR</h2>
        <form method="POST" action="kalkulator.php">
        <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="masukan bilangan" required>
        <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="masukan bilangan" required>
        <select class="opt" name="operasi" >
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="submit" name="hitung" value="SUBMIT" class="tombol">
        </form>
        <?php
            if(isset($_POST['hitung'])){?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{?>
            <input type="text" value="0" class="bil">
            <?php } ?>
            </h2>
</body>
</html>

Css nya
.body{
    background: "" ;
    font-family: 'Times New Roman', Times, serif;
}
.KALKULATOR{
    width: 330px ;
    margin: 1000px auto ;
    border-radius: 5px ;
    background-color:rgba(71, 109, 223, 0.8) ;
    padding: 10px 20px 50px 20px  ;
    box-shadow: 0px 10px 20px 0px rgba(40, 30, 49, 0.5);
    
}
.bil{
    width: 300px ;
    margin: 5px ;
    border: none;
    font-size: 16pt ;
    border-radius: 5px;
    padding: 10px ;
}
.opt{
    font-family: 'Times New Roman', Times, serif ;
    font-size: 16pt ;
    border: none ;
    width: 190px ;
    margin: 5px ;
    border-radius: 5px ;
    padding: 10px ;
}
.tombol{
    background-color: royalblue ;
    border-top: none ;
    border-right: none;
    border-left: none ;
    border-radius: 5px;
    padding: 10px 20px ;
    color: rgba(191, 245, 245, 0.7) ;
    font-size: 15pt ;
    border-bottom: 4px rgb(100, 100, 168) ;
}
.brand{
    color: orange ;
    font-size: 11pt ;
    text-decoration: none ;
    margin: 12px;
}
,judul{
    text-align: center ;
    color: aliceblue ;
    font-weight: normal ;
}
