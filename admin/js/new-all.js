$(function(){														/* datepicker plugin */
   $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
    });
});

function isNumberKey(evt){ 											/* keypress numberic only */
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
$(".chosen-menu").chosen({											/* chosen plugin */
    enable_search_threshold: 10,
});

