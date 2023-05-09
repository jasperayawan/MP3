<?php

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
?>