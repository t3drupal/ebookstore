(function($, Drupal, drupalSettings) {
    $(document).ready(function() {

        $('#edit-field-lecteur-value').click(function() {
            if (this.checked) {
                $('#edit-field-editeur-value').prop('checked', false);
                $('#grlecteur').show();
                $('#grediteur').hide();
            }
            else {
                $('#edit-field-editeur-value').prop('checked', true);
                $('#grlecteur').hide();
                $('#grediteur').show();
            }
        });

        $('#edit-field-editeur-value').click(function() {
            if (this.checked) {
                $('#edit-field-lecteur-value').prop('checked', false);
                $('#grediteur').show();
                $('#grlecteur').hide();
            }
            else {
                $('#edit-field-lecteur-value').prop('checked', true);
                $('#grlecteur').show();
                $('#grediteur').hide();
            }
        });
    });
})(jQuery, Drupal, drupalSettings);