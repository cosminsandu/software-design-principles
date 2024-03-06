# Inversion of Control (IoC)

Inversion of Control (IoC) is a software design principle that refers to the inversion of the flow of control in a system.

Traditionally the flow of control is determined by the application itself, with the application being responsible for calling and controlling the execution of various components or modules.

In IoC, custom-written portions of an application receive the flow of control from a generic framework.
In other words, the framework calls into the custom, or task-specific, code.

> The control is inverted - it calls me rather me calling the framework. 
> This phenomenon is Inversion of Control (also known as the _Hollywood Principle_ - "Don't call us, we'll call you"). - martinfowler

**Symfony**, as most frameworks, is based on one simple concept: _Inversion of Control_.

It means that instead of having your custom application call for specific parts of a framework, the frameworks itself calls and controls the flow of your application. (Symfony calls the `contoller`)

Symfony handles and abstracts most of the heavy lifting of running your specific code in the proper context, injecting every time the required `dependencies`.

## Dependency Injection
Dependency Injection is the base implementation of the Inversion of Control principle in Symfony.

A form of inversion of control, dependency injection aims to separate the concerns of constructing objects and using them. 
The pattern ensures that an object which wants to use a given service should not have to know how to construct those services.
Because the client (receiving object) does not build or find the service itself, it typically only needs to declare the _interfaces_ of the services it uses, rather than their concrete implementations

In Dependency Injection, dependencies between objects are not statically written in the code but dynamically injected (based on a configuration file, scanned metadatas, or both).

## Dependency Injection Container

The Dependency Injection Container (also called **Service Container**) centralizes all the definitions of services. It is responsible for creating instances of services and injecting their dependencies.


## References
- [Inversion of Control (IoC)](https://en.wikipedia.org/wiki/Inversion_of_control)
- https://vegibit.com/inversion-of-control-ioc-pattern-in-php/
- https://www.sitepoint.com/inversion-of-control-the-hollywood-principle/
- https://www.tutorialsteacher.com/ioc/inversion-of-control
- https://medium.com/@amitkma/understanding-inversion-of-control-ioc-principle-163b1dc97454 
- https://php.fyi/articles/php-ioc-container
- https://www.martinfowler.com/bliki/InversionOfControl.html