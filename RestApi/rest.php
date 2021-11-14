<?php 
    class Rest{
        public function __construct()
        {
           $handler = fopen('php://input','r');
           $request = stream_get_contents($handler);
           echo $request;

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

        }

        public function returnResponse()
        {


        }
    }
?>