function validateForm() {
    var nameInput = document.getElementById('nameInput');
    var nameValue = nameInput.value.trim();

    if (nameValue === '') {
        alert('Please enter your name.');
        document.getElementById('nameInput').focus();
        return false;
    }

    return true;
}