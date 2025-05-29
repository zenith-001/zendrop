<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Zendrop - Secure File Sharing Platform</title>
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

  html{
    scroll-behavior: smooth;
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

  a {
    color: #61dafb;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  a:hover {
    color: #21a1f1;
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

  /* Hero Section */
  .hero {
    background: linear-gradient(135deg, #0f4c75 0%, #3282b8 100%);
    color: white;
    padding: 4rem 2rem 5rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 3rem;
  }

  .hero-content {
    max-width: 500px;
    animation: fadeInUp 1s ease forwards;
  }

  .hero-content h1 {
    font-weight: 700;
    font-size: 3rem;
    margin-bottom: 1rem;
    line-height: 1.1;
  }

  .hero-content p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    color: #cde6ff;
    line-height: 1.5;
  }

  .hero-content button {
    background-color: #61dafb;
    border: none;
    padding: 0.9rem 2.2rem;
    font-size: 1.1rem;
    font-weight: 700;
    border-radius: 40px;
    color: #121212;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(97, 218, 251, 0.75);
    transition: all 0.3s ease;
  }

  .hero-content button:hover {
    background-color: #21a1f1;
    box-shadow: 0 8px 28px rgba(33, 161, 241, 0.9);
  }

  .hero-image {
    max-width: 450px;
    animation: fadeIn 1.3s ease forwards;
  }

  .hero-image img {
    width: 100%;
    filter: drop-shadow(0 8px 10px rgba(0,0,0,0.6));
    border-radius: 20px;
  }

  /* Features Section */
  .features {
    background: #1f1f1f;
    padding: 4rem 2rem;
    text-align: center;
  }

  .features h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 2rem;
    color: #61dafb;
    letter-spacing: 1.4px;
  }

  .feature-list {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
  }

  .feature-card {
    background: #292929;
    border-radius: 16px;
    padding: 2.2rem 1.8rem;
    max-width: 280px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.9);
    transition: transform 0.35s cubic-bezier(0.39, 0.575, 0.565, 1), box-shadow 0.35s;
    cursor: default;
  }

  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(97, 218, 251, 0.7);
  }

  .feature-icon {
    font-size: 3rem;
    color: #61dafb;
    margin-bottom: 1rem;
    user-select: none;
  }

  .feature-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.8rem;
  }

  .feature-desc {
    font-size: 1rem;
    color: #c0c0c0;
  }

  /* How It Works Section */
  .how-it-works {
    background: #121212;
    padding: 4rem 2rem;
    text-align: center;
  }

  .how-it-works h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 2rem;
    color: #61dafb;
    letter-spacing: 1.4px;
  }

  .steps {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
  }

  .step-card {
    background: #292929;
    border-radius: 16px;
    padding: 2rem 1.5rem;
    max-width: 260px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.85);
    transition: transform 0.35s ease, box-shadow 0.35s;
    cursor: default;
  }

  .step-card:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 40px rgba(33, 161, 241, 0.7);
  }

  .step-number {
    width: 48px;
    height: 48px;
    line-height: 48px;
    border-radius: 50%;
    background: #61dafb;
    color: #121212;
    font-weight: 700;
    font-size: 1.6rem;
    margin: 0 auto 1rem;
    user-select: none;
    box-shadow: 0 4px 10px rgba(97, 218, 251, 0.7);
  }

  .step-title {
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 0.6rem;
  }

  .step-desc {
    font-size: 1rem;
    color: #c0c0c0;
  }

  /* File Sharing Area */
  main.container {
    max-width: 900px;
    width: 90%;
    margin: 3rem auto 5rem;
    background: #1e1e1e;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.9);
    padding: 3rem 3rem 3rem;
    display: flex;
    flex-direction: column;
    gap: 1.8rem;
  }

  .upload-area {
    border: 3px dashed #61dafb;
    border-radius: 20px;
    padding: 4rem;
    text-align: center;
    color: #61dafb;
    cursor: pointer;
    transition: background 0.4s ease, border-color 0.4s ease, box-shadow 0.5s ease;
    user-select: none;
    position: relative;
    overflow: hidden;
  }

  .upload-area:focus-visible {
    outline: none;
    box-shadow: 0 0 0 4px rgba(97,218,251,0.7);
  }

  .upload-area.dragover {
    background: rgba(97, 218, 251, 0.15);
    border-color: #21a1f1;
    box-shadow: 0 0 20px rgba(33, 161, 241, 0.8);
  }

  /* Animated bounce icon */
  .upload-area i {
    font-size: 60px;
    margin-bottom: 1.2rem;
    color: #61dafb;
    animation: bounce 2.5s ease infinite;
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0);}
    50% { transform: translateY(-12px);}
  }

  .upload-area p {
    font-size: 1.3rem;
    margin: 0;
    font-weight: 600;
    user-select: none;
  }

  .progress-bar-container {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 6px;
    width: 100%;
    background: #333;
    border-radius: 0 0 20px 20px;
    overflow: hidden;
  }

  .progress-bar {
    height: 100%;
    width: 0;
    background: #61dafb;
    transition: width 0.35s ease;
  }

  .file-list {
    margin-top: 1.5rem;
  }

  .file-list h2 {
    font-weight: 700;
    font-size: 1.6rem;
    margin-bottom: 1.2rem;
    color: #61dafb;
    letter-spacing: 0.06em;
    user-select: none;
  }

  .file-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 1.3rem;
    border-radius: 16px;
    background: #292929;
    margin-bottom: 1rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.85);
    transition: background 0.3s ease, transform 0.2s ease;
  }

  .file-item:hover {
    background: #3a3a3a;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(33, 161, 241, 0.8);
  }

  .file-info {
    display: flex;
    align-items: center;
    gap: 1.1rem;
    flex-wrap: nowrap;
    overflow: hidden;
    min-width: 0;
  }

  .file-icon {
    width: 44px;
    height: 44px;
    background: #0d99f1;
    border-radius: 10px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.6rem;
    user-select: none;
    filter: drop-shadow(0 0 3px #0d99f1);
    flex-shrink: 0;
  }

  .file-name {
    font-weight: 700;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #e0e0e0;
    max-width: 300px;
  }

  .file-size {
    font-size: 0.94rem;
    color: #bbb;
    user-select: none;
    min-width: 85px;
    text-align: right;
    flex-shrink: 0;
  }

  .file-actions {
    display: flex;
    gap: 0.9rem;
  }

  .file-actions button {
    background-color: #61dafb;
    border: none;
    color: #121212;
    padding: 0.5rem 1rem;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 700;
    font-size: 0.97rem;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 12px rgba(97,218,251,0.7);
    display: flex;
    align-items: center;
    gap: 0.4rem;
  }

  .file-actions button:hover {
    background-color: #21a1f1;
    box-shadow: 0 6px 20px rgba(33,161,241,0.85);
  }

  .file-actions button.remove-btn {
    background-color: #e55353;
    color: #fff;
    box-shadow: 0 4px 12px rgba(229, 83, 83, 0.8);
  }

  .file-actions button.remove-btn:hover {
    background-color: #bf3434;
    box-shadow: 0 6px 20px rgba(191, 52, 52, 0.9);
  }

  /* Footer */
  footer {
    text-align: center;
    font-size: 0.9rem;
    color: #666;
    margin: 2rem 1rem 1rem 1rem;
    user-select: none;
  }

  footer a {
    margin: 0 0.6rem;
  }

  /* Scrollbar styling */
  ::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }

  ::-webkit-scrollbar-track {
    background: #1f1f1f;
    border-radius: 4px;
  }

  ::-webkit-scrollbar-thumb {
    background: #61dafb;
    border-radius: 4px;
  }

  /* Animations */
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .hero {
      flex-direction: column;
      padding-bottom: 3rem;
    }

    .hero-content, .hero-image {
      max-width: 100%;
    }
  }

  @media (max-width: 600px) {
    header nav {
      display: none;
    }
    .hero-content h1 {
      font-size: 2.3rem;
    }
    main.container {
      padding: 2rem 1.5rem 2.5rem 1.5rem;
      width: 95%;
      margin: 3rem auto 4rem;
    }
    .file-name {
      max-width: 140px;
    }
    .file-actions button {
      font-size: 0.85rem;
      padding: 0.4rem 0.8rem;
    }
  }
