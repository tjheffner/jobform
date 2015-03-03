<?php

    class Opening
    {
        public $title;
        public $description;
        public $contact;

        function __construct($job_title, $job_des, $job_contact)
        {
            $this->title = $job_title;
            $this->description = $job_des;
            $this->contact = $job_contact;
        }





    }

?>
