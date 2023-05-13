<?php

    //Frontend purpose data
    //change this url once you deploy this system
    define('SITE_URL','http://127.0.0.1/MP3/'); 
    define('ABOUT_IMG_PATH',SITE_URL.'assets/about/');
    define('FACILITIES_IMG_PATH',SITE_URL.'assets/facilities/');
    define('ROOMS_PATH',SITE_URL.'assets/rooms/');


    //Backend upload process needs this data

    define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/assets/');
    define('ABOUT_FOLDER','about/');
    define('FACILITIES_FOLDER','facilities/');
    define('ROOMS_FOLDER','rooms/');


    function adminLogin(){
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
            echo"
                <script>
                    window.location.href='../admin/index.php';
                </script>
            ";
            exit;
        }
    }

    function redirect($url){
        echo"
            <script>
                window.location.href='$url'
            </script>
        ";
        exit;
    }

    function alert($type,$msg){
         
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
        echo <<<alert
                    <div class="alert $bs_class alert-dismissable fade show custom-alert" role="alert">
                        <strong class="me-3">$msg</strong> 
                        <button 
                            type="button" 
                            class="btn-close" 
                            data-bs-dismiss="alert"
                            aria-label="close">
                        </button>
                    </div>
                alert;
    }

    function uploadImage($image, $folder)
    {
        $valid_mime = ['image/jpeg','image/png','image/webp'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime)){

            //invalid image mime or format
            return 'inv_img';
        }
        else if(($image['size'] / (1024 * 1024))>2){
            
            //invalid size greater than 2mb
            return 'inv_size';
        }
        else{
            $extention = pathinfo($image['name'],PATHINFO_EXTENSION);
            $randomName = 'IMG_'.random_int(11111,99999).".$extention";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$randomName;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $randomName;
            }
            else{
                return 'upd_failed';
            }
        }
    }

    function deleteImage($image,$folder)
    {
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
            return true;
        }
        else{
            return false;
        }
    }

    function uploadSVGImage($image, $folder)
    {
        $valid_mime = ['image/svg+xml'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime)){

            //invalid image mime or format
            return 'inv_img';
        }
        else if(($image['size'] / (1024 * 1024))>1){
            
            //invalid size greater than 1mb
            return 'inv_size';
        }
        else{
            $extention = pathinfo($image['name'],PATHINFO_EXTENSION);
            $randomName = 'IMG_'.random_int(11111,99999).".$extention";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$randomName;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $randomName;
            }
            else{
                return 'upd_failed';
            }
        }
    }
?>