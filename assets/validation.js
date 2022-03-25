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
    console.log("hai");
    e.preventDefault();
    flag = false;
    const form = $(this).parents("form");
    var formData = new FormData(form[0]);
    let data = form.serializeArray();

    $(`#err1`).html(`${empty(data[0]) || range(data[0], 3, 20)}`);
    $(`#err2`).html(`${empty(data[1]) || range(data[1], 3, 20)}`);
    $(`#err3`).html(`${empty(data[2]) || range(data[2], 3, 20)}`);
    $(`#err4`).html(`${empty(data[3]) || range(data[3], 10, 100)}`);
    $(`#err5`).html(`${empty(data[4]) || range(data[4], 5, 20)}`);
    $(`#err6`).html(`${empty(data[5]) || range(data[5], 3, 20)}`);
    $(`#err7`).html(`${empty(data[6])}`);
    $(`#err8`).html(
        `${empty(data[7]) || range(data[7], 5, 50) || email(data[7])}`
    ); //email
    $(`#err9`).html(`${empty(data[8]) || samelength(data[8], 5)}`); //pos
    $(`#err10`).html(`${empty(data[9]) || range(data[9], 3, 50)}`); //pass1
    $(`#err11`).html(`${empty(data[10]) || range(data[10], 3, 20)}`);
    $(`#err12`).html(`${empty(data[11]) || samelength(data[11], 16)}`); //nik
    $(`#err13`).html(`${empty(data[12]) || range(data[12], 11, 14)}`); //hp
    $(`#err14`).html(
        `${
            empty(data[13]) ||
            range(data[13], 3, 50) ||
            match(data[9], data[13])
        }`
    ); //pass2


    if (!flag) {
        $.ajax({
            type: "POST",
            url: "./reg_process.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                window.location.href = './login.php';
            }
        });
    }
});
