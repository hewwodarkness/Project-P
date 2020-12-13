<?php include "db_conn1.php"; ?>
<?php
$img_name = $_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_name = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];
// -------------------------------------------------------------
if ($error === 0) {
    if ($img_size > 12500000000) {
        $em = "Sorry, your file is too large.";

    }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png","gif"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            // Insert into Database
            
                $id_1 = abs( crc32( uniqid() ) );;;
                $dpi = $_POST["dpi"];
                $hz = $_POST["hz"];
                $edpi = $_POST["edpi"];
                $name = $_POST["name"];
                $sensitivity = $_POST["sensitivity"];
                $zoom = $_POST["zoom"];
                $mouseaccel = $_POST["mouseaccel"];
                $windowssens = $_POST["windowssens"];
                $rawinput = $_POST["rawinput"];
                $crosshair = $_POST["crosshair"];
                $viewmodel = $_POST["viewmodel"];
                $cl_bob = $_POST["cl_bob"];


            $sql = "INSERT INTO main (id, dpi, hz, edpi, img, name, sensitivity, zoom, mouseaccel, windowssens, rawinput, crosshair, viewmodel, cl_bob)
            VALUES ('$id_1', '$dpi', '$hz', '$edpi', '$new_img_name', '$name', '$sensitivity', '$zoom' ,'$mouseaccel','$windowssens','$rawinput','$crosshair','$viewmodel', '$cl_bob')";
            mysqli_query($conn, $sql);
        }else {
            $em = "You can't upload files of this type";
        }
    }
}else {
    $em = "unknown error occurred!";
}
header('Location: csplayerlist.php ');
$conn->close();
?>