$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $("#province-select").change(function (e) {
        var target = $(this).children("option:selected"),
            str = "";
        target.attr("selected", "");

        $("#province-select option")
            .not(target)
            .removeAttr("selected");

        $.ajax({
            type: "post",
            url: url,
            data: { province_id: target.val() },
            success: function (response) {
                if (response.length > 0) {
                    response.forEach(function (value) {
                        str +=
                            '<option value="' +
                            value["id"] +
                            '">' +
                            value["name"] +
                            "</option>";
                        $("#district-select").html(
                            '<option value="0">Quận / Huyện</option>' + str
                        );
                    });
                } else {
                    $("#district-select").html(
                        '<option value="">Quận / Huyện</option>'
                    );
                }
            }
        });
    });
});
