/**
 * Created by alex on 30.04.15.
 */
$( document ).ready(function() {
    $("input[name=join]:radio").change(function () {
        var keyword = $(this).val();
        $.ajax({
            dataType: 'json',
            type: "POST",
            data: {'word':keyword},
            url: 'db.php',
            success: function(data)
            {
                $('#tab3').html('');
                $('#tab3').append(data);
            }
        })
    })
});