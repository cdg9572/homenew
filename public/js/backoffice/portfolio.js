document.addEventListener('DOMContentLoaded', () => {
  const reviewsWrap = document.getElementById('reviewsWrap');
  const addBtn = document.getElementById('addReviewBtn');
  const featureWrap = document.getElementById('featureDevelopmentsWrap');
  const addFeatureBtn = document.getElementById('addFeatureDevelopmentBtn');

  const bindReviewRemove = (container) => {
    container.querySelectorAll('.remove-review').forEach((btn) => {
      btn.onclick = () => {
        const rows = reviewsWrap.querySelectorAll('.review-row');
        if (rows.length <= 1) return;
        btn.closest('.review-row')?.remove();
      };
    });
  };

  if (reviewsWrap && addBtn) {
    addBtn.addEventListener('click', () => {
      const idx = reviewsWrap.querySelectorAll('.review-row').length;
      const row = document.createElement('div');
      row.className = 'review-row';
      row.innerHTML = `
        <div class="review-row-grid">
          <input type="text" class="board-form-control" name="reviews[${idx}][title]" placeholder="제목">
          <input type="text" class="board-form-control" name="reviews[${idx}][manager_name]" placeholder="담당자명">
        </div>
        <textarea class="board-form-control board-textarea" name="reviews[${idx}][content]" rows="3" placeholder="내용 (strong 태그 가능)"></textarea>
        <button type="button" class="btn btn-danger btn-sm remove-review">리뷰 삭제</button>
      `;
      reviewsWrap.appendChild(row);
      bindReviewRemove(row);
    });

    bindReviewRemove(reviewsWrap);
  }

  const reindexFeatureRows = () => {
    if (!featureWrap) return;
    const rows = featureWrap.querySelectorAll('.feature-row');
    rows.forEach((row, idx) => {
      row.querySelectorAll('[name]').forEach((field) => {
        field.name = field.name.replace(/feature_developments\[\d+\]/g, `feature_developments[${idx}]`);
      });
    });
  };

  const bindFeatureRemove = (container) => {
    container.querySelectorAll('.remove-feature').forEach((btn) => {
      btn.onclick = () => {
        const rows = featureWrap.querySelectorAll('.feature-row');
        if (rows.length <= 1) return;
        btn.closest('.feature-row')?.remove();
        reindexFeatureRows();
      };
    });
  };

  if (featureWrap && addFeatureBtn) {
    addFeatureBtn.addEventListener('click', () => {
      const idx = featureWrap.querySelectorAll('.feature-row').length;
      const row = document.createElement('div');
      row.className = 'review-row feature-row';
      row.innerHTML = `
        <div class="review-row-grid">
          <input type="text" class="board-form-control" name="feature_developments[${idx}][title]" placeholder="제목">
        </div>
        <textarea class="board-form-control board-textarea" name="feature_developments[${idx}][content]" rows="3" placeholder="내용"></textarea>
        <div class="feature-file-row">
          <input type="hidden" name="feature_developments[${idx}][existing_image_path]" value="">
          <input type="file" class="board-form-control" name="feature_developments[${idx}][image]" accept="image/*">
        </div>
        <button type="button" class="btn btn-danger btn-sm remove-feature">Feature 삭제</button>
      `;
      featureWrap.appendChild(row);
      bindFeatureRemove(row);
    });

    bindFeatureRemove(featureWrap);
  }

  document.querySelectorAll('.remove-existing-file').forEach((button) => {
    button.addEventListener('click', () => {
      const target = button.dataset.target;
      const map = {
        thumbnail: 'remove_thumbnail_image',
        before: 'remove_solution_before_image',
        after: 'remove_solution_after_image'
      };
      const hiddenInputId = map[target];
      if (!hiddenInputId) return;

      const hiddenInput = document.getElementById(hiddenInputId);
      if (hiddenInput) {
        hiddenInput.value = '1';
      }

      const row = button.closest('.board-attachment-item.existing-file');
      if (row) {
        row.remove();
      }
    });
  });

  document.querySelectorAll('.remove-existing-feature-image').forEach((button) => {
    button.addEventListener('click', () => {
      const featureRow = button.closest('.feature-file-row');
      if (!featureRow) return;

      const removeFlag = featureRow.querySelector('.remove-feature-image-flag');
      const existingPath = featureRow.querySelector('input[name$="[existing_image_path]"]');

      if (removeFlag) {
        removeFlag.value = '1';
      }
      if (existingPath) {
        existingPath.value = '';
      }

      const row = button.closest('.board-attachment-item.existing-file');
      if (row) {
        row.remove();
      }
    });
  });
});

