function validateForm() {
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const phoneInput = document.getElementById("phone");
    const passwordInput = document.getElementById("password");

    // Validasi apakah semua input telah diisi dengan benar
    if (!nameInput.value.trim()) {
        alert("Nama lengkap harus diisi.");
        return false;
    }

    if (!emailInput.checkValidity()) {
        alert("Email tidak valid.");
        return false;
    }

    if (!phoneInput.checkValidity()) {
        alert("No. Ponsel tidak valid.");
        return false;
    }

    if (passwordInput.value.length < 8) {
        alert("Kata Sandi minimal 8 karakter.");
        return false;
    }

    // Jika semua input telah diisi dengan benar, aktifkan tombol Daftar
    const registerButton = document.getElementById("registerButton");
    registerButton.disabled = false;

    // Anda dapat mengirim form ke server di sini (jika diperlukan)
    // return true;
}
