$(document).ready(function() {

    // Attach fastclick
    FastClick.attach(document.body);

    // Activate tooltip bootstrap
    $('[data-toggle=tooltip]').tooltip({
        container: 'body',
    });

    $('select.form-control').select2({
    	"theme": "bootstrap"
    });

    // Add your own custom script
    // ...
});
