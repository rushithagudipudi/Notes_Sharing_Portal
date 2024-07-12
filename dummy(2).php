<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes</title>
  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
      "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .heading {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 36px;
      font-weight: light;
      text-align: center;
    }

    .search-container {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 40px;
      margin-bottom: 10px;
    }

    .search-box {
      width: 200px;
      height: 70%;
      margin-left: 15px;
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
      width: 100%;
      border-collapse: collapse;
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
<!-- Your HTML table and other content -->

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
  <div class="container">
    <h1 class="heading">Notes</h1>

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
</body>

</html>