</style>
</head>
<body>
  <header>
    <div class="logo" aria-label="Zendrop Logo">Zendrop</div>
  </header>

  <section class="hero" role="banner" aria-label="Introduction to Zendrop file sharing platform">
    <div class="hero-content">
      <h1>Secure, Fast & Easy File Sharing</h1>
      <p>Zendrop empowers you to share your files seamlessly with anyone, anywhere. Drag, drop, and share your documents securely and effortlessly.</p>
      <button onclick="window.scrollTo(0, document.body.scrollHeight);" aria-label="Start Uploading Files">Get Started</button>
    </div>
    <div class="hero-image" aria-hidden="true">
      <img src="hero.png" alt="Person sharing files securely on laptop">
    </div>
  </section>

  <section class="features" aria-label="Key features of Zendrop platform">
    <h2>Why Zendrop?</h2>
    <div class="feature-list">
      <div class="feature-card" tabindex="0" role="article" aria-label="Secure Encryption Feature">
        <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-lock"></i></div>
        <div class="feature-title">Secure Encryption</div>
        <div class="feature-desc">All your files are secured with top-grade AES-256 encryption for utmost privacy.</div>
      </div>
      <div class="feature-card" tabindex="0" role="article" aria-label="Unlimited File Size Feature">
        <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-rocket"></i></div>
        <div class="feature-title">Fast & Unlimited</div>
        <div class="feature-desc">Upload and share files of any size with high-speed transfers and zero restrictions.</div>
      </div>
      <div class="feature-card" tabindex="0" role="article" aria-label="User  Friendly Interface Feature">
        <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-lightbulb"></i></div>
        <div class="feature-title">User  Friendly</div>
        <div class="feature-desc">An intuitive interface that allows you to get started with zero learning curve.</div>
      </div>
    </div>
  </section>

  <section class="how-it-works" aria-label="How Zendrop works steps overview">
    <h2>How It Works</h2>
    <div class="steps">
      <div class="step-card" tabindex="0" role="listitem" aria-label="Step 1: Upload Files">
        <div class="step-number">1</div>
        <div class="step-title">Upload Files</div>
        <div class="step-desc">Simply drag & drop or browse your files to start the upload process effortlessly.</div>
      </div>
      <div class="step-card" tabindex="0" role="listitem" aria-label="Step 2: Generate Link">
        <div class="step-number">2</div>
        <div class="step-title">Generate Link</div>
        <div class="step-desc">Create secure shareable links instantly to send files to anyone.</div>
      </div>
      <div class="step-card" tabindex="0" role="listitem" aria-label="Step 3: Share & Collaborate">
        <div class="step-number">3</div>
        <div class="step-title">Share & Collaborate</div>
        <div class="step-desc">Share files with colleagues, friends, or clients and collaborate easily.</div>
      </div>
    </div>
  </section>

  <main class="container" role="main" aria-label="File upload and list section">
    <div class="upload-area" id="upload-area" tabindex="0" role="button" aria-label="File Upload Area" aria-describedby="upload-desc">
      <!-- Changed to FontAwesome upload icon -->
      <i class="fa-solid fa-cloud-arrow-up"></i>
      <p id="upload-desc">Drag & drop files here or click to upload</p>
      <input type="file" id="fileElem" multiple aria-label="Upload files input" style="display:none" />
      <div class="progress-bar-container" aria-hidden="true">
        <div class="progress-bar" id="progress-bar"></div>
      </div>
    </div>

    <div class="file-list" id="file-list" aria-live="polite" aria-label="Uploaded files list">
      <h2>Uploaded Files</h2>
      <div id="files-container">
        <p>No files uploaded yet.</p>
      </div>
    </div>
  </main>

  <footer role="contentinfo" aria-label="Footer with copyright and links">
    &copy; 2024 Zendrop. All rights reserved.
    <br />
    <a href="#" aria-label="Privacy Policy">Privacy Policy</a> |
    <a href="#" aria-label="Terms of Service">Terms of Service</a>
  </footer>

