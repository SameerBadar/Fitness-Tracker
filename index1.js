document.getElementById('signing').style.display = 'none';

function validation(event){
   let firstName = document.getElementById('firstName').value.trim();
    let lastName = document.getElementById('lastName').value.trim();
    let userEmail = document.getElementById('userEmail').value.trim();
    let userPass = document.getElementById('userPass').value.trim();
    const birthDateInput = document.getElementById('birthDate');
    const birthDate = new Date(birthDateInput.value);
    let todayDate = new Date();
    let gender = document.getElementById('userGender');
    let weightInKilo = parseInt(document.getElementById('weightNumber').value);
    let weightInGrams = parseInt(document.getElementById('gramsNumber').value);
    let heightInFt = parseInt(document.getElementById('heightNumber').value);
    let heightInInch = parseInt(document.getElementById('inchesNumber').value);   
    const regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    // Validation checks
    if (!firstName || !lastName || !userEmail || !userPass || !birthDateInput.value.trim() || gender.value == 'None') {
        alert("Please Fill The Required Fields");
        return false; // Prevent form submission
    } else if (weightInKilo <= 0 || weightInGrams < 0 || heightInFt <= 0 || heightInInch < 0) {
        alert("Weight And Height Should be > 0");
        return false; // Prevent form submission
    } else if (weightInGrams >= 1000  ) {
        alert("Grams should not be more than or equal to 1000");
        return false; // Prevent form submission
    }
    else if(heightInInch >= 12)
    {
        alert("height in inches should not be more than or equal to 12")
    }
     else if (userPass.length < 8) {
        alert("Password Is Too Small");
        return false; // Prevent form submission
    } else if (birthDate >= todayDate) {
        alert("BirthDate Should Be Less than Today Date");
        return false; // Prevent form submission
    }

    else if(!regex.test(userEmail)){
    alert("Please Enter A correct Gmail");
    return false;
    }
 return true;
};