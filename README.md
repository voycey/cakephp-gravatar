CakePHP 2.3 Gravatar Helper
=======================

A Gravatar Helper for CakePHP 2.3

A really quick Gravatar Helper for CakePHP 2.3 - We allow users to upload images to their profiles in order to replace the standard placeholder image / auto generated Gravatar Image

Usage:

1) Add 'Gravatar' to your helper array in your controller
2) Call it like this:
  $this->Gravatar->displayProfilePicture($user['UserDetail']['photo'], $user['User']['email']);
  
  Replace the variables as is required by your system, if no email is provided then the Gravatar cannot be created and a placeholder will be used.
  
  You can also just generate a Gravatar URL directly by calling:
  
  $this->Gravatar->get_gravatar($user['User']['email']);
  
  See the PHPDoc in the code for other parameters you can use (including one to generate a full IMG tag)
