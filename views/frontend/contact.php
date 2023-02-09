<?php
include '../../header.php';
?>
        <div class="col-10">
            <h1>Contactez-nous</h1>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label"
                        >Votre prénom</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="validationCustom01"
                        value=""
                        required
                    />
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label"
                        >Votre nom</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="validationCustom02"
                        value=""
                        required
                    />
                </div>
                <div class="mb-3">
                    <label
                        for="exampleFormControlInput1"
                        class="form-label"
                        >Email</label
                    >
                    <input
                        type="email"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="name@example.com"
                    />
                </div>
                <div class="mb-3">
                    <label
                        for="exampleFormControlTextarea1"
                        class="form-label"
                        >Votre message</label
                    >
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="5"
                        maxlength="1500"
                    ></textarea>
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="submit">
                        Envoyer
                    </button>
                </div>
            </form>
<?php
include '../../footer.php';
?>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
