<?php
    class userDTO
    {
        private $id_user;
        private $first_name;
        private $last_name;

        public function __construct($id_user, $first_name, $last_name)
        {
            $this->first_name = $first_name;
            $this->id_user = $id_user;
            $this->last_name = $last_name;
        }

        public function get_first_name()
        {
            return $this->first_name;
        }

        public function get_last_name()
        {
            return $this->last_name;
        }
    }
?>