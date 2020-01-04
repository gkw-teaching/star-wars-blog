# Star Wars Blog

## Purpose
This project is designed to introduce different features of WordPress by replicating the [Star Wars News WordPress site](https://starwars.com/news). You'll be introduced to WordPress Posts, Featured Images, tags, categories, and Advanced Custom Fields.

## Development Process
The project is broken into different branches listed in numerical order. Each branch has a list of instructions within the README.md file. 

## Project Requirements
- php friendly code editor such as Visual Studio Code or an IDE like PhpStorm

## Project Setup
- Install the following On Your Computer
  - Vagrant
  - Virtual Box
  - Bootstrap 4
  - Sass
 
## Getting Started
The master branch has everything you need to get started, including the *Wordpress Theme Starter* theme and *.gitignore files*. **I will send you the site.yml and ACF license seperately as part of Project Branch 2.** You **do not** have to setup VCCW.

1. On GitHub, fork (upper right corner of page) your own copy of this repo.
2. Select which of **your** GitHub repos or orgs to fork to.
3. Once you've added the fork to your GitHub repo or org, select the green `Clone or Download` button, and copy the https link.
4. Now you want to clone your fork locally. To do so head over to your local project folder. The git command you run should look something like `git clone https://github.com/your-repo-or-org-name/star-wars-blog.git`.
5. In your project folder run `git remote -v` to see if the `fetch` and `push` remotes are the same. They should both share the same "origin" source, which is your repo or org.
6. Run `git branch -a` to show all branches that were forked, as well as remote branches. Most likely you'll see the master branch as green, and everything else in red is a remote branch. This is a good thing :)
7. Next we want to tell Git to track the remote branches locally. Let's start by tracking the "development" branch. Run `git checkout -b development origin/development`.
8. Now run `git branch -a` to see if the "development" branch was added locally.
9. Follow steps 6 & 7 for the remaining branches. Your git command should look like this, `git checkout -b name-of-branch origin/name-of-branch`.
10. Let's test Git and Github, and make sure GitHub is tracking your chages. On your local "development" branch make a change to the README.md. Then git add, git commit, git push. You should see the change in your README.md on GitHub, and the contribution (green square) in your profile. 

## Project Branches

#### 1-foundation
This is the foundation of your project. It includes a bare-bones install of HTML5Blank and WP Bootstrap Navwalker.

1. In your newly cloned project folder add the `site.yml` provided to you via email. Within `site.yml` change the email address to match yours.
2. Add the IP address and hostname to your /etc/hosts file, `192.168.33.10 star.wars`.
3. In your project folder, cd through the following file path: `/wordpress/wp-content/themes/wordpress-theme-starter-master`. When you're in the `wordpress-theme-starter-master` directory, you'll also see a `sass` directory. In your terminal or gitbash run `sass --watch ./sass/style.scss:./style.css` from within the `wordpress-theme-starter-master` directory. Or in otherwords, one level up from the `sass` directory.
4. Open a new terminal window and navigate to your project folder. Run `ls` and you should see "Vagrantfile" within the project folder root. Run `vagrant up` to start Vagrant and Virtual Box.
5. Next visit your site, `star.wars`, in your browser. You'll see the WordPress default theme, Twenty Twenty. In your browser go to `star.wars/wp-admin`. Login using the password declared in the `site.yml` file. 
6. In the wp-admin dashboard, go to Appearance > Themes > wordpress-theme-starter-master (It's the one featuring Unsinkable Sam [cat]), and activate theme.
7. Go back to your site. If you see the HTML5Blank logo you know it's working. 
8. Double check that your `.gitignore` file is the most recent version we've been using. It should be about 40 lines long and includes the `site.yml` file.
9. `git add .`, `git commit -m "Initial commit"`, `git push`. Follow the instructions provided by Git after `git push`-ing. 
10. Merge this foundation to your development branch. From your development branch, `git checkout -b 2-acf-install`.
11. In the terminal where Sass watch is running, stop by running `cmd + c` or `ctrl + c`. We won't touch on styles again for a while.

***

#### 2-acf-install
Advanced Custom Fields is a super powerful plugin. It gives our clients tons of control over updating and adding content. We'll be utilizing ACF Pro a whole lot because it's awesome. Let's start with an install.

1. I will provide the `advanced-custom-fields-pro` zipped file via email. 
2. Use your Finder (Mac) or Explorer (Windows) to navigate to your project root folder. Then drill down into wordpress > wp-content > plugins.
3. Add the unzipped file to your plugins folder.
4. Next visit star.wars/wp-admin > Plugins and activate Advanced Custom Fields.
5. You'll see a new "Custom Fields" icon on your dashboard. Hover over it and select "updates".
6. We'll be using ACF Pro, which requires a license key. I'll provide the license key via email.
7. git add, git commit, git push to development. From your development branch, `git checkout -b 3-assets`.

***

#### 3-assets
This portion of the project is all about blog assets (images and copy) and blog posts. I'll provide a Dropbox link and Google Docs link for you to download from. I recommend creating a folder specifically for project assets for easy reference.

1. Download assets (images and copy) into assets folder.
2. Notice that the file names for the images and blog copy correlate. This will help you stay organized when making a post. Speaking of, let's make our first post!
3. Go to your Dashboard in wp-admin. Hover on "Posts" and click "Add new".
4. We'll start with the 12-19-2019 Google document as our first blog post. The doc has different elements of the blog called out for you. Between the Google doc, the 12-19-2019 Dropbox image folder, and the actual blog post on [Starwars.com/news](https://www.starwars.com/news/star-wars-the-rise-of-skywalker-databank), you should be able to organize the post's images and copy accurately. Here's a screenshot to help guide you.

![Post example 1](wordpress/wp-content/themes/wordpress-theme-starter-master/img/github-img/post-1.png?raw=true "Logo Title Text 1")