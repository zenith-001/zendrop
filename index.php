<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>File Upload Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2rem;
      background: #f9f9f9;
      color: #333;
    }
    .container {
      max-width: 400px;
      margin: auto;
      background: white;
      padding: 1.5rem;
      border-radius: 8px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 1rem;
    }
    .file-input-wrapper {
      border: 2px dashed #ccc;
      padding: 1rem;
      text-align: center;
      cursor: pointer;
      transition: border-color 0.3s ease;
      margin-bottom: 1rem;
      border-radius: 6px;
      background: #fafafa;
    }
    .file-input-wrapper:hover {
      border-color: #007BFF;
      background: #e7f1ff;
    }
    input[type="file"] {
      display: none;
    }
    #fileName {
      margin-bottom: 1rem;
      font-style: italic;
      color: #666;
      min-height: 1.2em;
    }
    button {
      padding: 0.5rem 1rem;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 0.5rem;
      transition: background-color 0.3s ease;
    }
    #uploadButton {
      background-color: #007BFF;
      color: white;
    }
    #uploadButton:disabled {
      background-color: #a3cdfd;
      cursor: not-allowed;
    }
    #clearButton {
      background-color: #dc3545;
      color: white;
      display: none;
    }
    #clearButton:hover {
      background-color: #c82333;
    }
    #uploadStatus {
      margin-top: 1rem;
      min-height: 1.2em;
      font-weight: bold;
      text-align: center;
    }
    /* Responsive */
    @media (max-width: 480px) {
      .container {
        padding: 1rem;
      }
      button {
        width: 100%;
        margin: 0.25rem 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Upload Your File</h2>
    <label class="file-input-wrapper" for="fileInput">
      Click or Drag & Drop file here
      <input type="file" id="fileInput" />
    </label>
    <div id="fileName">No file selected</div>
    <button id="uploadButton" disabled>Upload</button>
    <button id="clearButton">Clear</button>
    <div id="uploadStatus"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const fileInput = document.getElementById('fileInput');
      const uploadButton = document.getElementById('uploadButton');
      const fileNameDisplay = document.getElementById('fileName');
      const clearButton = document.getElementById('clearButton');
      const uploadStatus = document.getElementById('uploadStatus');
      const fileInputWrapper = document.querySelector('.file-input-wrapper');

      // Show file name on file selection
      fileInput.addEventListener('change', () => {
        const files = fileInput.files;
        if (files.length > 0) {
          fileNameDisplay.textContent = files[0].name;
          uploadButton.disabled = false;
          clearButton.style.display = 'inline-block';
          uploadStatus.textContent = '';
        } else {
          resetUI();
        }
      });

      // Clear selection
      clearButton.addEventListener('click', () => {
        fileInput.value = '';
        resetUI();
      });

      // Handle upload click
      uploadButton.addEventListener('click', () => {
        if (!fileInput.files.length) return;

        uploadButton.disabled = true;
        clearButton.disabled = true;
        uploadStatus.textContent = 'Uploading...';

        // Simulate upload delay
        setTimeout(() => {
          uploadStatus.textContent = 'Upload successful!';
          resetUI();
        }, 2000);

        // Real upload example (commented out):
        /*
        const formData = new FormData();
        formData.append('file', fileInput.files[0]);

        fetch('/upload_handle.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(data => {
          uploadStatus.textContent = data.message || 'Upload complete!';
          resetUI();
        })
        .catch(err => {
          uploadStatus.textContent = 'Upload failed. Try again.';
          uploadButton.disabled = false;
          clearButton.disabled = false;
        });
        */
      });

      // Reset UI to initial state
      function resetUI() {
        fileNameDisplay.textContent = 'No file selected';
        uploadButton.disabled = true;
        clearButton.style.display = 'none';
        uploadButton.disabled = false;
        clearButton.disabled = false;
        uploadStatus.textContent = '';
      }

      // Drag & Drop styling
      fileInputWrapper.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileInputWrapper.style.borderColor = '#007BFF';
        fileInputWrapper.style.background = '#e7f1ff';
      });

      fileInputWrapper.addEventListener('dragleave', (e) => {
        e.preventDefault();
        fileInputWrapper.style.borderColor = '#ccc';
        fileInputWrapper.style.background = '#fafafa';
      });

      fileInputWrapper.addEventListener('drop', (e) => {
        e.preventDefault();
        fileInputWrapper.style.borderColor = '#ccc';
        fileInputWrapper.style.background = '#fafafa';

        const files = e.dataTransfer.files;
        if (files.length > 0) {
          fileInput.files = files;
          fileInput.dispatchEvent(new Event('change'));
        }
      });

      // Initialize UI on load
      resetUI();
    });
  </script>
</body>
</html>
