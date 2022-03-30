let flag = false;

function empty(field) {
    if (field.value === "") {
        flag = true;
        return `${field.name.replace("_", " ")} tidak boleh kosong!`;
    }

    return "";
}

function range(field, min, max) {
    if (field.value.length < min) {
        flag = true;
        return `${field.name.replace(
            "_",
            " "
        )} tidak kurang dari ${min} huruf!`;
    } else if (field.value.length > max) {
        flag = true;
        return `${field.name.replace("_", " ")} tidak lebih dari ${min} huruf!`;
    }

    return "";
}

function samelength(field, eq) {
    if (field.value.length !== eq) {
        flag = true;
        return `${field.name.replace(
            "_",
            " "
        )} harus mengandung ${eq} karakter!`;
    }
    return "";
}

function match(field1, field2) {
    if (field1.value !== field2.value) {
        flag = true;
        return `Password tidak sama dengan yang pertama!`;
    }

    return "";
}

function email(field) {
    console.log(field);
    if (!(field.value.includes("@") || field.value.split("@").length == 2)) {
        flag = true;
        return `Format email tidak cocok!`;
    }

    if (
        !(
            field.value.split("@")[1] &&
            field.value.split("@")[1].split(".").length >= 2
        )
    ) {
        flag = true;
        return `Format email tidak cocok!`;
    }

    return "";
}

$("#formBtn").on("click", function (e) {
    // console.log("hai");
    e.preventDefault();
    flag = false;
    const form = $(this).parents("form");
    var formData = new FormData(form[0]);
    let data = form.serializeArray();

    console.log(data);

    $(`#err1`).html(`${empty(data[0]) || range(data[0], 3, 20)}`); //depan
    $(`#err2`).html(`${empty(data[1]) || range(data[1], 3, 20)}`); //tempat
    $(`#err3`).html(`${empty(data[2]) || range(data[2], 3, 20)}`); //warga
    $(`#err4`).html(`${empty(data[3]) || range(data[3], 10, 100)}`); //alamat
    $(`#err6`).html(`${empty(data[4]) || range(data[4], 3, 20)}`); //tengah
    $(`#err7`).html(`${empty(data[5])}`); //ttl
    $(`#err8`).html(
        `${empty(data[6]) || range(data[6], 5, 50) || email(data[6])}`
    ); //email
    $(`#err9`).html(`${empty(data[7]) || samelength(data[7], 5)}`); //pos
    $(`#err11`).html(`${empty(data[8]) || range(data[8], 3, 20)}`); //belakang
    $(`#err12`).html(`${empty(data[9]) || samelength(data[9], 16)}`); //nik
    $(`#err13`).html(`${empty(data[10]) || range(data[10], 11, 14)}`); //hp


    if (!flag) {
        $.ajax({
            type: "POST",
            url: $('#regForm').attr('action'),
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                let responses = JSON.parse(response)
                window.location.href = responses.location;
            }
        });
    }
});
