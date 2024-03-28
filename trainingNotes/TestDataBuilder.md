The **Test Data Builder** is a software design pattern that is often used in unit testing to create test data. The pattern is used to construct complex objects that are needed for testing, and it provides a fluent interface to configure the object before it's built.

The main idea behind the Test Data Builder pattern is to have a class (the builder) that can create objects with a default state that is suitable for most tests, but also allows for customization of the object's state for specific test cases.

Here's a simple example:

```php
class UserBuilder {
    private $name = 'John Doe';
    private $email = 'john.doe@example.com';

    public function withName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function withEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function build(): User
    {
        $user = new User();
        $user->setName($this->name);
        $user->setEmail($this->email);
        // set other properties as needed...

        return $user;
    }
}
```

In your tests, you can then use the Test Data Builder to create a `User` object with the default state or with a customized state:

```php
public function testSomethingWithUser()
{
    $user = (new UserBuilder())->build();
    // your test code...
}

public function testSomethingWithUserWithCustomName()
{
    $user = (new UserBuilder())
        ->withName('Jane Doe')
        ->build();
    // your test code...
}
```

This way, if the way a `User` object is created changes, you only need to update the `UserBuilder` class, and all your tests will still work. Also, the tests are more readable and easier to understand, as the object creation logic is clearly visible in the test itself.
