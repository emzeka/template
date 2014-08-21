/**
 * Created by Tarantino.
 * Date: 22.02.14
 * Time: 23:31
 * Project: fixt
 * Come to the TRUE SIDE
 */

(function( $ ) {
    $.fn.choose_thumb = function(settings) {

        this.on('click', function(){

            window.KCFinder = {};
            window.KCFinder.callBack = function(url) {
                $(settings.target).attr(settings.attr, url);
                $(settings.to_post).attr('value', url);
                window.KCFinder = null;
            };

        });

        this.popupWindow({
            windowURL:'/assets/plugins/ckeditor/kcfinder/browse.php?type=images',
            centerScreen:1,
            width:1000
        });

    };

    $.fn.init_switch = function(settings) {

        this.bootstrapSwitch(settings);

    };

    $.fn.selector_worker = function($target) {

        if ($target == 'self') {

            var container = $(this);

            container.empty().multiselect('disable').multiselect('rebuild');

            $.ajax({
                type: 'POST',
                url:  $(this).data('self-url'),
                dataType: 'json',
                success: function (json) {

                    if (json && Object.keys(json).length > 0) {

                        container.multiselect('enable');

                        $.each(json, function(index, value){

                            if (value.name !== undefined) {
                                container.append(new Option(value.name, value.id));
                            } else {
                                var opt_group = $('<optgroup/>');

                                opt_group.attr('label', index);

                                $.each(value, function(index, value){
                                    opt_group.append(new Option(value.name, value.id));
                                });

                                container.append(opt_group);
                            }
                        });

                        if (container.data('multiple') == true) {
                            $.each(container.data('value').toString().split(','), function(i,e){
                                $("#" + container.attr('id') + " option[value='" + e + "']").prop('selected', true);
                            });
                        } else {
                            container.val(container.data('value'));
                        }


                    }

                    container.multiselect('rebuild');
                    container.trigger('change');

                }
            });

            container.selector_worker();

        }


        if ($target != 'self' && $(this).data('children') != undefined) {

            var that = $($(this).data('children'));

            that.empty().multiselect('disable').multiselect('rebuild');

            $(this).on('change', function() {

                that.empty().multiselect('disable').multiselect('rebuild');

                $.ajax({
                    type: 'POST',
                    data: {id: $(this).val()},
                    url:  $(this).data('url'),
                    dataType: 'json',
                    success: function (json) {


                        if (json && Object.keys(json).length > 0) {

                            that.multiselect('enable');

                            $.each(json, function(index, value){

                                if (value.name !== undefined) {
                                    that.append(new Option(value.name, value.id));
                                } else {
                                    var opt_group = $('<optgroup/>');

                                    opt_group.attr('label', index);

                                    $.each(value, function(index, value){
                                        opt_group.append(new Option(value.name, value.id));
                                    });

                                    that.append(opt_group);
                                }
                            });

                            if (that.data('multiple') == true) {

                                $.each(that.data('value').toString().split(','), function(i,e){
                                    $("#" + that.attr('id') + " option[value='" + e + "']").attr('selected', true);
                                });

                            } else {
                                that.val(that.data('value'));
                            }

                        }

                        that.multiselect('rebuild');
                        that.trigger('change');

                    }
                });

            });

            that.selector_worker();

        }

    }

})(jQuery);


