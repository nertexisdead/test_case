<script>
$(document).ready(function() {
    $('#myForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/save-data',
            data: $('#myForm').serialize(),
            success: function(data) {
                alert(data.message); // Оповещение об успешном сохранении
                $('#myForm')[0].reset(); // Очистка формы
            },
            error: function(xhr) {
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errorMessages = Object.values(xhr.responseJSON.errors).join(
                        '\n');
                    alert(errorMessages);
                } else {
                    console.log(xhr);
                }
            }

        });
    });
});
</script>