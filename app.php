<form action="odev1.php" method="post">
    <label>Yas:</label>
    <input type="text" name="yas" />
    <input type="submit" name="submit" />
</form>

<?php
//$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
if(isset($_POST['submit'])){
if(!empty($_POST['yas'])){
    $yas=$_POST['yas'];
    //var_dump($yas); 
    $age=(int)$yas;
    
    switch($age){
        case($age>=0 && $age<=14):
          echo"<h1>Çocuk</h1>"."\n";
          break;
          case($age<=24 && $age>=15):
              echo"<h1>Genç</h1>"."\n";
              break;
              case($age<=64 && $age>=25):
                  echo"<h1>Yetişkin</h1>"."\n";
                  break;
                  case($age>=65):
                      echo"<h1>Yaşlı</h1>"."\n";
                      break;
                      default:
                      break;
  
    }
}
else{
    echo"hata boş bırakılamaz!";
}
}

 

?>
