const min = -5;
const max = 3;

qS("#yText").oninput = revalidateAns;
qS("#yText").onchange = revalidateAns;

function revalidateAns() {
    let yField = qS("#yText").value;
    let ans = validateY(yField);
    qS("#yNameError").textContent=ans;
}

function validateY(y) {

    if (/[\s*]/.test(y) || y === "") {
        return "Забыли ввести"
    }

    y = y.trim();

    if (! ( /^-?\d*[.,]?\d+$/.test(y) )) {
        return "Y - десятичное число";
    }
    if (y < min || y > max) {
        return min + " <= Y <= " + max;
    }

    return "";
}

function qS(element) {
    return document.querySelector(element);
}

function el(element) {
    return document.getElementById(element);
}
