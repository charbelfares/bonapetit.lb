function openForm() {
    document.getElementById("myForm").style.display = "block";
    $('*').filter(function() {
        return $(this).css('z-index') == 1;
    }).each(function() {
        $(this).style.opacity="50%";
    });
    
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}