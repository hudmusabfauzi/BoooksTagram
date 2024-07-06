function showForgotPasswordPopup() {
  const popup = document.getElementById("forgotPasswordPopup");
  popup.style.display = "flex";
}

function closeForgotPasswordPopup() {
  const popup = document.getElementById("forgotPasswordPopup");
  popup.style.display = "none";
}

function sendResetPasswordEmail() {
  const emailInput = document.querySelector("#forgotPasswordPopup input[type='email']");
  const email = emailInput.value;
  // Lakukan logika untuk mengirim email reset password ke alamat email yang diberikan
  alert(`Permintaan reset password telah dikirim ke ${email}. Silakan cek email Anda.`);
  closeForgotPasswordPopup();
}
