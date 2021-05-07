# phphydrate

This application show how to hydrate object.

When the controller receive data from a form, the _POST data are automatically hydrated 
to the corresponding class with the "**new**" method. 
```php
$user = new User($_POST);
```
We have creates 2 classes : Core\Entity and Core\Hydrate. 
The class **Core\Hydrate** is a trait that will hydrate given data.

All the **App\Entity\xxx** classes extends the **Core\Entity** class, the **Core\Entity** 
constructor parse data to set data to corresponding method. It's the same as :
```
$user = new Users();
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
```

    

