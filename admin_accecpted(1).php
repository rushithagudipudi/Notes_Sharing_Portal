
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















/* Styles for the container of the Accept and Reject buttons */
.action-buttons {
  display: flex; /* Use flexbox to create a row layout */
}

/* Styles for the Tick (Accept) button */
.accept-button {
  background-color: #1776c1d1; /* Light blue background color */
  color: #fff; /* White text color */
  padding: 8px 16px; /* Padding around the button text */
  border: none; /* Remove border */
  border-radius: 60px; /* Rounded corners */
  cursor: pointer; /* Show pointer cursor on hover */
  margin-right: 8px; /* Add some spacing between buttons */
  margin-bottom:5px; 
font-weight:bold;
font-size:18px;
}

/* Hover effect for the Tick (Accept) button */
.accept-button:hover {
  background-color: #28a745; /* Slightly darker blue on hover */
}

/* Styles for the Cross (Reject) button */
.reject-button {
  background-color: #1776c1d1; /* Light blue background color */
  color: #fff; /* White text color */
  padding: 8px 16px; /* Padding around the button text */
  border: none; /* Remove border */
  border-radius: 60px; /* Rounded corners */
  cursor: pointer; /* Show pointer cursor on hover */
font-weight:bold;
font-size:18px;
}

/* Hover effect for the Cross (Reject) button */
.reject-button:hover {
  background-color: #e54938; /* Slightly darker red on hover */
}

/* Additional styles to display tick and cross symbols */
.accept-button::before {
  content: "\2713"; /* Unicode character for tick mark ✓ */
  margin-right: 8px; /* Add some spacing between the symbol and text */
}

.reject-button::before {
  content: "\2717"; /* Unicode character for cross mark ✗ */
  margin-right: 8px; /* Add some spacing between the symbol and text */
}


/* CSS for Delete Button */
.delete-button {
  background-color: #e74c3c; /* Red background color */
  color: #fff; /* Text color */
  border: none;
  padding: 8px 16px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius:5px;
}

/* Hover state for Delete Button */
.delete-button:hover {
  background-color: #c0392b; /* Darker red background color on hover */
}

</style>



<!-- Your HTML code remains the same as before -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    fetch('admin_fetch_data_accecpted.php')
      .then(response => response.json())
      .then(data => {
        const table = document.getElementById('notes_uploadd');
        clearTableRows(table); // Clear existing table rows
        data.forEach((row, rowIndex) => {
          const newRow = table.insertRow();
          Object.entries(row).forEach(([key, value], index) => {
            if (index === 0 || key === "status") {
              // Skip inserting the id and status columns
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

          // Add the Delete button to the row
          addDeleteButton(newRow, row.id);
        });
      })
      .catch(error => console.error('Error fetching data:', error));
  });

  // Function to create and add the delete button to each row
  function addDeleteButton(row, fileId) {
    const deleteCell = row.insertCell();
    const deleteButton = document.createElement('button');
    deleteButton.className = 'delete-button';
    deleteButton.textContent = 'Delete';
    deleteCell.appendChild(deleteButton);

    // Set the file ID as a data attribute for the delete button
    deleteButton.dataset.fileId = fileId;

    // Add click event listener for the delete button
    deleteButton.addEventListener('click', function () {
      const fileId = this.dataset.fileId;
      deleteDataFromDatabase(fileId);
    });
  }

  // Function to delete data from the database
  function deleteDataFromDatabase(fileId) {
    // Create a new FormData object and add the fileId data to it
    const formData = new FormData();
    formData.append('fileId', fileId);

    // Send a POST request to delete_data.php with the FormData
    fetch('delete_data.php', {
      method: 'POST',
      body: formData,
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Success message, you can handle it here
          alert('Data deleted successfully. please refresh page.');
          // Optionally, you can remove the row from the table after successful deletion
          // By finding the row using the fileId and using the .remove() method
          const table = document.getElementById('notes_uploadd');
          const rowToRemove = Array.from(table.rows).find(row => row.cells[0].textContent === fileId);
          if (rowToRemove) {
            rowToRemove.remove();
          }
        } else {
          // Error message, you can handle it here
          alert('Error deleting data.');
        }
      })
      .catch(error => console.error('Error deleting data:', error));
  }

  // Function to clear the existing table rows
  function clearTableRows(table) {
    const rowCount = table.rows.length;
    for (let i = rowCount - 1; i > 0; i--) { // Start from the last row (excluding the header row)
      table.deleteRow(i);
    }
  }
</script>






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

<div class="container">
    <h2 class="heading" style="font-weight: light;color: green;">Accecpted Notes</h2>

    <div class="search-container">
      <label style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';margin-right:20px;">Search : </label><br>
      <input type="text" class="search-box" placeholder="Search...">
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
           <th>Delete</th>
        </tr>
      </thead>
      <tbody>

        <!-- Additional rows will be added dynamically from the database -->
      </tbody>
    </table>
  </div>
<br>
<br>
<br>
<br>
<br><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>

</body>
</html>
