//display() function send emai by smtpjs//
function SendEmail(){
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let conatact = document.getElementById("contact").value;
  let subject = document.getElementById("subject").value;
  let message = document.getElementById("message").value;

  let body = "Name:" + name + "<br/> Email:" + email + "<br/> Contact Number:" + conatact + "<br/> Subject:" + subject + "<br/> Messages:" + message;

Email.send({
SecureToken : "b15fb04d-31a0-4f3c-a5ce-c10861f53fd0",
To : 'lordrobby26@gmail.com',
From : "lordrobby26@gmail.com",
Subject : "Pesan dari form contact Rob!!!",
Body : body
 }).then(
message => alert(message)
 );

    
}
//display() function send emai by smtpjs//