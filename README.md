# php-enum
Extension for the [myclabs/php-enum](https://github.com/myclabs/php-enum) library.

## [Documentation](https://github.com/myclabs/php-enum#documentation)

## Add method
- `getLabel()` Returns the enum label

Static methods:

- `labels()` Returns the labels of all constants in the Enum class

    ```php
      // Define the label corresponding to the enumeration value. example:
      return [value => label];
    ```
- `options()` Returns all possible options as an array