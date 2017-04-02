# AmpIt
![alt tag](ampit_preview.jpg)

Example URL: http://project.ampit.codevery.com/

## Project Description:
Project has a unique design and template for Joomla CMS. Uniques settings in template, like a title, logo, background.

## Technologies:
* Joomla CMS
* Bootstrap
* PHP
* Sass, Css


## Preview 

### Project Structure:
* templates
    * ampit 
        * assets 
            * bootstrap
            * css (sass -> css)
            * fonts 
            * img (images that were used in stylesheet)
        * html (override default modules)
            * com_content (articles override)
            * mod_custom (custom modules)
            * mod_footer 
        * images (images that were used in template)
        * language (template is supported multilanguage)
            * en-GB (EN by default)
        * index.php (main template file)
        * templateDetails.xml (template initialization and settings)
        


### Code examples:

#### PHP
``` php
<jdoc:include type="modules" name="pre-content" />
<main id="content" role="main">
    <!-- Begin Content -->
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    <!-- End Content -->
</main>
<jdoc:include type="modules" name="after-content" />
<jdoc:include type="modules" name="footer" />
```
```php
<?php defined('_JEXEC') or die;
$i = 1;
?>
<div class="landing-article">
    <?php foreach ($this->items as $item) { ?>
        <!-- Section <?php echo $i; ?> -->
        <section class="line-<?php echo $i. ' '.$item->alias ?>">
            <div class="container">
                <?php echo $item->text; ?>
            </div>
        </section>
    <?php $i++; } ?>
</div>


```
#### SASS
``` sass
.it-s-as-simple-and-fun-as
    background: $grey
    padding: 100px 0 40px
    border-top: 2px solid darken($grey, 5%)
.item
  text-align: center
  margin-bottom: 60px
  .circleimage
    width: 242px
    height: 242px
    display: inline-block
    box-sizing: border-box
    border: 10px solid $orange
    overflow: hidden
```
### ScreenShare:

#### iPhone 6
![alt tag](iphone6ampit.gif)



