$('#mainNav').on('change', function() {
    let navCode = $(this).val();

    console.log('navCode:'+navCode);

    if (navCode === "") {
        $('#subNavRow').hide();
        return;
    }

    $.ajax({
        url: "./BackEnd/get_sub_nav.php",
        type: "POST",
        data: { nav_code: navCode },
        success: function(response) {
            let data = JSON.parse(response);

            console.log(data);

            if (data.length > 0) {
                $("#subNav").empty(); // clear previous
                $("#subNav").append('<option>Select Sub Category</option>');

                data.forEach(function(item) {
                    $("#subNav").append(`<option value="${item.id}">${item.sub_name}</option>`);
                });

                $('#subNavRow').show();   // show dropdown

                // ⭐ VERY IMPORTANT ⭐
                $('#subNav').niceSelect('update');

            } else {
                $('#subNavRow').hide();   // hide if no sub-navigation
            }
        }
    });
});