# Hideto's Portfolio
This is my poersonal portfolio showing front-end development and other skills.  
Actual Website: http://hidetoyasunori.com  

## Skills I Used
* HTML
* CSS/SCSS
* Wordpress (Original Theme)
* SVG Animation
* JavaScript
* [GSAP](https://greensock.com/gsap) - Javascript Animation Platform
* [ScrollMagic.js](http://scrollmagic.io/) - The javascript library for magical scroll interactions.
* [Parallax.js](https://github.com/wagerfield/parallax) - Parallax Engine that reacts to the orientation of a smart device and the cursor move of no motion detection hardware like a laoptop.
* Gulp

## Design
### Web Design
**Logo** - Made by SVG with Adobe Illustrator.  
**Color** - I use white as the main color for clean and simple impresion. The sub color is dark blue to show loyality and trust.

### Animations
I animate objects with only **opacity** and **transform** which smoothly work because of less browser rendering timeline.[Detail](https://developers.google.com/web/fundamentals/performance/rendering/)  
**CSS Animations** - Used in some parts such as navigation pop up and jump hovers.   
**SVG Animations** - "_Hideto_" animation in the middle of the portfoli is activated by JavaScript of GSAP and ScrollMagic.js.   
Check my CodePen for more SVG annimations:  https://codepen.io/Hideto/

## Development
### JavaScript
I didn't use jQuery because extra JavaScript file request impacts page loading time also it performs poor for animations.
GSAP is literally up to 20x faster than jQuery. It's even faster than CSS3 animations and transitions in many cases.  

### Wordpress
Developing this website as an original theme with starting from scratch.  I used Custom Fields for the work detail pages and it makes easy to add and edit the page form the admin page.

### CSS Architecture
* BEM (http://getbem.com/naming)
* SMACSS (https://smacss.com)

## Accessibility
### Role
Roles are added for Header, Main, Footer and Nav.
### Img Alt
Img tag's alt has descriptive texts

## Performance Optimaization
* Images - Compressed and responsive image size with srcset.
* CSS - Combined to one file and minified.
* Fonts - Used several formats(WOFF2, WOFF and OTF) and optimized to modern browsers.
* SVG Sprite - Loading multiple SVG Icons with only onne request.
* Server Location - Located in LA which is phisically close to my target users living in Vancuver, BC Canada.

## The More to Do
* Optimize above-the-fold rendering time with inline CSS and Javascript.
* Disable jQuery on Wordpess.
* Gzip
* Use loading icon.
* Optimize SEO
* Hand code using part of Prallax.js and eliminate the js library.