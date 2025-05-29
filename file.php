<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Zendrop - File Download</title>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-thin.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-light.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-thin.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-light.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-thin.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-light.css">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

  /* Reset & base */
  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Inter', sans-serif;
    background: #121212;
    margin: 0;
    padding: 0;
    color: #e0e0e0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  header {
    background: #1f1f1f;
    color: #61dafb;
    padding: 1rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 10px rgba(0,0,0,0.8);
    position: sticky;
    top: 0;
    z-index: 100;
    user-select: none;
  }

  header .logo {
    font-size: 1.8rem;
    font-weight: 700;
    letter-spacing: 2px;
    cursor: default;
  }

  .container {
    max-width: 900px;
    width: 90%;
    margin: 3rem auto;
    text-align: center;
    background: #1e1e1e;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 40px rgba(0,0,0,0.9);
  }

  .hero-image {
    width: 100%;
    max-height: 300px;
    object-fit: contain;
    border-radius: 20px;
    margin-bottom: 2rem;
  }

  .message {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #61dafb;
  }

  .description {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    color: #c0c0c0;
  }

  .file-info {
    background: #2a2a2a;
    border-radius: 15px;
    padding: 1.5rem;
    margin: 2rem auto;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.5);
  }

  .file-detail {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid #3a3a3a;
  }

  .file-detail:last-child {
    border-bottom: none;
  }

  .file-label {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #a0a0a0;
    font-size: 1rem;
  }

  .file-value {
    font-weight: 600;
    color: #e0e0e0;
  }

  .security-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    margin: 1.5rem 0;
    color: #4CAF50;
    font-size: 0.9rem;
  }

  .download-button {
    background-color: #61dafb;
    border: none;
    padding: 1rem 2rem;
    font-size: 1.5rem;
    font-weight: 700;
    border-radius: 40px;
    color: #121212;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(97, 218, 251, 0.75);
    transition: all 0.3s ease;
    margin-top: 1rem;
  }

  .download-button:hover {
    background-color: #21a1f1;
    box-shadow: 0 8px 28px rgba(33, 161, 241, 0.9);
    transform: translateY(-2px);
  }

  .download-button:active {
    transform: translateY(0);
  }

  footer {
    text-align: center;
    font-size: 0.9rem;
    color: #666;
    margin: 2rem 1rem 1rem 1rem;
    user-select: none;
  }

  footer a {
    margin: 0 0.6rem;
    color: #61dafb;
    text-decoration: none;
    transition: color 0.2s;
  }

  footer a:hover {
    color: #21a1f1;
  }
</style>
</head>
<body>
  <header>
    <div class="logo" aria-label="Zendrop Logo">
      <i class="fas fa-file-export" style="margin-right: 10px;"></i>Zendrop
    </div>
  </header>

  <div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/1055/1055683.png" alt="File Sharing Illustration" class="hero-image">
    <div class="message">Your File is Ready to Download</div>
    <div class="description">This file was securely shared with you via Zendrop's encrypted file transfer service.</div>
    
    <div class="file-info">
      <div class="file-detail">
        <span class="file-label">
          <i class="fas fa-file-alt"></i>
          File Name
        </span>
        <span class="file-value" id="fileName">Document.pdf</span>
      </div>
      <div class="file-detail">
        <span class="file-label">
          <i class="fas fa-weight-hanging"></i>
          File Size
        </span>
        <span class="file-value" id="fileSize">24.5 MB</span>
      </div>
      <div class="file-detail">
        <span class="file-label">
          <i class="fas fa-calendar-alt"></i>
          Shared On
        </span>
        <span class="file-value" id="sharedDate">May 15, 2024</span>
      </div>
    </div>

    <div class="security-badge">
      <i class="fas fa-lock"></i>
      <span>Secured with end-to-end encryption</span>
    </div>

    <button class="download-button" onclick="downloadFile()">
      <i class="fas fa-download" style="margin-right: 10px;"></i>Download File
    </button>
  </div>

  <footer role="contentinfo" aria-label="Footer with copyright and links">
    &copy; 2024 Zendrop. All rights reserved.
    <br />
    <a href="#" aria-label="Privacy Policy">Privacy Policy</a> |
    <a href="#" aria-label="Terms of Service">Terms of Service</a> |
    <a href="#" aria-label="Help Center">Help Center</a>
  </footer>

<script>
  // Sample file data - replace with actual data from your backend
  const fileData = {
    name: "Annual_Report_2024.pdf",
    size: "24.5 MB",
    sharedDate: new Date().toLocaleDateString('en-US', { 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric' 
    })
  };

  // Set file info on page load
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('fileName').textContent = fileData.name;
    document.getElementById('fileSize').textContent = fileData.size;
    document.getElementById('sharedDate').textContent = fileData.sharedDate;
  });

  function downloadFile() {
    // Replace 'your-file-url' with the actual file URL to download
    const fileUrl = 'your-file-url'; // Example: 'https://example.com/path/to/your/file.pdf'
    const a = document.createElement('a');
    a.href = fileUrl;
    a.download = fileData.name; // Use the actual filename
    document.body.appendChild(a);
    a.click();
    a.remove();
    
    // Optional: Show download confirmation
    alert('Download started: ' + fileData.name);
  }
</script>
</body>
</html>