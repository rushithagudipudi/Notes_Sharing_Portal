<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values
    $branch = $_POST['branch'];
    $role = $_POST['role'];
    $subject = $_POST['subject'];
    $topic = $_POST['topic'];
    $filetype = $_POST['filetype'];
    $description = $_POST['description'];

    // File upload handling
   
    $fileName = basename($_FILES["notesfile"]["name"]);
    $targetFilePath = '../target/'. $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats (you can customize this list)
    $allowedTypes = array('pdf', 'ppt', 'doc', 'docx', 'txt', 'jpg', 'jpeg', 'png', 'gif', 'zip', 'rar');

    if (in_array($fileType, $allowedTypes)) {
        // Upload file to the server
        if (move_uploaded_file($_FILES["notesfile"]["tmp_name"], $targetFilePath)) {

            // Create a PDO database connection
            $servername = "localhost";
$dbname = 'mysql:host=localhost;dbname=nms';
$username = 'root';
$password = '';


            try {
                $conn = new PDO($db_name, $user_name, $user_password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepare and execute the SQL query
                $sql = "INSERT INTO notes_upload(branch, role, subject, topic, filename, filetype, description)
                        VALUES ('$branch', '$role', '$subject', '$topic', '$fileName', '$fileType', '$description')";

                $conn->exec($sql);
                echo "Notes uploaded successfully!";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $conn = null;
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file format. Allowed formats are: " . implode(', ', $allowedTypes);
    }
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nirula Notes Sharing Portal</title>
  
<style>
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}

body {
     margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
*, ::after, ::before {
    box-sizing: border-box;
}

.topnav {
    overflow: hidden;
    background-color: #fdd;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.topnav a.active {
    background-color: #fdd;
    color: black;
}
a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
}
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 50px 90px;
    text-decoration: none;
    font-size: 30px;
    font-family: Candara;
    font-weight: bold;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
*, ::after, ::before {
    box-sizing: border-box;
}

element.style {
    background-color: #fdfdf8;
}
@media (min-width: 576px)
.navbar-expand-sm {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
}
.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
nav {
    display: block;
}
@media (min-width: 576px)
.navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
}
dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.navbar-item {
//padding: 0 10px;
      margin: 0;
    padding-left: 8px;
   padding-right: 8px;
    font-size: 18px;
    border-right: 1px solid #bbb;
    font-weight: bold;
}

*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.navbar-nav {
      display: flex;
      //flex-direction: row;
      align-items: center;
      justify-content: center;
      list-style: none;
      padding: 0;
    margin-bottom: 0;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
@media (min-width: 576px)
.navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}
.navbar-nav .nav-link {
    padding-right: 10;
    padding-left: 10;
}
.nav-link {
padding : 0 20px;
text-decoration:none;
    color: black;
    font-family: Candara;
}
@media (max-width: 500px) {
      .navbar-nav {
        flex-direction: column;
      }

      .navbar-link {
        padding: 10px 0;
        display: block;
        text-align: center;
      }
    }
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}
.nav-link:hover {
    color: #f33;
    font-weight: bold;
    background-color: #B2ECCB;
    border-radius: 10px;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}











hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}
hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
hr {
    display: block;
    unicode-bidi: isolate;
    margin-block-start: 0.5em;
    margin-block-end: 0.5em;
    margin-inline-start: auto;
    margin-inline-end: auto;
    overflow: hidden;
    border-style: inset;
    border-width: 1px;
}
.mb-5, .my-5 {
    margin-bottom: 3rem!important;
}
.mt-5, .my-5 {
    margin-top: 3rem!important;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.text-center {
    text-align: center!important;
}
.h2, h2 {
    font-size: 2rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
form {
    display: block;
    margin-top: 0em;
    margin-block-end: 1em;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
    padding-top:5px;
}
label {
    cursor: default;
}
select {
    word-wrap: normal;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    margin: 10;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
select:not(:-internal-list-box) {
    overflow: visible !important;
}
user agent stylesheet
select {
    writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-variant-alternates: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    font-optical-sizing: ;
    font-kerning: ;
    font-feature-settings: ;
    font-variation-settings: ;
    text-rendering: auto;
    color: fieldtext;
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    box-sizing: border-box;
    align-items: center;
    white-space-collapse: preserve;
    text-wrap: nowrap;
    -webkit-rtl-ordering: logical;
    background-color: field;
    cursor: default;
    margin: 0em;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
    border-radius: 0px;
}
option {
    font-weight: normal;
    display: block;
    white-space-collapse: collapse;
    text-wrap: nowrap;
    min-height: 1.2em;
    padding: 0px 2px 1px;
}
textarea.form-control {
    height: auto;
}
textarea {
    overflow: auto;
    resize: vertical;
}
textarea {
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-variant-alternates: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: monospace;
    font-optical-sizing: ;
    font-kerning: ;
    font-feature-settings: ;
    font-variation-settings: ;
    text-rendering: auto;
    color: fieldtext;
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    resize: auto;
    cursor: text;
    white-space-collapse: preserve;
    text-wrap: wrap;
    overflow-wrap: break-word;
    background-color: field;
    column-count: initial !important;
    writing-mode: horizontal-tb !important;
    box-sizing: border-box;
    margin: 0em;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
    padding: 2px;
}

[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
.mt-2, .my-2 {
    margin-top: 0.5rem!important;
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
[type=button], [type=reset], [type=submit], button {
    -webkit-appearance: button;
}
button, input {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
input:not([type="range"]):not([type="color"]) {
    writing-mode: horizontal-tb !important;
}
user agent stylesheet
input:not([type="image" i]) {
    box-sizing: border-box;
}
user agent stylesheet
input[type="submit" i] {
    appearance: auto;
    user-select: none;
    white-space-collapse: preserve;
    text-wrap: nowrap;
    align-items: flex-start;
    text-align: center;
    cursor: default;
    box-sizing: border-box;
    background-color: buttonface;
    color: buttontext;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonborder;
    border-image: initial;
}
user agent stylesheet
input:not([type="file" i], [type="image" i], [type="checkbox" i], [type="radio" i]) {
}
user agent stylesheet
input {
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-variant-alternates: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    font-optical-sizing: ;
    font-kerning: ;
    font-feature-settings: ;
    font-variation-settings: ;
    text-rendering: auto;
    color: fieldtext;
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    cursor: text;
    background-color: field;
    margin: 0em;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
</style>
</head>
<body>
  <div class = "topnav">
    <a class="active">Nirula Notes Sharing Portal</a>
  </div>


<nav class="navbar navbar-expand-sm " style="background-color : #fdfdf8">
<ul class="navbar-nav">
  <li class="navbar-item">
    <a class="nav-link" href="C:\Users\RUSHITHA\Documents\NOTES MS\home.html">HOME</a>
  </li>
     <li class="navbar-item">
    <a class="nav-link" href="">VIEW NOTES</a>
  </li>
   <li class="navbar-item">
    <a class="nav-link" href="C:\Users\RUSHITHA\Documents\NOTES MS\upload_notes.html">UPLOAD NOTES</a>
  </li>

   <li class="navbar-item">
    <a class="nav-link" href="C:\Users\RUSHITHA\Documents\NOTES MS\admin_login.html">ADMIN LOGIN</a>
  </li>

<li class="navbar-item">
    <a class="nav-link" href="C:\Users\RUSHITHA\Documents\NOTES MS\developers.html">DEVELOPER</a>
  </li>

</ul>

</nav>


<div class="container mt-5 mb-5 " style="padding-right: 100px; padding-left: 100px;">
   <div>

        <div>

            <h2 class="text-center">Upload Notes</h2>
           <hr>

           <form action = "" method="post" enctype="multipart/form-data">
               <input type="hidden" name="csrfmiddlewaretoken" value="sQcUwuXONJT9Ay2QFBFPkIliq34QLTd2yxLtlZO1ov6rk4AFt7Ejcwm3p4jFLgXY">
               <label>Department</label>
               <select class="form-control" name="branch">
                   <option value="">---Select Branch---</option>
                   <option value="Computer Science">Computer Science</option>
                   <option value="Information Technology">Information Technology</option>
                   
                   <option value="Electronics">Electronics</option>
                   <option value="Electrical">Electrical</option>
               </select>

                <label>Are You?</label>
                <select class="form-control" name="role">
                  <option value="Student">Student</option>
                  <option value="Teacher">Teacher</option>
                </select>


               <label>Course</label>
               <select class="form-control" name="subject">
                    <option value="">---Select Course Name---</option>
                  <option value="CSE132 - Electrical Circuits">CSE132 - Electrical Circuits</option>
                  <option value="GED131 - Art of Living">GED131 - Art of Living</option>
                    <option value="CSE136 - Software Project I">CSE136 - Software Project I</option>
                    <option value="CSE132 - Electrical Circuits">CSE132 - Electrical Circuits</option>
                   <option value="CSE311 - Database Management System "> CSE311 - Database Management System</option>
                   <option value="CSE312 - Database Management System Lab ">CSE312 - Database Management System Lab </option>
                   <option value=" CSE313 - Computer Networks"> CSE313 - Computer Networks</option>
                   <option value=" CSE314 - Computer Networks Lab">CSE314 - Computer Networks Lab</option>
                   <option value="CSE315 - Artificial Intelligence">CSE315 - Artificial Intelligence </option>
                   <option value=" CSE316 - Artificial Intelligence Lab">CSE316 - Artificial Intelligence Lab </option>
                   <option value=" CSE317 - Software Project V"> CSE317 - Software Project V</option>
                   <option value="CSE321 - Data Mining and Machine Learning ">CSE321 - Data Mining and Machine Learning </option>
                   <option value="CSE322 - Data Mining and Machine Learning Lab "> CSE322 - Data Mining and Machine Learning Lab</option>
                   <option value=" CSE323 - Operating Systems"> CSE323 - Operating Systems</option>
                   <option value="CSE324 - Operating Systems Lab ">CSE324 - Operating Systems Lab </option>
                   <option value="CSE325 - System Analysis and Design ">CSE325 - System Analysis and Design </option>
                   <option value="ECO321 - Economics "> ECO321 - Economics</option>
                   <option value="CSE326 - Research and Innovation in CSE "> CSE326 - Research and Innovation in CSE</option>
                   <option value="CSE331 - Complier Design">CSE331 - Complier Design </option>
                   <option value="CSE332 - Complier Design Lab "> CSE332 - Complier Design Lab</option>
                   <option value=" CSE333 - Software Engineering"> CSE333 - Software Engineering</option>
                   <option value="CSE334 - Pervasive Computing ">CSE334 - Pervasive Computing </option>
                </select>

               <label>Topic</label>
                <textarea class="form-control" name="topic">
                </textarea>

                <label>Notes File</label>
               <input type="file" class="form-control" name="notesfile">
                <label>File Type</label>
                <select class="form-control" name="filetype">
                   <option value="">---Select File Type---</option>
                   <option value="PDF">PDF</option>
                   <option value="PPT">PPT</option>
                   <option value="DOC/DOCX">DOC/DOCX</option>
                   <option value="TXT">TXT</option>
                   <option value="IMG">Image</option>
                    <option value="ZIP/RAR">ZIP/RAR</option>
               </select>


                <label>Description</label>
                <textarea class="form-control" name="description">
                </textarea>

               <input type="submit" class="btn  mt-2" value="Submit" name = "add_notes" style="background-color:#fdd">
           </form>

       </div>

   </div>

</div>





</body>
</html>
