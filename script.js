function toggleCode() {
    var codeSec = document.getElementById("codeSection");
    var btn = document.querySelector(".btn-toggle-code");
    if (!codeSec) return;
    if (codeSec.style.display === "none" || codeSec.style.display === "") {
        codeSec.style.display = "block";
        if (btn) btn.innerHTML = "✕ Tutup Kode";
    } else {
        codeSec.style.display = "none";
        if (btn) btn.innerHTML = "👁 Lihat Kode";
    }
}

function refreshCode(event) {
    if (event) event.preventDefault();
    var refreshBtn = document.querySelector(".go-refresh");
    var screen = document.querySelector(".php-inside-screen");
    
    if (refreshBtn) refreshBtn.classList.add("spinning");
    if (screen) screen.style.opacity = "0.4";

    var url = window.location.pathname + "?_t=" + Date.now();
    fetch(url)
        .then(function(res) {
            return res.text();
        })
        .then(function(html) {
            var parser = new DOMParser();
            var doc = parser.parseFromString(html, "text/html");
            var newScreen = doc.querySelector(".php-inside-screen");
            if (newScreen && screen) {
                screen.innerHTML = newScreen.innerHTML;
            }
        })
        .catch(function(err) {
            console.error("Gagal refresh kode:", err);
        })
        .finally(function() {
            if (screen) screen.style.opacity = "1";
            if (refreshBtn) {
                setTimeout(function() {
                    refreshBtn.classList.remove("spinning");
                }, 400);
            }
        });
}

document.addEventListener("DOMContentLoaded", function() {
    var refreshBtn = document.querySelector(".go-refresh");
    if (refreshBtn) {
        refreshBtn.addEventListener("click", refreshCode);
    }
});
