let userNameFlag = 0;
let emailFlag = 0;

let confirmPasswordFlag = 0;
function validateForm() {
    const userChecked = document.getElementById('user').checked;
    const adminChecked = document.getElementById('admin').checked;
    if (!(userChecked || adminChecked)) {
        document.getElementById('roleS').innerHTML = "Please select a role";
        return false;
    }

    const firstName = document.getElementById('firstName').value;
    if (firstName.length < 4) {
        document.getElementById('firstNameS').innerHTML = 'length is less than 4';
        return false;
    } else {
        const allowedCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_.';
        for (let i = 0; i < firstName.length; i++) {
            const character = firstName[i];
            if (allowedCharacters.indexOf(character) === -1) {
                document.getElementById('firstNameS').innerHTML = 'only alphabets';
                return false;
            }
        }
        document.getElementById('firstNameS').innerHTML = "";
    }

    const lastName = document.getElementById('lastName').value;
    if (lastName.length < 4) {
        document.getElementById('lastNameS').innerHTML = 'length is less than 4';
        return false;
    } else {
        const allowedCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_.';
        for (let i = 0; i < lastName.length; i++) {
            const character = lastName[i];
            if (allowedCharacters.indexOf(character) === -1) {
                document.getElementById('lastNameS').innerHTML = 'only alphabets';
                return false;
            }
        }
        document.getElementById('lastNameS').innerHTML = "";
    }

    if (userNameFlag == 0) {
        document.getElementById('userNameS').innerHTML = "userName is invalid";
        return false;
    }
    else if (userNameFlag == 1) {
        document.getElementById('userNameS').innerHTML = "userName not available";
        return false;
    }

    if (emailFlag == 0) {
        document.getElementById('emailS').innerHTML = "email is invalid";
        return false;
    }
    else if (emailFlag == 1) {
        document.getElementById('emailS').innerHTML = "email not available";
        return false;
    }

    const phone = document.getElementById('phone').value;
    if (phone.length !== 11) {
        document.getElementById('phoneS').innerHTML = "phone number can not be empty and length must be 11";
        return false;
    }
    const allowedCharacters = '0123456789';

    for (let i = 0; i < phone.length; i++) {
        const character = phone[i];

        if (allowedCharacters.indexOf(character) === -1) {
            document.getElementById('phoneS').innerHTML = "Must be number";
            return false;
        }
    }
    document.getElementById('phoneS').innerHTML = "";

    

    const password = document.getElementById('password').value;
    if (password.length < 8) {
        document.getElementById('passwordS').innerHTML = "can not be empty,length not less than 8,must contain special,capital and special characters";
        return false;
    } else {
        const allowedCharactersSpecial = '.,!@#$%^&*|:;';
        const allowedCharactersCapitalLetter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        const allowedCharactersSmallLetter = 'abcdefghijklmnopqrstuvwxyz';
        const allowedCharactersNumber = '0123456789';
        let countSpCharacter = 0;
        let countCapLetter = 0;
        let countSmLetter = 0;
        let countNumber = 0;
        for (let i = 0; i < password.length; i++) {
            const character = password[i];
            if (allowedCharactersSpecial.indexOf(character) !== -1) {
                countSpCharacter = 1;
            }
            if (allowedCharactersCapitalLetter.indexOf(character) !== -1) {
                countCapLetter = 1;
            }
            if (allowedCharactersSmallLetter.indexOf(character) !== -1) {
                countSmLetter = 1;
            }
            if (allowedCharactersNumber.indexOf(character) !== -1) {
                countNumber = 1;
            }
        }
        if (countSpCharacter === 0 || countCapLetter === 0 || countSmLetter === 0 || countNumber === 0) {
            document.getElementById('passwordS').innerHTML = "can not be empty,length not less than 8,must contain special,capital and special characters";
            return false;
        }

    }
    document.getElementById('passwordS').innerHTML = "";

    if (confirmPasswordFlag === 0) {
        document.getElementById('confirmPasswordS').innerHTML = "password mismatch";
        return false;
    }


    const maleChecked = document.getElementById('male').checked;
    const femaleChecked = document.getElementById('female').checked;
    const othersChecked = document.getElementById('others').checked;

    if (!(maleChecked || femaleChecked || othersChecked)) {
        document.getElementById('genderS').innerHTML = "Please select a gender";
        return false;
    }


    const district = document.getElementById('district').value;
    if (district === "") {
        document.getElementById('districtS').innerHTML = "Please select a district";
        return false;
    }

    const address = document.getElementById('address').value;
    if (address === '') {
        document.getElementById('addressS').innerHTML = "Please enter your address";
        return false;
    } else {
        document.getElementById('addressS').innerHTML = "";
    }


    const profileInput = document.getElementById('profile');
    const profileS = document.getElementById('profileS');
    if (profileInput.files.length === 0) {
        profileS.innerHTML = "Please select a profile picture";
        return false;
    }
    const selectedFile = profileInput.files[0];

    const allowedFileTypes = ['image/jpeg', 'image/png'];
    if (!allowedFileTypes.includes(selectedFile.type)) {
        profileS.innerHTML = "Invalid file type. Please select a JPEG or PNG image.";
        return false;
    }

    const maxSizeInBytes = 5 * 1024 * 1024; 
    if (selectedFile.size > maxSizeInBytes) {
        profileS.innerHTML = "File size exceeds the maximum allowed size (5 MB).";
        return false;
    }
    profileS.innerHTML = "";
    
    const agreementChecked = document.getElementById('agreement').checked;
    if (!agreementChecked) {
        document.getElementById('agreementS').innerHTML = "You must accept the Account Agreement";
        return false;
    } else {
        document.getElementById('agreementS').innerHTML = "";
    }
    // Additional validations can be added here

    // If all validations pass, you can return true to submit the form
    return true;
}

function userNameCheck() {
    const userName = document.getElementById('userName').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/userNameCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('userName=' + userName);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            if (response === "userName is invalid") {
                userNameFlag = 0;
            }
            else if (response === "userName not available") {
                userNameFlag = 1;
            }
            else if (response === "userName available") {
                userNameFlag = 2;
            }
            document.getElementById('userNameS').innerHTML = response;
        }
    }
}

function emailCheck() {
    const email = document.getElementById('email').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/emailCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('email=' + email);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            if (response === "email is invalid") {
                emailFlag = 0;
            }
            else if (response === "email not available") {
                emailFlag = 1;
            }
            else if (response === "email available") {
                emailFlag = 2;
            }
            document.getElementById('emailS').innerHTML = response;
        }
    }
}

function confirmPasswordCheck() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    if (password === confirmPassword) {
        document.getElementById('confirmPasswordS').innerHTML = '';
        confirmPasswordFlag = 1;

    }
    else {
        document.getElementById('confirmPasswordS').innerHTML = 'password mismatch';
        confirmPasswordFlag = 0;
    }


}



