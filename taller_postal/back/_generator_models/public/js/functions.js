(function($, CMS, undefined) {
    $(document).on('click', '#ckall', function() {
        var $this = $(this);
        if($this.attr('checked')){
          $('.chekeds').attr('checked', true);
        }else{
          $('.chekeds').attr('checked', false);  
        }
    });

})(window.jQuery, window.CMS);