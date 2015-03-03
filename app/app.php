<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobopening.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
            <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <title>Your Job Opening</title>
            </head>
            <body>
                <div class='container'>
                    <h1>Post a Job!</h1>
                        <form action='/view_job'>
                            <div class='form-group'>
                                <label for='title'>Enter Job Title</label>
                                <input id='title' name='title' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='description'>Enter Job Description</label>
                                <input id='description' name='description' class='form-control' type='text'>
                            </div>
                            <div class='form-group'>
                                <label for='contact'>Enter Contact Information</label>
                                <input id='contact' name='contact' class='form-control' type='text'>
                            </div>
                            <button type='submit' class='btn-success'>Submit</button>
                        </form>
                    </div>
            </body>
        </html>";
    });

    $app->get("/view_job", function() {
            $new_job = new Opening($_GET["title"], $_GET["description"], $_GET["contact"]);
            return "
            <!DOCTYPE html>
            <html>
                <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                    <title>Current Job Opening</title>
                </head>
                <body>
                    <div class='container'>
                    <h1>Current job Opening:</h1>
                     <p>Title: " . $new_job->title . "</p>
                     <p>Basic Job Description: " . $new_job->description . "</p>
                     <p>Posted by: " . $new_job->contact . "</p>
                    </div>
                </body>
            </html>
            ";
    });


    return $app;

?>
