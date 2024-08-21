# Design-Patterns

Software Design Patterns

# There are three types of Design Patterns:

1. Creational Design Pattern
2. Structural Design Pattern
3. Behavioral Design Pattern

# Types of Creational Design Patterns

1. Factory Method Design Pattern
2. Abstract Factory Method Design Pattern
3. Singleton Method Design Pattern
4. Prototype Method Design Pattern
5. Builder Method Design Pattern

# Singleton Method Design Pattern

--- Singleton is a creational design pattern that lets you ensure
that a class has only one instance, while providing a global
access point to this instance.

The Singleton pattern solves two problems at the same time,
violating the Single Responsibility Principle:

1. Ensure that a class has just a single instance.
2. Provide a global access point to that instance

# All implementations of the Singleton have these two steps in common:

1. Make the default constructor private, to prevent other objects from using the NEW operator with the Singleton class.

2. Create a static creation method that acts as a constructor.
   Under the hood, this method calls the private constructor to create an object and saves it in a static field. All following calls to this method return the cached object.

# Applicability

1. Use the Singleton pattern when a class in your program should
   have just a single instance available to all clients.

2. Use the Singleton pattern when you need stricter control over
   global variables.

# How to Implement

1. Add a private static field to the class for storing the singleton
   instance.
2. Declare a public static creation method for getting the singleton
   instance.
3. Implement “lazy initialization” inside the static method. It
   should create a new object on its first call and put it into the
   static field. The method should always return that instance on
   all subsequent calls.
4. Make the constructor of the class private. The static method of
   the class will still be able to call the constructor, but not the
   other objects.
