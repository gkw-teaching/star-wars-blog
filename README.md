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
8. Now run `git branch -a` to see if the "development" branch was added locally. It should be in green.
9. Let's test Git and Github, and make sure GitHub is tracking your chages. On your local "development" branch make a change to the README.md. Then git add, git commit, git push. You should see the change in your README.md on GitHub, and the contribution (green square) in your profile. 
10. Now that everything is working, in your terminal run `git checkout -b 1-foundation origin/1-foundation`.
11. In GitHub you should now have "master", "development", and "1-foundation" branches listed. Switch to "1-foundation". 

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
10. Merge this foundation to your development branch.
11. In your terminal run `git checkout -b 2-acf-install origin/2-acf-install`.
12. In GitHub switch to the "2-acf-install" branch.

***

#### 2-acf-install
Advanced Custom Fields is a super powerful plugin. It gives our clients tons of control over updating and adding content. We'll be utilizing ACF Pro a whole lot because it's awesome. Let's start with an install.

1. I will provide the `advanced-custom-fields-pro` zipped file via email. 
2. Use your Finder (Mac) or Explorer (Windows) to navigate to your project root folder. Then drill down into wordpress > wp-content > plugins.
3. Add the unzipped file to your plugins folder.
4. Next visit star.wars/wp-admin > Plugins and activate Advanced Custom Fields.
5. You'll see a new "Custom Fields" icon on your dashboard. Hover over it and select "updates".
6. We'll be using ACF Pro, which requires a license key. I'll provide the license key via email.
7. git add, git commit, git push to development.
8. In your terminal run `git checkout -b 3-assets origin/3-assets`.
9. In GitHub switch to the "3-assets" branch.

***

#### 3-assets
This portion of the project is all about blog assets (images and copy) and blog posts. I'll provide a Dropbox link and Google Docs link for you to download from. I recommend creating a folder specifically for project assets for easy reference.

1. Download assets (images and copy) into assets folder.
2. In your project directory's "img" folder, add the "backgrounds", "logos", "icons", and "clear-placeholders" folders that you just downloaded from Dropbox.
3. Next take a look at the rest of the folders in your assets folder. Notice that the file names for the images and blog copy correlate. This will help you stay organized when making a post. Speaking of, let's make our first post!
4. Go to your Dashboard in wp-admin. Hover on "Posts" and click "Add new".
5. We'll start with the 12-19-2019 Google document as our first blog post. The doc has different elements of the blog called out for you. Between the Google doc, the 12-19-2019 Dropbox image folder, and the actual blog post on [Starwars.com/news](https://www.starwars.com/news/star-wars-the-rise-of-skywalker-databank), you should be able to organize the post's images and copy accurately. Here are a couple of screenshots to help guide you.

![Post example 1](wordpress/wp-content/themes/wordpress-theme-starter-master/img/github-img/post-1.png?raw=true "Post example 1")

![Post example 2](wordpress/wp-content/themes/wordpress-theme-starter-master/img/github-img/post-2.png?raw=true "Post example 2")

Visit your site in your browser. Pretty darn aweful, right? Well, sure. There's no css yet. But check it out more closely. Your title, featured image, and excerpt are showing on the Posts page, right? I hope so. Click the title, now you're taken to the post. Dope! We'll make it look pretty in the next project branch.

6. git add, git commit, git push to development. 
7. In your terminal run `git checkout -b 4/pretty origin/4-pretty`.
8. In GitHub switch to the "4-pretty" branch.

***

#### 4-pretty
Now that you're on branch "4-pretty" run `sass --watch ./sass/style.scss:./style.css` in your terminal. Pretty spiffy, right? I added style to the Sass folder. Absolutely check out the code, and use it as a reference if needed. The main files I've worked in so far are `sass > modules > variables.scss`, `sass > pages > home.scss`, `sass > partials > header`, `sass > partials > footer`, `sass > style.scss`, `footer.php`, `header.php`, `home.php`, `loop.php`, and `functions.php`.

1. In wp-admin > Posts, delete the "Hello World" post. Say bye bye, we no longer need it.
2. Now add the remaining blog posts using the assets provided and get ready for magic.
3. git add, git commit, git push to development. 
4. In your terminal run `git checkout -b 4/pretty origin/4-pretty`.
5. In GitHub switch to the "5-acf" branch.

***

### 5-acf