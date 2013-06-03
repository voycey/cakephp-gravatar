CakePHP 2.3 Gravatar Helper
=======================

###A Gravatar Helper for CakePHP 2.3
<br><br>
A really quick Gravatar Helper for CakePHP 2.3 - We allow users to upload images to their profiles in order to replace the standard placeholder image / auto generated Gravatar Image
<br><br>
Usage:
<br>
<br>
1) Add 'Gravatar' to your helper array in your controller<br>
2) Call it like this:
```php
$this->Gravatar->displayProfilePicture($user['UserDetail']['photo'], $user['User']['email']);
```

Replace the variables as is required by your system, if no email is provided then the Gravatar cannot be created and a placeholder will be used.
<br><br>
You can also just generate a Gravatar URL directly by calling:
```php
$this->Gravatar->get_gravatar($user['User']['email']);
```
See the PHPDoc in the code for other parameters you can use (including one to generate a full IMG tag)
<br>
