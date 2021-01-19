<?php 

    class Validate{
        private $data;
        private $errors = [];
        private static $fields = ['klantnaam', 'klantadres', 'klantplaats', 'klantpostcode'];
        public function __construct($post_data){
            $this->data = $post_data;
        }

        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){
                    trigger_error("$field is not present in data");
                    return;
                }
            }
            $this->validateKlantnaam();
            $this->validateKlantadres();
            $this->validateKlantplaats();
            $this->validateKlantpostcode();
            return $this->errors;

        }

        private function validateKlantnaam(){
            $val = trim($this->data['klantnaam']);
            if(empty($val)){
                $this->addError('klantnaam', 'klantnaam mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{2,12}$/', $val)){
                    $this->addError('klantnaam', 'klantnaam moet tussen 2-12 chars & alphanumeric');
                }
            }
        }

        private function validateKlantadres(){
            $val = trim($this->data['klantadres']);

            if(empty($val)){
                $this->addError('klantadres', 'klantadres mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{2,40}$/', $val)){
                    $this->addError('klantadres', 'klantadres moet tussen 2-40 chars & alphanumeric');
                }
            }
        }

        private function validateKlantplaats(){
            $val = trim($this->data['klantplaats']);

            if(empty($val)){
                $this->addError('klantplaats', 'klantplaats mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{2,25}$/', $val)){
                    $this->addError('klantplaats', 'klantplaats moet tussen 2-25 chars & alphanumeric');
                }
            }
        }

        private function validateKlantpostcode(){
            $val = trim($this->data['klantpostcode']);

            if(empty($val)){
                $this->addError('klantpostcode', 'klantpostcode mag niet leeg zijn');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{4,30}$/', $val)){
                    $this->addError('klantpostcode', 'klantpostcode moet tussen 4-30 chars & alphanumeric');
                }
            }
        }
        private function addError($key, $val){
            $this->errors[$key] = $val;
        }
    }
?>