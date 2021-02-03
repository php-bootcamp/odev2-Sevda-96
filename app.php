<form action="odev2.php" method="post">
    <label for="sex">Cinsiyet seçiniz:</label>
    <select id="sex" name="sex">
        <option value="seçiniz">seçiniz</option>
        <option value="Kadın">Kadın</option>
        <option value="Erkek">Erkek</option>
    </select><br /><br />
    <label>Kilo:</label>
    <input type="text" name="weight" /><br /><br />
    <label>Boy:</label>
    <input type="text" name="height" /><br /><br />
    <label>Yas:</label>
    <input type="text" name="age" /><br /><br />

    <input type="submit" name="submit" />
</form>

<?php
/**
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * $sex = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana 1326.5 yazması gerekiyor.
 */
if(isset($_POST['submit'])){
    if(!empty($_POST['sex']) && !empty($_POST['weight']) && !empty($_POST['height']) && !empty($_POST['age'])){
        
        $sex = $_POST['sex']; // cinsiyet (male/female)
        $weight = $_POST['weight']; // kilo (kg)
        $height =  $_POST['height']; // boy (cm)
        $age =  $_POST['age']; // yaş (sene)

        $weight=$weight;
        $height=$height;
        $age=(int)$age;
        
        switch($sex){
            case($sex=="Kadın"):
                $sonuc=(10*$weight) + (6.25*$height)- (5*$age) +5;
                echo"<h1>Kadın için hesaplanan sonuç:".$sonuc."</h2>";
                break;
                case($sex=="Erkek"):
                   $sonuc2=(10 * $weight) + (6.25 * $height)- (5*$age) -161;
                   echo"<h1>Erkek için hesaplanan sonuç:".$sonuc2."</h2>";
                    break;
                    default:
                    echo"";
                    break; 
                
        }

    }
    else{
        echo"tüm boşlukları doldurunuz!!";
    }
}


 ?>
