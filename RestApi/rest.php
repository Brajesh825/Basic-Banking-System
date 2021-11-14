<?php 
    require_once('./constants.php');
    class Rest{
        public function __construct()
        {
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                $this->ThrowError(REQUEST_METHOD_NOT_VALID,"Request Method is not valid");
            }

           $handler = fopen('php://input','r');
           echo $request = stream_get_contents($handler);
 
        }

        public function validateRequest()
        {

        }

        public function processApi()
        {

        }

        public function validateParameters($fieldName,$value,$dataType,$required)
        {

        }

        public function ThrowError($code,$messege)
        {
            header("content_type: application/json");
            $errorMsg= json_encode(['error'=>['status'=>$code,'message'=>$messege]]);
            echo $errorMsg;
            exit;
        }

        public function returnResponse()
        {


        }
    }
?>