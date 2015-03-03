<?php

    class Opening
    {
        public $title;
        public $description;

        function __construct($job_title, $job_des)
        {
            $this->title = $job_title;
            $this->description = $job_des;
        }

    }

    class Contact
    {
        private $name;
        private $email;
        private $phone;

        function __construct($c_name, $c_email, $c_phone)
        {
            $this->name = $c_name;
            $this->email = $c_email;
            $this->phone = $c_phone;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }
        function setEmail($new_email)
        {
            $this->email = $new_email;
        }
        function setPhone($new_phone)
        {
            $this->phone = $new_phone;
        }
        function getName()
        {
            return $this->name;
        }
        function getEmail()
        {
            return $this->email;
        }
        function getPhone()
        {
            return $this->phone;
        }
    }

?>
