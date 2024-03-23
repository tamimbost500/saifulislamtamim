Email.send({
    Host : "smtp.elasticemail.com",
    Username : "thegrandprogrammer@gmail.com",
    Password : "E77B4196579C0E39EBE7C302BA021B340A58",
    To : 'sitamim500@gmail.com',
    From : "thegrandprogrammer@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);