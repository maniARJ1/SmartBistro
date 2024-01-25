function register() {
    // Hier kannst du die Logik für die Überprüfung der Registrierungsdaten implementieren.
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var studentId = document.getElementById('student-id').value;
    var birthdate = document.getElementById('birthdate').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;

    // Beispielüberprüfung: Überprüfe, ob alle Felder ausgefüllt sind
    if (!firstname || !lastname || !studentId || !birthdate || !email || !password || !confirmPassword) {
        alert("Bitte fülle alle Felder aus.");
        return;
    }

    // Beispielüberprüfung: Überprüfe, ob die Schüler-ID genau vier Zahlen hat
    if (!/^\d{4}$/.test(studentId)) {
        alert("Die Schüler-ID muss genau vier Zahlen haben.");
        return;
    }

    // Beispielüberprüfung: Überprüfe, ob Passwort und Passwort bestätigen übereinstimmen
    if (password !== confirmPassword) {
        alert("Die Passwörter stimmen nicht überein.");
        return;
    }

    // Hier könntest du weitere Überprüfungen und die Logik für die Serveranfrage hinzufügen.
    
    // Erfolgreiche Registrierung: Weiterleitung zur Bestätigungsseite
    window.location.href = "confirmation.html";
}
