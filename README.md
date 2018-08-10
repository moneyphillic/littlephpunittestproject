1. Create empty folder for a new project. I named my folder "phpunit".
We will execute tests with "vendor/bin/phpunit" called from root dir.
2. Add an autoload configuration in composer.json file. Look at current
project composer.json file, this configuration will be enough.
Execute "composer dumpautoload".
3. Install phpunit with "composer require phpunit/phpunit" command.
4. In root directory create a "tests" directory. When we execute phpunit,
all tests from this folder will execute too. We will make Unit testing, 
so create a subfolder named "unit". There we will place our tests.
5. Create a phpunit.xml file in root directory and create a specification.
You can look at some existing php project in GitHub and copy file contain.
Also for simple specification you can copy phpunit.xml from current project.
6. Create a first test class in tests/unit. Also create a first class that
will be tested in app/Models (create a Models dir in app).
7. Go create you classes and test them.
