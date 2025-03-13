function sendOTP(){
    let parms = {
        name:"Kakashi",
        email : document.getElementById('myMail').value,
        subject:"Nothin",
        message : "Hi",
        
    }   
    emailjs.send("service_o1d99ki","template_z8n42hp",parms).then(alert("Email Has Been Sent"));
}