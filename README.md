# WPAustralia.org

## Getting setup with WPAustralia

1. Setup a local WordPress install
2. Change into the directory of your install
3. Remove your **wp-content** directory. To do this from the command-line run `rm -rf ./wp-content/`
4. Now checkout the **wpaustralia** Git repository into **wp-content**. Do this from the command-line by running `git clone --recursive git@github.com:BronsonQuick/wpaustralia.git ./wp-content/`
5. Get developing!


# Repository Usage

WPAustralia uses a suite of [Git Submodules](http://git-scm.com/book/en/Git-Tools-Submodules) for its plugins and themes. 

Using submodules makes it easy to work individual repositories for each version. It makes patching a repo easier, and also switching between versions of a plugin a breeze. It's all the flavour of git, with 99% less fat. 

## Cloning the Repository

When using submodules, `git clone` and `git pull` will not gather all the files and resources of the repository.

To clone the entire WPAustralia repository, you need to include the `--recursive` flag.

	git clone --recursive git@github.com:BronsonQuick/wpaustralia.git

If you cloned without the `--recursive` flag, never fear, you can achieve a similar result with the commands:

	git submodule init
	git submodule update

## Keeping Submodules Up-to-date

Every time you pull the main project with a change to the submodule, you will then need to update the submodule repo. This can be done with the command:

	git submodule update

## Adding a New Plugin or Theme

Adding a new plugin or theme as a submodule to WPAustralia is easy, just use the following command:

	git submodule add git@github.com:username/repo-name.git plugins/repo-name

Where *username* is the username of the Github user who owns the repository and *repo-name.git* is the repository name of the plugin. Finally, *plugins/repo-name* is the location where the submodule should reside.

Adding a theme submodule is just as easy: 

	git submodule add git@github.com:username/repo-name.git themes/repo-name

## Editing a Plugin or Theme

When working in the git repository of a submodule, Git by default puts you in a detached HEAD state. This makes it easy to experiment, but also very easy to lose changes. 

To avoid this, create and work on a branch in the submodule by running the following command inside the submodule's working folder:

	git checkout -b branch-name

## Pushing Changes

As WPAustralia does not own most of the Github repositories for the submodules used, they have read only access, so to push submodule changes to a Github, you will need to create your own repository and [add it as a remote](https://help.github.com/articles/adding-a-remote).
