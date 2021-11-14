<?php 
    require_once('./constants.php');
    class Rest{

        protected $request;
        protected $serviceName;
        protected $params;

        public function __construct()
        {
            // If request method is not POST throw an error
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                $this->ThrowError(REQUEST_METHOD_NOT_VALID,"Request Method is not valid");
            }

           $handler = fopen('php://input','r');
           $this->request = stream_get_contents($handler);
           $this->validateRequest();
 
        }

        public function validateRequest()
        {
            // If content type is not application/json throw an error
            if($_SERVER['CONTENT_TYPE'] !== 'application/json'){
                $this->ThrowError(REQUEST_CONTENTTYPE_NOT_VALID,"REQUEST_CONTENTTYPE_NOT_VALID");
            }
            $data = json_decode($this->request);

            if(!isset($data['name']) || $data['name'] == ""){
                $this->ThrowError(API_NAME_REQUIRED,"API name required");
            }
            $this->serviceName = $data['name'];

            if(!is_array($data['param']) ){
                $this->ThrowError(API_PARAM_REQUIRED,"API Param is required");
            }
            $this->param = $data['param'];
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