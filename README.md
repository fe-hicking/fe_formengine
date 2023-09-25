# Example on how to listen to FormEngine via JavaScript

https://docs.typo3.org/m/typo3/reference-coreapi/12.4/en-us/ApiOverview/Backend/JavaScript/Index.html

The most apparent problem is: Defining JavaScript import map is only half of the way.

You need to also actually include your JavaScript file in either custom Backend Modules (which one does not simply want here), or by hooking into the general Form Engine.

For this example this is achieved by using a FormDataProvider that injects the JavaScript.

The JavaScript itself can then use vanilla javascript to listen to formengine fields.

Enjoy.
