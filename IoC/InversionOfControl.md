# Inversion of Control (IoC)

Inversion of Control (IoC) is a software design principle that refers to the inversion of the flow of control in a system.

Traditionally the flow of control is determined by the application itself, with the application being responsible for calling and controlling the execution of various components or modules.

In IoC, custom-written portions of an application receive the flow of control from a generic framework.
In other words, the framework that calls into the custom, or task-specific, code.

**Symfony**, as most frameworks, is based on one simple concept: _Inversion of Control_.

It means that instead of having your custom application call for specific parts of a framework, the frameworks itself calls and controls the flow of your application. (Symfony calls the `contoller`)

Symfony handles and abstracts most of the heavy lifting of running your specific code in the proper context, injecting every time the required `dependencies`.

Dependency Injection is the base implementation of the Inversion of Control principle in Symfony.

In Dependency Injection, dependencies between objects are not statically written in the code but dynamically injected (based on a configuration file, scanned metadatas, or both).

The Dependency Injection Container (also called Service Container) centralizes all the definitions of services. It is responsible for creating instances of services and injecting their dependencies.


## References
- [Inversion of Control (IoC)](https://en.wikipedia.org/wiki/Inversion_of_control)
- https://vegibit.com/inversion-of-control-ioc-pattern-in-php/
- https://www.sitepoint.com/inversion-of-control-the-hollywood-principle/
- https://www.tutorialsteacher.com/ioc/inversion-of-control
- https://medium.com/@amitkma/understanding-inversion-of-control-ioc-principle-163b1dc97454 
- https://php.fyi/articles/php-ioc-container
- https://www.martinfowler.com/bliki/InversionOfControl.html