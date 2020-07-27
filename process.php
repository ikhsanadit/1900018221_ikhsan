<?php 
        if(isset($_POST['ok'])){
            $konek=mysqli_connect("localhost", "root", "", "contact");
            $nama=$_POST['a'];
            $e_mail=$_POST['b'];
            $pesan=$_POST['message'];
            mysqli_query ($konek,"INSERT INTO contact_us ( nama, email, pesan, date_time) VALUES ('$nama', '$e_mail', '$pesan',current_timestamp())");
            header("location:contact.php");
        }
               
?>
