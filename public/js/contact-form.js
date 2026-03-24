/**
 * 문의하기 폼: 첨부파일(최대 3개) DataTransfer 동기화, 접수 완료 팝업
 */
(function ($) {
    const MAX_FILES = 3;
    const $form = $('#contact_form');
    const $fileInput = $('#contact_file_input');
    const $fileList = $('.contact_input_files');

    if (!$form.length) {
        return;
    }

    let dataTransfer = new DataTransfer();

    function syncInputFiles() {
        if ($fileInput.length && $fileInput[0]) {
            $fileInput[0].files = dataTransfer.files;
        }
    }

    function renderFileList() {
        if (!$fileList.length) {
            return;
        }
        $fileList.empty();
        for (let i = 0; i < dataTransfer.items.length; i += 1) {
            const file = dataTransfer.items[i].getAsFile();
            const $btn = $('<button>', {
                type: 'button',
                class: 'file',
                text: file.name,
                'aria-label': file.name + ' 삭제',
            });
            $btn.attr('data-file-index', String(i));
            $fileList.append($btn);
        }
    }

    $fileInput.on('change', function () {
        const incoming = Array.from(this.files || []);
        for (let f = 0; f < incoming.length; f += 1) {
            const file = incoming[f];
            if (dataTransfer.items.length >= MAX_FILES) {
                window.alert('파일은 최대 3개까지 첨부 가능합니다.');
                break;
            }
            const duplicate = Array.from(dataTransfer.files).some(function (existing) {
                return existing.name === file.name && existing.size === file.size;
            });
            if (duplicate) {
                continue;
            }
            dataTransfer.items.add(file);
        }
        syncInputFiles();
        renderFileList();
    });

    $fileList.on('click', 'button.file', function () {
        const idx = parseInt($(this).attr('data-file-index'), 10);
        if (Number.isNaN(idx)) {
            return;
        }
        const next = new DataTransfer();
        for (let i = 0; i < dataTransfer.items.length; i += 1) {
            if (i !== idx) {
                next.items.add(dataTransfer.items[i].getAsFile());
            }
        }
        dataTransfer = next;
        syncInputFiles();
        renderFileList();
    });

    let lastFocus = null;

    function openPopup(id) {
        lastFocus = document.activeElement;
        const $popup = $('#' + id);
        $popup.removeAttr('hidden').attr('aria-hidden', 'false');
        $('body').attr('aria-hidden', 'true');
        $popup.find('.btn_close').focus();
        return $popup;
    }

    function closePopup(id) {
        const $popup = $('#' + id);
        $popup.attr('hidden', true).attr('aria-hidden', 'true');
        $('body').removeAttr('aria-hidden');
        if (lastFocus) {
            $(lastFocus).focus();
        }
    }

    const $pageRoot = $('#contact_page_root');
    if ($pageRoot.length && $pageRoot.attr('data-contact-success') === '1') {
        openPopup('popup_complete').addClass('on');
    }

    function focusFirstFieldError() {
        const $firstMsg = $form.find('.contact_field_error').first();
        if (!$firstMsg.length) {
            return;
        }
        const el = $firstMsg[0];
        el.scrollIntoView({ behavior: 'smooth', block: 'center' });
        const $holder = $firstMsg.closest('dd').length ? $firstMsg.closest('dd') : $firstMsg.closest('fieldset');
        if (!$holder.length) {
            return;
        }
        let $target = $holder.find('input:not([type="hidden"]):not([type="checkbox"]):not([type="radio"]), textarea, select').first();
        if (!$target.length) {
            $target = $holder.find('input[type="checkbox"]').first();
        }
        if (!$target.length) {
            $target = $holder.find('#contact_file_input');
        }
        if ($target.length) {
            try {
                $target[0].focus({ preventScroll: true });
            } catch (e) {
                $target[0].focus();
            }
        }
    }

    focusFirstFieldError();

    $form.on('submit', function () {
        syncInputFiles();
    });

    $(document).on('click', '.popup .btn_close', function () {
        closePopup($(this).closest('.popup').attr('id'));
    });
    $(document).on('click', '.popup .dm', function () {
        closePopup($(this).closest('.popup').attr('id'));
    });
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
            const $openPopup = $('.popup:not([hidden])');
            if ($openPopup.length) {
                closePopup($openPopup.attr('id'));
            }
        }
    });
    $(document).on('keydown', '.popup', function (e) {
        if (e.key !== 'Tab') {
            return;
        }
        const $focusable = $(this)
            .find('button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])')
            .filter(':visible');
        const $first = $focusable.first();
        const $last = $focusable.last();
        if (e.shiftKey) {
            if ($(document.activeElement).is($first)) {
                $last.focus();
                e.preventDefault();
            }
        } else if ($(document.activeElement).is($last)) {
            $first.focus();
            e.preventDefault();
        }
    });
})(jQuery);