<script>
  (() => {
    const uploadArea = document.getElementById('upload-area');
    const fileElem = document.getElementById('fileElem');
    const filesContainer = document.getElementById('files-container');
    const progressBar = document.getElementById('progress-bar');

    function prettyFileSize(size) {
      if (size === 0) return '0 B';
      const i = Math.floor(Math.log(size) / Math.log(1024));
      return (
        (size / Math.pow(1024, i)).toFixed(2) * 1 +
        ' ' +
        ['B', 'KB', 'MB', 'GB', 'TB'][i]
      );
    }

    function getFileIcon(name) {
      const ext = name.split('.').pop().toLowerCase();
      const iconMap = {
        pdf: '📄',
        doc: '📄',
        docx: '📄',
        xls: '📊',
        xlsx: '📊',
        ppt: '📽️',
        pptx: '📽️',
        jpg: '🖼️',
        jpeg: '🖼️',
        png: '🖼️',
        gif: '🖼️',
        mp3: '🎵',
        mp4: '🎞️',
        txt: '📄',
        zip: '🗜️',
        default: '📁',
      };
      return iconMap[ext] || iconMap.default;
    }

    function renderFiles(files) {
      if (files.length === 0) {
        filesContainer.innerHTML = '<p>No files uploaded yet.</p>';
        return;
      }

      filesContainer.innerHTML = '';
      files.forEach((file, index) => {
        const item = document.createElement('div');
        item.className = 'file-item';

        const fileInfo = document.createElement('div');
        fileInfo.className = 'file-info';

        const icon = document.createElement('div');
        icon.className = 'file-icon';
        icon.textContent = getFileIcon(file.name);

        const name = document.createElement('div');
        name.className = 'file-name';
        name.title = file.name;
        name.textContent = file.name;

        const size = document.createElement('div');
        size.className = 'file-size';
        size.textContent = prettyFileSize(file.size);

        fileInfo.appendChild(icon);
        fileInfo.appendChild(name);
        fileInfo.appendChild(size);

        const actions = document.createElement('div');
        actions.className = 'file-actions';

        // Share button with FontAwesome icon
        const shareBtn = document.createElement('button');
        shareBtn.setAttribute('aria-label', `Share ${file.name}`);
        shareBtn.innerHTML = `<i class="fa-solid fa-paper-plane"></i> Share`;
        shareBtn.addEventListener('click', () => {
          const url = URL.createObjectURL(file);
          const a = document.createElement('a');
          a.href = url;
          document.body.appendChild(a);
          a.click();
          a.remove();
          URL.revokeObjectURL(url);
        });

        // Remove button with FontAwesome icon
        const removeBtn = document.createElement('button');
        removeBtn.classList.add('remove-btn');
        removeBtn.setAttribute('aria-label', `Remove ${file.name}`);
        removeBtn.innerHTML = `<i class="fa-solid fa-trash"></i> Remove`;
        removeBtn.addEventListener('click', () => {
          uploadedFiles.splice(index, 1);
          renderFiles(uploadedFiles);
        });

        actions.appendChild(shareBtn);
        actions.appendChild(removeBtn);

        item.appendChild(fileInfo);
        item.appendChild(actions);

        filesContainer.appendChild(item);
      });
    }

    let uploadedFiles = [];

    uploadArea.addEventListener('click', () => fileElem.click());

    uploadArea.addEventListener('keydown', e => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        fileElem.click();
      }
    });

    fileElem.addEventListener('change', e => {
      if (e.target.files.length) {
        simulateUpload(e.target.files);
        fileElem.value = ''; // Reset input
      }
    });

    uploadArea.addEventListener('dragover', e => {
      e.preventDefault();
      uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', e => {
      e.preventDefault();
      uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', e => {
      e.preventDefault();
      uploadArea.classList.remove('dragover');
      if (e.dataTransfer.files.length) {
        simulateUpload(e.dataTransfer.files);
      }
    });

    // Simulate upload progress with a progress bar
    function simulateUpload(fileList) {
      const files = Array.from(fileList);
      let progress = 0;
      progressBar.style.width = '0%';

      const interval = setInterval(() => {
        progress += Math.random() * 15;
        if (progress >= 100) {
          clearInterval(interval);
          uploadedFiles = uploadedFiles.concat(files);
          renderFiles(uploadedFiles);
          progressBar.style.width = '0%';
        } else {
          progressBar.style.width = progress + '%';
        }
      }, 150);
    }

  })();
</script>
</body>
</html>
