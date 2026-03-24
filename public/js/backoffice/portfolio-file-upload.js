document.addEventListener('DOMContentLoaded', () => {
  const uploadConfigs = [
    { inputId: 'thumbnail_image', previewId: 'thumbnailPreview', maxFiles: 1 },
    { inputId: 'solution_before_image', previewId: 'beforeImagePreview', maxFiles: 1 },
    { inputId: 'solution_after_image', previewId: 'afterImagePreview', maxFiles: 1 }
  ];

  uploadConfigs.forEach(({ inputId, previewId, maxFiles }) => {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);
    const upload = input?.closest('.board-file-upload');
    if (!input || !preview || !upload) return;

    const updatePreview = () => {
      const files = Array.from(input.files || []).slice(0, maxFiles);
      preview.innerHTML = '';

      files.forEach((file) => {
        const fileItem = document.createElement('div');
        fileItem.className = 'board-file-item';
        fileItem.innerHTML = `
          <div class="board-file-info">
            <i class="fas fa-file-image"></i>
            <span class="board-file-name">${file.name}</span>
            <span class="board-file-size">(${(file.size / 1024 / 1024).toFixed(2)}MB)</span>
          </div>
        `;
        preview.appendChild(fileItem);
      });
    };

    input.addEventListener('change', updatePreview);

    upload.addEventListener('dragover', (event) => {
      event.preventDefault();
      upload.classList.add('board-file-drag-over');
    });

    upload.addEventListener('dragleave', () => {
      upload.classList.remove('board-file-drag-over');
    });

    upload.addEventListener('drop', (event) => {
      event.preventDefault();
      upload.classList.remove('board-file-drag-over');
      const droppedFiles = Array.from(event.dataTransfer?.files || []).slice(0, maxFiles);
      const dt = new DataTransfer();
      droppedFiles.forEach((file) => dt.items.add(file));
      input.files = dt.files;
      updatePreview();
    });
  });
});
