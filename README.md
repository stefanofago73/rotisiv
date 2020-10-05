# rotisiv
The contravariant Visitor Design Pattern. This project is a 
short experiment related to use contra-variant parameters 
that can be used from version 7.4 of PHP.

## What inside?

The concept that is documented is using the contravariance 
to ensure strong typing in the Visitor Design Pattern.

In the classic version of the pattern, the Visitables have,
as parameter of the function **acceptXYZ(...)** the reference
to the Visitor: in this way all the functionalities
of the Visitor are available and not only that useful to
specific extension of the Visitable.

Using different interfaces as roles for different types 
of Visitor and causing them to collapse in a single 
implementation, contravariance can be applied on the 
signatures of the Visitable functions.
