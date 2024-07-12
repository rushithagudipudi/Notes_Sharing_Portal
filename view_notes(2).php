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
    background-color: #b2eccb;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.topnav a.active {
    background-color: #b2eccb;
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

//style from notes heading
.container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .heading{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 33px;
      text-align: center;
      font-weight:light;
      position: relative;
    }
    .heading::after {
  content: "";
  display: block;
  width: 90%;
  height: 1px;
  background-color: rgba(0, 0, 0, 0.1);
  position: absolute;
  bottom: -5px;
  left: 5%; /* Adjust the left value to center the underline */
}
    .search-container {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 40px;
      margin-bottom: 10px;
    }

    .search-box {
      width: 270px;
      height: 90%;
      margin-left: 15px;
      margin-right:50px;
      padding: 5px;
      border: 1.5px solid black;
      border-radius: 5px;
    }

    .search-box:focus {
      outline: none;
      border: 3px solid lightblue;
      border-radius: 6px;
    }

    table {
      width: 89%;
      text-align: center;
      border-collapse: collapse;
      margin: 0 auto; 
    }

    th,
    td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Style for Preview and Download buttons */
    .preview-button,
    .download-button {
      background-color: #28a745;
      color: white;
      width: 80px;
      height: 40px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  .preview-button:hover,
    .download-button:hover { 
background-color:green;
border:3px solid #b2eccb;
border-radius:5px;
}
    /* Add some margin between buttons */
    .download-button {
      margin-left: 10px;
    }
</style>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_data.php')
      .then(response => response.json())
      .then(data => {
        const table = document.getElementById('notes_uploadd');
        data.forEach((row, rowIndex) => {
          const newRow = table.insertRow();
          Object.entries(row).forEach(([key, value], index) => {
            if (index === 0) {
              // Skip inserting the id column
              return;
            }
            if (index === 1) {
              // Insert Sr. No in the first column
              const cell = newRow.insertCell();
              cell.textContent = rowIndex + 1;
            }
            const cell = newRow.insertCell();
            cell.textContent = value;
          });

          // Add Preview and Download buttons as new cells
          const previewCell = newRow.insertCell();
          const previewButton = document.createElement('button');
          previewButton.className = 'preview-button';
          previewButton.textContent = 'Preview';
          previewCell.appendChild(previewButton);

          const downloadCell = newRow.insertCell();
          const downloadButton = document.createElement('button');
          downloadButton.className = 'download-button';
          downloadButton.textContent = 'Download';
          downloadCell.appendChild(downloadButton);

          // Set the file ID and filename as data attributes for both buttons
          previewButton.dataset.fileId = row.id;
          previewButton.dataset.filename = row.filename;
          downloadButton.dataset.fileId = row.id;

          // Add click event listener for the preview button
          previewButton.addEventListener('click', function () {
            const fileId = this.dataset.fileId;
            const filename = this.dataset.filename;
            window.open(`preview.php?fileId=${fileId}&filename=${encodeURIComponent(filename)}`, '_blank');
          });

          // Add click event listener for the download button
          downloadButton.addEventListener('click', function () {
            const fileId = this.dataset.fileId;
            window.location.href = `fetch_data.php?download=${fileId}`;
          });
        });
      })
      .catch(error => console.error('Error fetching data:', error));
  });
</script>
</head>
<body>
  <div class = "topnav">
    <a class="active">Nirula Smart Notes Portal</a>
  </div>

<nav class="navbar navbar-expand-sm " style="background-color : #fdfdf8">
<ul class="navbar-nav">
  <li class="navbar-item">
    <a class="nav-link" href="home.html">HOME</a>
  </li>
     <li class="navbar-item">
    <a class="nav-link" href="view_notes.php">VIEW NOTES</a>
  </li>
   <li class="navbar-item">
    <a class="nav-link" href="upload_notes.php">UPLOAD NOTES</a>
  </li>
   <li class="navbar-item">
    <a class="nav-link" href="admin_login.html">ADMIN LOGIN</a>
  </li>
<li class="navbar-item">
    <a class="nav-link" href="developers.html">DEVELOPER</a>
  </li>
</ul>

</nav>

<div class="container">
    <h2 class="heading" style="font-weight: light;">Notes</h2>

    <div class="search-container">
      <label style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';margin-right:20px;">Search : </label><br>
      <input type="text" class="search-box" id="searchInput" placeholder="Search here..">

    </div>
    <br>
    <br>
    <table id="notes_uploadd">
      <thead>
        <tr>
          <th>Sr. No</th>

          <th>Department</th>
          <th>Role</th>
          <th>Name</th> 
          <th>Subject</th>
          <th>Topic</th>
          <th>Filetype</th>
          <th>Description</th>
          <th>Preview</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>

        <!-- Additional rows will be added dynamically from the database -->
      </tbody>
    </table>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
  $(document).ready(function() {
    $("#searchInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();

      $(".data-row").each(function() {
        var name = $(this).find(".name-column").text().toLowerCase();
        var subject = $(this).find(".subject-column").text().toLowerCase();
        var topic = $(this).find(".topic-column").text().toLowerCase();

        var showRow =
          name.indexOf(value) > -1 ||
          subject.indexOf(value) > -1 ||
          topic.indexOf(value) > -1;

        $(this).toggle(showRow);
      });
    });
  });
</script>

</body>
</html>
