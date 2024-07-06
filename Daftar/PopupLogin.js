function showGoogleLoginPopup() {
    // Tampilkan modal (popup)
    const modal = document.getElementById("googleLoginModal");
    modal.style.display = "block";
}

function closeGoogleLoginPopup() {
    // Tutup modal (popup)
    const modal = document.getElementById("googleLoginModal");
    modal.style.display = "none";
}

function renderGoogleSignInButton() {
    // Render tombol login menggunakan akun Google
    gapi.signin2.render("googleSignInButton", {
        "scope": "profile email",
        "width": 200,
        "height": 40,
        "longtitle": true,
        "theme": "dark",
        "onsuccess": onGoogleSignInSuccess,
        "onfailure": onGoogleSignInFailure
    });
}

function onGoogleSignInSuccess(googleUser) {
    // Proses login berhasil
    const profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId());
    console.log("Name: " + profile.getName());
    console.log("Email: " + profile.getEmail());

    // Tampilkan data pengguna ke halaman atau lakukan aksi lainnya
}

function onGoogleSignInFailure(error) {
    // Proses login gagal
    console.log("Google Sign-In Failure:", error);
}
