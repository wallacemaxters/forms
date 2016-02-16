(($, window) ->

    $messageBox = $('<div />')

    defaults = 
        messageClass: 'wgm-input-message',

    $.fn.wgmFormMessage = (options) ->

        options = $.extend {}, defaults, options

        $messageBox.addClass options.messageClass

        $inputs = if @is 'form' then @find ':input:not(:button)' else @;

        $form = if @is 'form' then @ else $inputs.closest('form');

        $inputs.each ->
            if $(@).siblings options.messageClass
                $(@).after $messageBox.clone()
            return

        $form.submit((e) -> true)

        return

    return

)(jQuery, window)