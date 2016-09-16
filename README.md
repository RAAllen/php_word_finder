
# _PHP Word Finder_

#### _This is a word finding application that will allow users to input a word and a sentence. The program will then check for the frequency of appearance of the word they entered in the sentence they entered.  September 16, 2016_

#### By _**Rebecca Allen**_

## Setup/Installation requirements

* _In order to utilize this project you will need a terminal application such as Terminal, a web browser such as Chrome and the Composer application installed on your computer. If you want to additionally edit this program, you must have a text editor application such as Atom._
* _Start by opening the terminal and typing the command "git clone https://github.com/RAAllen/php_word_finder.git" after navigating with the "cd" command to the location you would like the project to be cloned in to._
* _In the terminal application navigate to the project folder using the "cd" command, then type the command "composer install"._
* _To launch the application, navigate to the web folder using the "cd" command._
* _Then launch a local server from within the web folder using the "php -S localhost:8000" command. If you are already running a localhost you should simply alter the number 8000 to something like 8001._
* _Next switch to your web browser and navigate to the server localhost:8000 you just created. The program should now launch._

## Program Specifications

* _The program will allow users to search for a one letter word that occurs once in a one word sentence they input._
* Example Word Input: I.
* Example Sentence Input: I.
* Example Output: "I" occurs 1 time in the sentence "I.".

* _The program will allow users to search for a multiple letter word that occurs once in a one word sentence they input._
* Example Word Input: Cats!
* Example Sentence Input: Cats!
* Example Output: "Hi" occurs 1 time in the sentence "Cats!".

* _The program will allow users to search for a one letter word that occurs once in a multiple word sentence they input._
* Example Word Input: I.
* Example Sentence Input: I love cats.
* Example Output: "I" occurs 1 time in the sentence "I love cats.".

* _The program will allow users to search for a multiple letter word that occurs once in a multiple word sentence they input._
* Example Word Input: cats.
* Example Sentence Input: My favorite animals are cats.
* Example Output: "cats" occurs 1 time in the sentence "My favorite animals are cats.".

* _The program will allow users to search for a one letter word that occurs more than once in a multiple word sentence they input._
* Example Word Input: a.
* Example Sentence Input: I went to a pet store to get a bag of cat food.
* Example Output: "a" occurs 2 times in the sentence "I went to a pet store to get a bag of cat food.".

* _The program will allow users to search for a multiple letter word that occurs more than once in a multiple word sentence they input._
* Example Word Input: the.
* Example Sentence Input: I think the easiest way to make friends with the neighborhood cats is to give them the finest tuna treats.
* Example Output: "the" occurs 3 times in the sentence "I think the easiest way to make friends with the neighborhood cats is to give them the finest tuna treats.".

* _The program will ignore case when searching for a word._
* Example Word Input: cats.
* Example Sentence Input: Cats are totally awesome.
* Example Output: "cats" occurs 1 time in the sentence "Cats are totally awesome.".

* _The program will treat contractions as words._
* Example Word Input: you're.
* Example Sentence Input: You're my favorite cat.
* Example Output: "you're" occurs 1 time in the sentence "You're my favorite cat.".

* _The program will be able to match a whole word that is part of a contraction._
* Example Word Input: you.
* Example Sentence Input: You're my favorite cat.
* Example Output: "you" occurs 1 time in the sentence "You're my favorite cat.".

## Support and Contact Details

_Please contact RebeccaZarsky@gmail.com for technical questions or assistance running the program_

## Technologies Used

_This program utilizes HTML, CSS, PHP, PHPUnit, Twig, Composer and Bootstrap_

## License

*This program is licensed under the MIT license*

Copyright (c) 2016 **_{Rebecca Allen}_**
