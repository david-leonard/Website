function validateForm() {
    var email = document.forms["contactform"]["email"].value;
    var subject = document.forms["contactform"]["subject"].value;
    var message = document.forms["contactform"]["message"].value;

    if (email == null || email == "") {
        alert("Email must be filled out.");
        return false;
    }
    else if (subject == null || subject == "") {
        alert("Subject must be filled out.");
        return false;
    }
    else if (message == null || message == "") {
        alert("Message must be filled out.");
        return false;
    }
};
