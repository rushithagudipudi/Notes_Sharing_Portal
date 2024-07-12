<?php
// Function to fetch data from the database and return as JSON
function fetchDataFromDB($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data, true);
}

// Fetch data for each block from respective PHP files
$accepted_notes_count = fetchDataFromDB('http://localhost/NOTES%20MS/fetch_accepted_notes_count.php');
$rejected_notes_count = fetchDataFromDB('http://localhost/NOTES%20MS/fetch_rejected_notes_count.php');
$pending_notes_count = fetchDataFromDB('http://localhost/NOTES%20MS/fetch_pending_notes_count.php');
$total_notes_count = fetchDataFromDB('http://localhost/NOTES%20MS/fetch_total_notes_count.php');

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
    background-color: #f2ffc2;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.topnav a.active {
    background-color: #f2ffc2;
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



  /* CSS for Responsive Blocks */
    .block-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      width:90%;
      margin-left:5%;
    }

    .block {
      width: calc(25% - 20px);
      min-width: 150px;
      padding: 20px;
      background-color: #f2ffc2;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      text-align: center;
      border-radius:10px;
    }

    /* CSS for Text Inside Blocks */
    .block h3 {
      font-size: 24px;
font-weight:light;
      margin-bottom: 10px;
font-family: Arial, Helvetica, sans-serif ;
    }

    .block p {
     font-family: Arial, Helvetica, sans-serif ;
      font-size: 35px;
      //font-weight:bold;  
      color:red;
      margin: 0;
    }
</style>
</head>
<body>
  <div class = "topnav">
    <a class="active">Nirula Smart Notes Portal</a>
  </div>

<nav class="navbar navbar-expand-sm " style="background-color : #fdfdf8">
<ul class="navbar-nav">
  <li class="navbar-item">
    <a class="nav-link" href="admin_home.php">HOME</a>
  </li>
     <li class="navbar-item">
    <a class="nav-link" href="admin_accecpted.php">ACCECPTED NOTES</a>
  </li>
   <li class="navbar-item">
    <a class="nav-link" href="admin_pending.php">PENDING NOTES</a>
  </li>
   <li class="navbar-item">
    <a class="nav-link" href="admin_rejected.php">REJECTED NOTES</a>
  </li>
<li class="navbar-item">
    <a class="nav-link" href="developers.html">LOG OUT</a>
  </li>
</ul>

</nav>








<br>
<br>
<br>
<br>



<div class="block-container">
    <div class="block"  id="acceptedBlock">
      <h3>Accepted Notes</h3>
      <p id="acceptedNotesCount">Loading...</p>
    </div>
    <div class="block" id="rejectedBlock">
      <h3>Rejected Notes</h3>
      <p>Loading...</p>
    </div>
    <div class="block" id="pendingBlock">
      <h3>Pending Notes</h3>
      <p>Loading...</p>
    </div>
    <div class="block"  id="totalBlock">
      <h3>All Notes</h3>
      <p>Loading...</p>
    </div>
  </div>



    <script>
    // Function to fetch data from the PHP files and update the HTML blocks
    function fetchDataAndUpdateBlocks() {
        // Fetch accepted notes count
        fetchAndDisplay('fetch_accepted_notes_count.php', 'acceptedBlock');
        // Fetch rejected notes count
        fetchAndDisplay('fetch_rejected_notes_count.php', 'rejectedBlock');
        // Fetch pending notes count
        fetchAndDisplay('fetch_pending_notes_count.php', 'pendingBlock');
        // Fetch total notes count
        fetchAndDisplay('fetch_total_notes_count.php', 'totalBlock');
    }

    // Function to fetch data and display in the specified block
    function fetchAndDisplay(url, blockId) {
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                document.getElementById(blockId).innerHTML = `
                    <h3>${data.title}</h3>
                    <p>${data.count}</p>
                `;
            })
            .catch(error => {
                document.getElementById(blockId).innerHTML = `
                    <h3>Error</h3>
                    <p>Error fetching count</p>
                `;
                console.error('Error fetching data:', error);
            });
    }

    // Function to update all blocks
    function updateBlocks() {
        fetchDataAndUpdateBlocks();
    }

    // Call the function initially to populate the counts
    updateBlocks();

    // Optional: You can refresh the counts at regular intervals
    setInterval(updateBlocks, 5000); 
</script>
  


</body>


</body>
</html>
