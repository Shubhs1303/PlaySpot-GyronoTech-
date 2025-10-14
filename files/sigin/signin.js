const form = document.querySelector("form");
    nField = form.querySelector(".name"),
    nInput = nField.querySelector("input"),

    mField = form.querySelector(".mobile"),
    mInput = mField.querySelector("input"),

    eField = form.querySelector(".email"),
    eInput = eField.querySelector("input"),

    pField = form.querySelector(".password"),
    pInput = pField.querySelector("input");

form.onsubmit = (e) => {
    e.preventDefault();

    (nInput.value == "") ? nField.classList.add("shake", "error"): checkmobile();
    (mInput.value == "") ? mField.classList.add("shake", "error"): checkname();
    (eInput.value == "") ? eField.classList.add("shake", "error"): checkEmail();
    (pInput.value == "") ? pField.classList.add("shake", "error"): checkPass();

    setTimeout(() => {
        nField.classList.remove("shake");
        eField.classList.remove("shake");
        mField.classList.remove("shake");
        pField.classList.remove("shake");
    }, 500);

    eInput.onkeyup = () => { checkEmail(); }
    pInput.onkeyup = () => { checkPass(); }

    function checkname() {
        if (nInput.value == "") {
            nField.classList.add("error");
            nField.classList.remove("valid");
        } else {
            nField.classList.remove("error");
            nField.classList.add("valid");
        }
    }

    function checkEmail() {
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!eInput.value.match(pattern)) {
            eField.classList.add("error");
            eField.classList.remove("valid");
            let errorTxt = eField.querySelector(".error-txt");

            (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address": errorTxt.innerText = "Email can't be blank";
        } else {
            eField.classList.remove("error");
            eField.classList.add("valid");
        }
    }

    function checkmobile() {
        let pattern = /^(0|91)?[6-9][0-9]{9}$/;
        if (!mInput.value.match(pattern)) {
            mField.classList.add("error");
            mField.classList.remove("valid");
            let errorTxt = mField.querySelector(".error-txt");

            (mInput.value != "") ? errorTxt.innerText = "Enter a valid Mobile number": errorTxt.innerText = "Mobile number can't be blank";
        } else {
            mField.classList.remove("error");
            mField.classList.add("valid");
        }
    }

    function checkPass() {
        if (pInput.value == "") {
            pField.classList.add("error");
            pField.classList.remove("valid");
        } else {
            pField.classList.remove("error");
            pField.classList.add("valid");
        }
    }

    if (!eField.classList.contains("error") && !pField.classList.contains("error") && !nField.classList.contains("error") && !mField.classList.contains("error")) 
    {
        window.location.href = form.getAttribute("action");
    }
}