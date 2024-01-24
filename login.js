function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Überprüfung von Benutzername und Passwort
    if (username === 'JBLMN' && password === 'Spengergasse') {
        // Authentifizierung erfolgreich, weiterleiten zur Ziel-Seite
        window.location.href = 'Seite.html';
    } else {
        // Authentifizierung fehlgeschlagen, zeige eine Fehlermeldung
        alert('Benutzername oder Passwort ist falsch. Bitte versuche es erneut.');
    }
}
