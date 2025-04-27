<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="telegram-web-app.js"></script>
    <style>
        body {
            background-color: var(--tg-theme-bg-color);
            color: var(--tg-theme-text-color);
        }
        button {
            background-color: var(--tg-theme-button-color);
            color: var(--tg-theme-button-text-color);
            border: 0;
            padding: 5px 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <!--<button id="toggle-main-btn">Main Button</button>
    <button id="close-app">Close</button>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto doloribus dolorum ea inventore
        itaque modi reprehenderit, sequi suscipit. Assumenda consequuntur ducimus eum pariatur, placeat quae velit
        voluptatem. Autem, ipsum!</p>-->
    <h3>Subscribe</h3>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const tg = window.Telegram.WebApp;
    // console.log(tg);
    tg.ready();
    tg.expand();

    /*document.getElementById('close-app').addEventListener('click', () => {
        tg.close();
    });

    document.getElementById('toggle-main-btn').addEventListener('click', () => {
        if (tg.MainButton.isVisible) {
            tg.MainButton.hide();
        } else {
            tg.MainButton.show();
            tg.MainButton.setParams({
                text: "Send Form",
                color: '#d260aa',
                text_color: '#fff'
            });
        }
    });*/

    // tg.MainButton.show();
    /*tg.MainButton.onClick(() => {
        tg.showAlert('Hello');
    });*/
    /*tg.onEvent('mainButtonClicked', () => {
        tg.showAlert('Hello 2');
    });*/

    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');

    const data = {name: "", email: ""};

    tg.onEvent('mainButtonClicked', () => {
        tg.sendData(JSON.stringify(data));
    });

    nameInput.addEventListener("input", () => {
        let val = nameInput.value.trim();
        if (val === '') {
            data.name = '';
            toggleClass(nameInput, 'is-invalid', 'is-valid');
        } else {
            data.name = val;
            toggleClass(nameInput, 'is-valid', 'is-invalid');
        }
        checkForm();
    });

    emailInput.addEventListener("input", () => {
        let val = emailInput.value.trim();
        const re = /\w+@\w+\.\w{2,6}/;
        if (re.test(val)) {
            data.email = val;
            toggleClass(emailInput, 'is-valid', 'is-invalid');
        } else {
            data.email = '';
            toggleClass(emailInput, 'is-invalid', 'is-valid');
        }
        checkForm();
    });

    function checkForm() {
        if (!data.name || !data.email) {
            tg.MainButton.hide();
        } else {
            tg.MainButton.setParams({
                text: "Send Form",
                color: '#d260aa',
                text_color: '#fff'
            });
            tg.MainButton.show();
        }
    }

    function toggleClass(field, class_add, class_remove) {
        field.classList.add(class_add);
        field.classList.remove(class_remove);
    }

</script>
</body>
</html>
