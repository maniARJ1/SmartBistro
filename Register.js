function register() {
    // Hier kannst du die Logik für die Überprüfung der Registrierungsdaten implementieren.
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var studentId = document.getElementById('student-id').value;
    var nationality = document.getElementById('nationality').value;
    var birthdate = document.getElementById('birthdate').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;

    // Beispielüberprüfung: Überprüfe, ob Passwort und Passwort bestätigen übereinstimmen
    if (password !== confirmPassword) {
        alert("Die Passwörter stimmen nicht überein.");
        return;
    }

    // Hier könntest du weitere Überprüfungen und die Logik für die Serveranfrage hinzufügen.
    
    // Erfolgreiche Registrierung: Weiterleitung zur Bestätigungsseite
    window.location.href = "confirmation.html";
}
