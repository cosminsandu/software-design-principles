# Dependency Inversion Principle (DIP) 
> A. High-level modules should not depend on low-level modules. Both should depend on abstractions.
>
> B. Abstractions should not depend upon details. Details should depend upon abstractions.

*Source*: Robert C. Martin. Agile Principle Patterns and Practices [PPP].

In programming, the dependency inversion principle is a way to decouple software modules. 
This way, instead of high-level modules depending on low-level modules, both will depend on abstractions.

 Entities must depend on abstractions not on concretions. 
 It states that the high level module must not depend on the low level module, but they should depend on abstractions.
 
 OR
  
 Depend on abstractions, not on concretions.

> 1. Classes should depend on interfaces instead of concrete classes.
> 2. Those interfaces should be designed by the class that uses them, not by the classes that will implement them.
> 
> Simply put: DIP is all about decoupling.
> 
> Prefer type-hinting interfaces and allow each interface to be designed for the "high level" class that will use it, 
> instead of for the low-level class that will implement it.
> 
> This is one of the core strategies to writing "framework agnostic" code.
> 
> So my advice is this: unless you're writing code that will be shared across projects, 
> do not create an interface until you have more than one class that would implement it...

*Source*: symfonycasts


![image](DependencyInversionPrinciple.jpg)
![image](https://habrastorage.org/getpro/habr/post_images/c2c/cc2/cd0/c2ccc2cd0309a4c8f97b7521cfc63fb7.jpg)
