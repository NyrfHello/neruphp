function togglecode() {
    var kotak = document.getElementById("codebox");
    var tombol = document.getElementById("codebutton");

    if (kotak.style.display == "none" || kotak.style.display == "") {
        kotak.style.display = "block";
        tombol.innerHTML = "✕ close code";
    } else {
        kotak.style.display = "none";
        tombol.innerHTML = "👁 view code";
    }
}

function refreshcode() {
    var tombol = document.getElementById("refreshbutton");
    if (tombol) {
        tombol.classList.add("spin");
    }

    if (typeof dorandom === "function") {
        dorandom();
        setTimeout(function() {
            if (tombol) tombol.classList.remove("spin");
        }, 300);
        return;
    }

    fetch(window.location.href)
        .then(function(respon) {
            return respon.text();
        })
        .then(function(html) {
            var div = document.createElement("div");
            div.innerHTML = html;
            var isibaru = div.querySelector("#whitescreen").innerHTML;
            document.getElementById("whitescreen").innerHTML = isibaru;
            setTimeout(function() {
                if (tombol) tombol.classList.remove("spin");
            }, 300);
        })
        .catch(function(err) {
            setTimeout(function() {
                if (tombol) tombol.classList.remove("spin");
            }, 300);
        });
}
