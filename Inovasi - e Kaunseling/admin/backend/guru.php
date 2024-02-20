<?php
    include("../../database/config.php");
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notel = $_POST['notel'];
    $image = $_FILES['gambar'];
    $submit = $_POST['submit'];
    $er = "";
    if(isset($submit)){
        if (empty($er)) {
            $img_name = $image['name'];
            $img_size = $image['size'];
            $img_tmp = $image['tmp_name'];
            $error = $image['error'];
            
            if ($img_size > 12500000) { // Adjust the size limit as needed
                $er = "Size is too large";
                // header('location: ./.php');
                exit();
            } else {
                $image_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $image_ex_lc = strtolower($image_ex);
    
                $allowed_exs = array('jpg', 'jpeg', 'png');
    
                if (in_array($image_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid( $nama, true) . '.' . $image_ex_lc;
                    $img_upload_path = '../../upload/guru/' . $new_img_name;
                    move_uploaded_file($img_tmp, $img_upload_path);
    
                    $sql = mysqli_query($conn, "INSERT INTO admin VALUES ('', '$nama', 'bilikdtulip', '$email', '$notel','$img_upload_path')");
    
                    echo "
                    <script>
                        alert('Maklumat berjaya di hantar');
                        window.location.href = '../menu/guru.php';
                    </script>
                    ";
    
                    exit();
                } else {
                    // $er = "File tidak dapat digunakan";
                    // echo "
                    // <script>
                    //     alert ('Gambar tidak berjaya di hantar');
                    //     window.location.href = '../menu/guru.php';
                    // </script>
                    // ";
                    // header('location: ../index.php');
                    exit();
                }
            }
        } else {
            // $er = "Unknown file";
            echo "
                    <script>
                        alert ('Maklumat gagal di hantar');
                        window.location.href = '../Menu/.php';
                    </script>
                    ";
            // header('location: ../aktiviti.php');
            exit();
        }
    }
?>