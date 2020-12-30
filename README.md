# Kalyber WordPress Website

This repository is for the code for the Kalyber Website.

We recommend the use of Visual Studio Code to develop the website. See a list of [recommended plugins](./docs/vscode-plugins.md) to setup Visual Studio Code to work with this project more efficiently.

## Documentation
You can find information about this project in the docs section:

[Project Architecture](./docs/project.md)

[How to contribute](./docs/contributing.md)

## Setup instructions
1. Install NodeJS (see the version below).
2. Use [MAMP](./docs/mamp.md) for managing local instances of WordPress.

## Pulling from source
You must setup the project on your machine before you can begin to work or view the website.

1. Create a new project folder in Finder:
   - for example: Documents > projects > kalyber > kalyber.local
2. Initialize Git:

NOTE: The $ indicates the terminal prompt and is not part of any commands.

``` bash
    $ git config --global user.name "Your Name"
    $ git config --global user.email your@email.com
    $ git remote add origin <project url>
    $ git pull origin master
```
> Set the core editor to VSCode

You first need to make sure that the command line tools for Visual Studio Code are installed.
* Press SHIFT COMMAND P while in Visual Studio Code.
* This opens the Command Pallete.
* Type the following: Shell Command: Install 'Code' command in PATH and run it.
* You should be able to run the command code --help from terminal to validate that the tools were installed properly.

``` bash
    $ git config --global core.editor code
```

> Set the merge tool to VSCode

``` bash
    $ git config --global merge.tool code
    $ git config --global mergetool.code.cmd "code --wait $MERGED"
    $ git config --global diff.tool code
    $ git config --global difftool.code.cmd "code --wait --diff $LOCAL $REMOTE"
```

> Set the core editor to Brackets

``` bash
    $ git config --global core.editor brackets
```

> Set the merge tool to Brackets

``` bash
    $ git config --global merge.tool brackets
    $ git config --global mergetool.brackets.cmd "code --wait $MERGED"
    $ git config --global diff.tool brackets
    $ git config --global difftool.brackets.cmd "code --wait --diff $LOCAL $REMOTE"
```
## Front end development requirements
- NodeJS LTS 12.16.3.
- NPM 6.10.2.

## WordPress and backend development requirements
- MAMP Pro
- WordPress 5.4.1
- PHP 7.4.2
- MySQL (from MAMP)
- Apache (from MAMP)