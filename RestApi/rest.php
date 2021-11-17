<?php 
    require_once('./constants.php');
    class Rest{

        protected $request;
        protected $serviceName;
        protected $param;

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
            $data = json_decode($this->request,true);


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
            $api = new API;
            // Reflection Method
            $rMethod = new ReflectionMethod('API',$this->serviceName);

            if(!method_exists($api,$this->serviceName)){
                $this->ThrowError(API_DOST_NOT_EXIST,"API does not exist");
            }
            $rMethod->invoke($api);
        }

        public function validateParameters($fieldName,$value,$dataType,$required = true)
        {
            // validate where it exist
            if($required == true && empty($value) == true)
            {
                $this->ThrowError(VALIDATE_PARAMETER_REQUIRED, $value ." parameter is required");
            }
            // validate for data type
            switch ($dataType) {
                case BOOLEAN:
                    if(!is_bool($value)){
                        $this->ThrowError(VALIDATE_PARAMETER_DATATYPE,"Datatype is not valid for " . $fieldName) . ". It should be boolean";
                    }
                    break;
                case INTEGER:
                    if(!is_numeric($value)){
                        $this->ThrowError(VALIDATE_PARAMETER_DATATYPE,"Datatype is not valid for " . $fieldName . ". It should be numeric");
                    }
                    break;
                case STRING:
                        if(!is_string($value)){
                            $this->ThrowError(VALIDATE_PARAMETER_DATATYPE,"Datatype is not valid for " . $fieldName . ". It should be string");
                        }
                        break;    
                default :
                $this->ThrowError(VALIDATE_PARAMETER_DATATYPE,"Datatype is not valid for " . $fieldName);
                        break;           
            }
            return $value;

        }

        public function ThrowError($code,$messege)
        {
            header("content_type: application/json");
            $errorMsg= json_encode(['error'=>['status'=>$code,'message'=>$messege]]);
            echo $errorMsg;
            exit;
        }

        public function returnResponse($code,$data)
        {
            header("content_type: application/json");
            $response= json_encode(['response'=>['status'=>$code,'result'=>$data]]);
            echo $response;
            exit;

        }
    }
?>