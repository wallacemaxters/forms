(function($, window) {
  var $messageBox, defaults;
  $messageBox = $('<div />');
  defaults = {
    messageClass: 'wgm-input-message'
  };
  $.fn.wgmFormMessage = function(options) {
    var $form, $inputs;
    options = $.extend({}, defaults, options);
    $messageBox.addClass(options.messageClass);
    $inputs = this.is('form') ? this.find(':input:not(:button)') : this;
    $form = this.is('form') ? this : $inputs.closest('form');
    $inputs.each(function() {
      if ($(this).siblings(options.messageClass)) {
        $(this).after($messageBox.clone());
      }
    });
    $form.submit(function(e) {
      return true;
    });
  };
})(jQuery, window);
