const validation = new JustValidate("#signup"); // JustValidate är från JustValidate library som är importerad

validation
    .addField("#username", [
        {
            rule: "required"
        }

    ])
    .addField("#email", [
        {
            rule: "required"

        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" +
                    encodeURIComponent(value))
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (json) {
                        return json.available;
                    });
            },
            errorMessage: "Email Already Taken"
        }

    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("signup").submit();

    })
    ;