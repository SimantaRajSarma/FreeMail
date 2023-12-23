# FreeMail
Send Free Email to anyone using Google SMTP server.

# Installation(`` WINDOWS ``)

```
git clone https://github.com/SimantaRajSarma/FreeMail.git
```

Copy and Paste the git folder in `` C:\xampp\htdocs `` Directory.
Start the apache server by xampp control panel.

``` 
localhost/FreeMail
```

You Will have one issue with the google Authentication.

You need to go to your

``
gmail
``
then 

`` 
manage gmail account
``

and search for 

``
App Passwords
``


Set a App password and copy it.

Paste the Generated App Password in `` $mail->Password = 'your app password'; `` in the `` mail.php file `` and you are good to go.


Note: Don't Spam anyone :)






