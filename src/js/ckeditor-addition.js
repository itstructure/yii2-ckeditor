
/**
 * Init "On change handler".
 *
 * @param id
 */
function initItstructureOnChangeHandler(id)
{
    CKEDITOR && CKEDITOR.instances[id] && CKEDITOR.instances[id].on('change', function () {
        CKEDITOR.instances[id].updateElement();
        $('#' + id).trigger('change');
        return false;
    });
}

/**
 * Init "Csrf handler" for uploading files.
 */
function initItstructureCsrfHandler()
{
    yii & $(document).off('click', '.cke_dialog_tabs a[id^="cke_Upload_"]').on('click', '.cke_dialog_tabs a[id^="cke_Upload_"]', function () {
        var $formList = $('.cke_dialog_ui_input_file iframe').contents().find('form');
        var csrfParam = yii.getCsrfParam();
        $formList.each(function () {
            if (!$(this).find('input[name=' + csrfParam + ']').length) {
                var csrfTokenInput = $('<input/>').attr({
                    'type': 'hidden',
                    'name': csrfParam
                }).val(yii.getCsrfToken());
                $(this).append(csrfTokenInput);
            }
        });
    });
}
