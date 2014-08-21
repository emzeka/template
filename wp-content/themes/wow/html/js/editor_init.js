/**
 * Created by Tarantino.
 * Date: 22.02.14
 * Time: 23:31
 * Project: fixt
 * Come to the TRUE SIDE
 */

(function( $ ) {
    $.fn.init_editor = function(settings) {

        this.ckeditor({
            'filebrowserBrowseUrl':     '/assets/plugins/ckeditor/kcfinder/browse.php?type=files',
            'filebrowserImageBrowseUrl':'/assets/plugins/ckeditor/kcfinder/browse.php?type=images',
            'filebrowserFlashBrowseUrl':'/assets/plugins/ckeditor/kcfinder/browse.php?type=flash'
        });

        if(typeof CKEDITOR !== 'undefined') {

            CKEDITOR.on( 'instanceReady', function( ev ) {

                ev.editor.dataProcessor.writer.setRules( '*', {
                    indent: false,
                    breakBeforeOpen: true,
                    breakAfterOpen: false,
                    breakBeforeClose: false,
                    breakAfterClose: true
                });
            });
        }

    };

    $.fn.init_editor_front = function() {

        this.ckeditor({
            toolbar: 'Basic',
        });

        if(typeof CKEDITOR !== 'undefined') {

            CKEDITOR.on( 'instanceReady', function( ev ) {

                ev.editor.dataProcessor.writer.setRules( '*', {
                    indent: false,
                    breakBeforeOpen: true,
                    breakAfterOpen: false,
                    breakBeforeClose: false,
                    breakAfterClose: true
                });
            });
        }

    };
})(jQuery);