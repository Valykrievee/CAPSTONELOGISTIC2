$(document).ready(function() {
    // Handle navigation clicks
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        
        // Remove active class from all nav links
        $('.nav-link').removeClass('active');
        
        // Add active class to the clicked nav link
        $(this).addClass('active');
        
        // Get target section to show
        var targetSection = $(this).data('target');
        
        // Hide all sections
        $('.section').removeClass('active');
        
        // Show the targeted section
        $('#' + targetSection).addClass('active');
    });
});
