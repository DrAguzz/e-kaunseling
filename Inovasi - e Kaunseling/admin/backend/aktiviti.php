<?php
    include("../../database/config.php");

    $tajuk = $_POST['tajuk'];
    $tarikh = $_POST['tarikh'];
    $image = $_FILES['poster'];
    $detail = $_POST['detail'];
    $er = "";

    if (empty($er)) {
        $img_name = $image['name'];
        $img_size = $image['size'];
        $img_tmp = $image['tmp_name'];
        $error = $image['error'];
        
        if ($img_size > 1250000) { // Adjust the size limit as needed
            $er = "Size is too large";
            // header('location: ./.php');
            exit();
        } else {
            $image_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $image_ex_lc = strtolower($image_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');

            if (in_array($image_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("Aktiviti-", true) . '.' . $image_ex_lc;
                $img_upload_path = '../../upload/aktiviti/' . $new_img_name;
                move_uploaded_file($img_tmp, $img_upload_path);

                $sql = mysqli_query($conn, "INSERT INTO aktiviti VALUES ('', '$tajuk', '$tarikh', '$new_img_name', '$detail')");

                echo "
                <script>
                    alert('Maklumat berjaya di hantar');
                    window.location.href = '../aktiviti.php';
                </script>
                ";

                exit();
            } else {
                // $er = "File tidak dapat digunakan";
                echo "
                <script>
                    alert ('Gambar tidak berjaya di hantar');
                    window.location.href = '../aktiviti.php';
                </script>
                ";
                // header('location: ../index.php');
                exit();
            }
        }
    } else {
        // $er = "Unknown file";
        echo "
                <script>
                    alert ('Maklumat gagal di hantar');
                    window.location.href = '../aktiviti.php';
                </script>
                ";
        // header('location: ../aktiviti.php');
        exit();
    }
?>
