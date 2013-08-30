<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>

  <!--  WHERE THE MAGIC HAPPENS -->
  <h2 class="section-title" id="arrows">Arrows</h2>

  <p>It is a common design treatment to give an element a triangular points-out arrow, we typically build these with CSS. These following classes allow us to generate these arbitrarily with a mixin</p>

  <h3>Top</h3>
  <pre><code>@include arrow(top, {location}, $color)</code></pre>
  <p class="test-arrow test-arrow--top-left">Left</p>
  <p class="test-arrow test-arrow--top-center">Center</p>
  <p class="test-arrow test-arrow--top-right">Right</p>
  <hr />

  <h3>Right</h3>
  <pre><code>@include arrow(right, {location}, $color)</code></pre>
  <p class="test-arrow test-arrow--right-top">Top</p>
  <p class="test-arrow test-arrow--right-center">Center</p>
  <p class="test-arrow test-arrow--right-bottom">Bottom</p>
  <hr />

  <h3>Bottom</h3>
  <pre><code>@include arrow(bottom, {location}, $color)</code></pre>
  <p class="test-arrow test-arrow--bottom-left">Left</p>
  <p class="test-arrow test-arrow--bottom-center">Center</p>
  <p class="test-arrow test-arrow--bottom-right">Right</p>
  <hr />

  <h3>Left</h3>
  <pre><code>@include arrow(left, {location}, $color)</code></pre>
  <p class="test-arrow test-arrow--left-top">Top</p>
  <p class="test-arrow test-arrow--left-center">Center</p>
  <p class="test-arrow test-arrow--left-bottom">Bottom</p>
  <hr />
      <h2 class="section-title" id="beautons">Beautons</h2>
  <h3>Button Test Sizes</h3>
  <a class="btn-demo btn">Button</a>
  <a class="btn-demo btn btn--small">Small Button</a>
  <a class="btn-demo btn btn--large">Large Button</a>
  <a class="btn-demo btn btn--huge">Huge Button</a>
  <a class="btn-demo btn btn--full">Full Button</a>
  <hr />
  <h3>Font Sizes</h3>
  <a class="btn-demo btn btn--alpha">Alpha</a>
  <a class="btn-demo btn btn--beta">Beta</a>
  <a class="btn-demo btn btn--gamma">Gamma</a>
  <a class="btn-demo btn btn--natural">Natural</a>
  <hr />
  <h3>Button Functions</h3>
  <a class="btn-demo btn btn--primary">Primary</a>
  <a class="btn-demo btn btn--secondary">Secondary</a>
  <a class="btn-demo btn btn--tertiary">Tertiary</a>
  <hr />
  <h3>Button Actions</h3>
  <a class="btn btn--positive">Positive</a>
  <a class="btn btn--negative">Negative</a>
  <a class="btn btn--inactive">Inactive</a>
  <hr />
  <h3>Button Styles</h3>
  <a class="btn-demo btn btn--soft">Soft</a>
  <a class="btn-demo btn btn--hard">Hard</a>
  <hr />
      <h2 class="section-title" id="block-list">Block List</h2>
  <ul class="block-list">
    <li>Foo</li>
    <li>Bar</li>
    <li>Baz</li>
    <li><a href=# class="block-list__link">Foo Bar Baz</a></li>
  </ul>
      <h2 class="section-title" id="breadcrumb">Breadcrumb</h2>
  <h3>Default</h3>
  <p>Simple breadcrumb styling to apply to (ordered) lists. Extends `.nav`</p>
  <ol class="nav  breadcrumb">
     <li><a href=#>Home</a></li>
     <li><a href=#>About</a></li>
     <li><a href=#>The Board</a></li>
     <li class="current"><a href=#>Directors</a></li>
  </ol>
  <hr />
  <h3>Path</h3>
  <p>For denoting a path-like structure, GitHub style</p>
  <ol class="nav  breadcrumb--path">
     <li class="breadcrumb__root"><a href=#>inuit.css</a></li>
     <li><a href=#>inuit.css</a></li>
     <li><a href=#>partials</a></li>
     <li class="current"><a href=#>objects</a></li>
  </ol>
  <hr />
  <h3>Custom</h3>
  <p>Assign a delimiter on the fly through a data attribute</p>
  <ol class="nav  breadcrumb">
     <li><a href=#>Home</a></li>
     <li data-breadcrumb="|"><a href=#>About</a></li>
     <li data-breadcrumb="|"><a href=#>The Board</a></li>
     <li data-breadcrumb="|" class="current"><a href=#>Directors</a></li>
  </ol>
  <ol class="nav  breadcrumb">
     <li><a href=#>Home</a></li>
     <li data-breadcrumb="*"><a href=#>About</a></li>
     <li data-breadcrumb="*"><a href=#>The Board</a></li>
     <li data-breadcrumb="*" class="current"><a href=#>Directors</a></li>
  </ol>
  <hr />
      <h2 class="section-title" id="columns">Columns</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

  <p class="text-cols--3">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

  <p class="text-cols--2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  <hr />
      <h2 class="section-title" id="flexbox">FlexBox</h2>
  <p>Until we can utilise flexbox natively we can kinda, sorta, attempt to emulate it</p>
  <h3>FlexBox Default</h3>
  <div class="flexbox">

      <div class="flexbox__item flexbox-demo">
          <b>Welcome to</b>
      </div>

      <div class="flexbox__item flexbox-demo">
          <img src="http://placehold.it/600x150" alt="inuit.css logo">
      </div>

  </div>
  <hr />

  <h3>FlexBox with Grids</h3>
  <div class="flexbox">
     <div class="flexbox__item  one-quarter greybox flexbox-demo">
        <p>One Quarter</p>
     </div>
     <div class="flexbox__item  three-quarters greybox flexbox-demo">
        <p>Three Quarters</p>
     </div>
  </div>
  <hr />
      <h2 class="section-title" id="flyout">Flyout</h2>
  <p>Flyouts are pieces of content that fly out of a parent when said parent is hovered. They typically appear bottom-left of the parent.</p>
  <h3>Flyout Regular - From the top, flush left</h3>
  <div class="flyout btn-demo btn btn-large">
         Hover Me
     <div class="flyout__content greybox">
         <h1>Lorem</h1>
         <p>Ipsum</p>
     </div>
  </div>
  <hr />
  <h3>Flyout Alternative - Left, Flush Top</h3>
  <div class="flyout--alt btn-demo btn btn--large">
         Hover Me
     <div class="flyout__content greybox">
         <h1>Lorem</h1>
         <p>Ipsum</p>
     </div>
  </div>
  <hr />
      <h2 class="section-title" id="greybox">GreyBox - For Prototyping</h2>
  <p>Quickly throw together greybox wireframes. Use in conjunction with other inuit.css objects to create simple greybox prototypes</p>
  <h3>Generic</h3>
  <ul class="nav  nav--fit  nav--block  greybox">
     <li><a href=#>Home</a></li>
     <li><a href=#>About</a></li>
     <li><a href=#>Portfolio</a></li>
     <li><a href=#>Contact</a></li>
  </ul>
  <hr />
  <h3>Greybox Sizes</h3>
  <div class="island  greybox  greybox--small">Small</div>
  <div class="island  greybox  greybox--medium">Medium</div>
  <div class="island  greybox  greybox--large">Large</div>
  <div class="island  greybox  greybox--huge">Header</div>
  <div class="island  greybox  greybox--gigantic">Gigantic</div>
  <hr />
      <h2 class="section-title" id="grids">Grids</h2>
  <p>Fluid and nestable grid system</p>
  <h3>Regular</h3>
  <div class="grid">

      <div class="grid__item one-whole">
          <p class="greybox">1</p>
      </div><!--

   --><div class="grid__item one-half">
          <p class="greybox">2</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox">3</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox">4</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">5</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">6</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">7</p>
      </div>

  </div>
  <h3>Reversed</h3>
  <div class="grid grid--rev">

      <div class="grid__item one-whole">
          <p class="greybox">1</p>
      </div><!--

   --><div class="grid__item one-half">
          <p class="greybox">2</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox">3</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox">4</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">5</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">6</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">7</p>
      </div>

  </div>
  <h3>Full</h3>
  <div class="grid grid--full">

      <div class="grid__item one-whole">
          <p class="greybox grid-demo">1</p>
      </div><!--

   --><div class="grid__item one-half">
          <p class="greybox grid-demo">2</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox grid-demo">3</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox grid-demo">4</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox grid-demo">5</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox grid-demo">6</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox grid-demo">7</p>
      </div>

  </div>
  <h3>Center</h3>
  <div class="grid grid--center">

      <div class="grid__item one-whole">
          <p class="greybox">1</p>
      </div><!--

   --><div class="grid__item one-half">
          <p class="greybox">2</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox">3</p>
      </div><!--

   --><div class="grid__item one-quarter">
          <p class="greybox">4</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">5</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">6</p>
      </div><!--

   --><div class="grid__item one-third">
          <p class="greybox">7</p>
      </div>

  </div>
      <h2 class="section-title" id="images">Images</h2>
  <p>Non-fluid images if you specify `width` and/or `height` attributes.</p>
  <img src="http://placekitten.com/300/200" alt="" width="300" height="200" />
  <h3>Round Images</h3>
  <img src="http://placekitten.com/300/200" alt="" class="img--short  img--round">
  <h3>Image placement variations</h3>
  <p>`.img--right`, `.img--left` and `.img--center`</p>
  <img src="http://placekitten.com/300/200" alt="" class="img--right  img--short">
  <img src="http://placekitten.com/300/200" alt="" class="img--left  img--medium">
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
  <img src="http://placekitten.com/300/200" alt="" class="img--center  img--medium">
      <h2 class="section-title" id="island">Island</h2>
  <p>Simple, boxed off content</p>
  <h3>Island</h3>
  <div class="island greybox">
    I am boxed off.
  </div>
  <hr />
  <h3>Islet</h3>
  <p>Just like `.island`, only smaller</p>
  <div class="islet greybox">
    I am boxed off.
  </div>
  <hr />
      <h2 class="section-title" id="link-complex">Link Complex</h2>
  <p>Add hover behaviour to only selected items within links</p>
  <a href=log-in class="link-complex">
      <strong class="link-complex__target">Log in</strong> to your account.
  </a>
  <hr />
      <h2 class="section-title" id="lozenges">Lozenges</h2>
  <p>Create pill- and lozenge-like runs of text. Pills have fully rounded ends. lozenges have only their corners rounded</p>
  <p>This <span class="pill">here</span> is a pill!</p>
  <p>This <span class="loz">here</span> is also a lozenge!</p>
  <hr />
      <h2 class="section-title" id="marginalia">Marginalia</h2>
  <p>Marginalia are, per definition, notes in the margin of a document. The `marginalia__body` class can be applied to all kinds of content, like text or images, and is joined by a width class</p>

  <div class="marginalia">
      <p class="marginalia__body--right  desk-one-fifth">This is some marginalia content.</p>
  </div>

  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit</p>
  <hr />
      <h2 class="section-title" id="matrix">Matrix</h2>
  <p>Create a grid of items out of a single list</p>
  <ul class="matrix  three-cols">
         <li class="all-cols">Lorem</li>
         <li>Ipsum <a href=#>dolor</a></li>
         <li><a href=# class="matrix__link">Sit</a></li>
         <li>Amet</li>
         <li class="all-cols">Consectetuer</li>
     </ul>
  <hr />
      <h2 class="section-title" id="media">Media</h2>
  <p>Place any image- and text-like content side-by-side</p>
  <h3>Regular</h3>
  <div class="media">
      <img src=http://placekitten.com/96/96 alt="" class="media__img">
      <p class="media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <hr />
  <h3>Reversed</h2>
  <div class="media">
      <img src=http://placekitten.com/96/96 alt="" class="media__img--rev">
      <p class="media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <hr />
      <h2 class="section-title" id="nav">Nav</h2>
  <p>Nav abstraction as per: csswizardry.com/2011/09/the-nav-abstraction When used on an `ol` or `ul`, this class throws the list into horizontal mode</p>
  <h3>Default</h3>
  <ul class="nav">
     <li><a href=#>Home</a></li>
     <li><a href=#>About</a></li>
     <li><a href=#>Portfolio</a></li>
     <li><a href=#>Contact</a></li>
  </ul>
  <hr />
  <h3>Stacked</h3>
  <p>`.nav--stacked` extends `.nav` and throws the list into vertical mode</p>
  <ul class="nav  nav--stacked">
     <li><a href=#>Home</a></li>
     <li><a href=#>About</a></li>
     <li><a href=#>Portfolio</a></li>
     <li><a href=#>Contact</a></li>
  </ul>
  <hr />
  <h3>Banner</h3>
  <p>`.nav--banner` extends `.nav` and centres the list</p>
  <ul class="nav  nav--banner">
     <li><a href=#>Home</a></li>
     <li><a href=#>About</a></li>
     <li><a href=#>Portfolio</a></li>
     <li><a href=#>Contact</a></li>
  </ul>
  <hr />
  <h3>Block</h3>
  <p>Give nav links a big, blocky hit area. Extends `.nav`</p>
  <ul class="nav  nav--block">
     <li><a href=# class="greybox">Home</a></li>
     <li><a href=# class="greybox">About</a></li>
     <li><a href=# class="greybox">Portfolio</a></li>
     <li><a href=# class="greybox">Contact</a></li>
  </ul>
  <hr />
  <h3>Fit</h3>
  <p>Force a nav to occupy 100% of the available width of its parent. Extends `.nav`</p>
  <ul class="nav  nav--fit">
     <li><a href=# class="greybox">Home</a></li>
     <li><a href=# class="greybox">About</a></li>
     <li><a href=# class="greybox">Portfolio</a></li>
     <li><a href=# class="greybox">Contact</a></li>
  </ul>
  <hr />
  <h3>Keywords</h3>
  <p>Make a list of keywords. Extends `.nav`</p>
  <ul class="nav  nav--keywords">
     <li><a href=#>Home</a></li>
     <li><a href=#>About</a></li>
     <li><a href=#>Portfolio</a></li>
     <li><a href=#>Contact</a></li>
  </ul>
  <hr />
      <h2 class="section-title" id="options">Options</h2>
  <p>Link-group nav, used for displaying related options. Extends `.nav--block` but could also extend `.nav--fit`. Extend with colours and 'current states' in your theme stylesheet.</p>
  <ul class="nav options">
     <li><a href=#>Save</a></li>
     <li><a href=#>Delete</a></li>
     <li><a href=#>Cancel</a></li>
  </ul>
  <hr />
      <h2 class="section-title" id="pagination">Pagination</h2>
  <p>Basic pagination object, extends `.nav`. Requires some funky commenting to collapse any white-space caused by the `display:inline-block;` rules.</p>
  <ol class="nav  pagination">
     <li class="pagination__first">First</li>
     <li class="pagination__prev">Previous</li>
     <li><a href=/page/1>1</a></li>
     <li><a href=/page/2>2</a></li>
     <li class="current"><a href=/page/3>3</a></li>
     <li><a href=/page/4>4</a></li>
     <li><a href=/page/5>5</a></li>
     <li class="pagination__next"><a href=/page/next>Next</a></li>
     <li class="pagination__last"><a href=/page/last>Last</a></li>
  </ol>
  <hr />
      <h2 class="section-title" id="rule">Rule</h2>
  <p>Horizontal rules, extend `hr`.</p>
  <h3>Default</h3>
  <hr />
  <h3>Dotted</h3>
  <hr class="rule rule--dotted" />
  <h3>Dashed</h3>
  <hr class="rule rule--dashed" />
  <h3>Ornamental Rules</h3>
  <p>Ornamental rules. Places a &sect; over the rule.</p>
  <hr class="rule rule--ornament" />
  <p>Pass in an arbitrary ornament though a data attribute</p>
  <hr class="rule  rule--ornament" data-ornament="!" />
      <h2 class="section-title" id="split">Split</h2>
  <p>Simple split item for creating two elements floated away from one another</p>
  <dl class="split">
     <dt class="split__title">Burger and fries</dt>
     <dd>&pound;5.99</dd>
     <dt class="split__title">Fillet steak</dt>
     <dd>&pound;19.99</dd>
     <dt class="split__title">Ice cream</dt>
     <dd>&pound;2.99</dd>
  </dl>
  <ol class="split  results">
     <li class="first"><b class="split__title">1st place</b> Bob</li>
     <li class="second"><b class="split__title">2nd place</b> Lilly</li>
     <li class="third"><b class="split__title">3rd place</b> Ted</li>
  </ol>​
  <hr />
      <h2 class="section-title" id="stats">Stats</h2>
  <p>Simple object to display key-value statistic-like information</p>
  <div class="stat-group">
      <dl class="stat">
          <dt class="stat__title">Tweets</dt>
          <dd class="stat__value">27,740</dd>
      </dl>

      <dl class="stat">
          <dt class="stat__title">Following</dt>
          <dd class="stat__value">11,529</dd>
      </dl>

      <dl class="stat">
          <dt class="stat__title">Followers</dt>
          <dd class="stat__value">12,105</dd>
      </dl>
  </div>
  <hr />
      <h2 class="section-title" id="tables">Tables</h2>
  <p>We have a lot at our disposal for making very complex table construct</p>
  <ul>
    <li>`.table--bordered` - bordered table</li>
    <li>`.table--striped` - striped table</li>
    <li>`.table--data` - make type smaller to read data</li>
  </ul>
  <table class="table--bordered  table--striped  table--data">
   <colgroup>
   <col class="t"10>
   <col class="t"10>
   <col class="t"10>
   <col>
  </colgroup>
  <thead>
   <tr>
     <th colspan=3>Foo</th>
     <th>Bar</th>
   </tr>
   <tr>
     <th>Lorem</th>
     <th>Ipsum</th>
     <th class="numerical">Dolor</th>
     <th>Sit</th>
   </tr>
  </thead>
  <tbody>
   <tr>
     <th rowspan=3>Sit</th>
     <td>Dolor</td>
     <td class="numerical">03.788</td>
     <td>Lorem</td>
   </tr>
   <tr>
     <td>Dolor</td>
     <td class="numerical">32.210</td>
     <td>Lorem</td>
   </tr>
   <tr>
     <td>Dolor</td>
     <td class="numerical">47.797</td>
     <td>Lorem</td>
   </tr>
   <tr>
     <th rowspan=2>Sit</th>
     <td>Dolor</td>
     <td class="numerical">09.640</td>
     <td>Lorem</td>
   </tr>
   <tr>
     <td>Dolor</td>
     <td class="numerical">12.117</td>
     <td>Lorem</td>
   </tr>
  </tbody>
  </table>
  <hr />
      <h2 class="section-title" id="this-or-this">This or This</h2>
  <p>Simple options object to provide multiple choices. The `.this-or-this__this` and `.this-or-this__or` objects can be sized using the grid-system classes</p>
  <h1 class="this-or-this">
     <a href=# class="this-or-this__this  two-fifths">
         Free
     </a>
     <span class="this-or-this__or  one-fifth">
         or
     </span>
     <a href=# class="this-or-this__this  two-fifths">
         Pro
     </a>
  </h1>
  <hr />
      <h2 class="section-title" id="forms">Forms</h2>
  <h3>Text Inputs</h3>
  <p>Instead of a `[type]` selector for each kind of form input, we just use a class to target any/every one<p/>
   <input type="text" class="text-input">
   <input type="email" class="text-input">
   <input type="password" class="text-input">
   <h3>Groups of Form Fields</h3>
   <p>Group sets of form fields in a list with `.form-fields`</p>
   <ul class="form-fields">
     <li>
         <label>test</label>
         <input />
     </li>
     <li>
         <select id="country">
             <option>UK</option>
             <option>US</option>
             <option>Other</option>
         </select>
         <label>test</label>
     </li>
     <li>
         <input />
         <label>test</label>
     </li>
  </ul>
  <h3>Labels</h3>
  <p>Define a `.label` class as well as a `label` element. This means we can apply label-like styling to meta-labels for groups of options where a `label` element is not suitable</p>
  <ul class="form-fields">
     <li>
         <label>test</label>
         <input />
     </li>
     <li>
         <span class="label">Select an option below:</span>
         <ul class="multi-list  four-cols">
             <li>
              <label>test</label>
              <input />
          </li>
          <li>
              <label>test</label>
              <input />
          </li>
          <li>
              <label>test</label>
              <input />
          </li>
          <li>
              <label>test</label>
              <input />
          </li>
      </ul>
  </li>
  </ul>
  <h4>Label - Extra Help</h4>
  <p>Extra help text in `label`s</p>
  <ul class="form-fields">
     <li>
         <label>Card number <small class="additional">No spaces</small></label>
         <input />
     </li>
  </ul>
  <h2 class="section-title">Groups of Checkboxes and Radios</h2>
  <ul class="form-fields">

      <li>
          <span class="label">How would you like to be contacted?</span>

          <ul class="check-list">
              <li>
                  <input type="checkbox" id="by-email"> <label for=by-email>By email</label>
              </li>
              <li>
                  <input type="checkbox" id="by-post"> <label for=by-post>By post</label>
              </li>
              <li>
                  <input type="checkbox" id="by-pigeon"> <label for=by-pigeon>By carrier pigeon</label>
              </li>
          </ul>

      </li>

      <li>
          <span class="label">How often would you like to be contacted?</span>

          <ul class="check-list  multi-list  two-cols">
              <li>
                  <input type="radio" name=frequency id="weekly"/> <label for=weekly>Weekly</label>
              </li>
              <li>
                  <input type="radio" name=frequency id="daily"/> <label for=daily>Daily</label>
              </li>
          </ul>
      </li>
  </ul>
  <h2 class="section-title">Spoken Forms</h2>
  <p>Spoken forms are for forms that read like spoken word</p>
  <ul class="form-fields">
      <li class="spoken-form">
         Hello, my <label for=spoken-name>name</label> is
         <input type="text" class="text-input" id="spoken-name"/>. My home
         <label for=country>country</label> is
         <select id="country">
             <option>UK</option>
             <option>US</option>
             <option>Other</option>
         </select>
     </li>
  </ul>
  <h2 class="section-title">Focus Help</h2>
  <p>Extra help text displayed after a field when that field is in focus. We leave the help text in the document flow and merely set it to `visibility:hidden;`. This means that it won't interfere with anything once it reappears.</p>
      <label for=email>Email:</label>
      <input type="email" class="text-input" id="email">
      <small class="extra-help">.edu emails only</small>
      <hr />
      <h2 class="section-title" id="typography">Typography</h2>
  <h3>Headings</h3>
  <p>When we define a heading we also define a corresponding class to go with it.
  This allows us to apply, say, `class="alpha"` to a `h3`; a double-stranded
  heading hierarchy.</p>
  <ol>
    <li><p class="alpha">h1 - .alpha</p></li>
    <li><p class="beta">h2 - .beta</p></li>
    <li><p class="gamma">h3 - .gamma</p></li>
    <li><p class="delta">h4 - .delta</p></li>
    <li><p class="epsilon">h5 - .epsilon</p></li>
    <li><p class="zeta">h6 - .zeta</p></li>
  </ol>
  <hr />
  <h3>Mastheads</h3>
  <ol>
    <li><p class="giga">.giga</p></li>
    <li><p class="mega">.mega</p></li>
    <li><p class="kilo">.kilo</p></li>
  </ol>
  <hr />
  <h3>Small Print</h4>
  <ol>
    <li><p class="smallprint">.smallprint</p></li>
    <li><p class="milli">.milli</p></li>
    <li><p class="micro">.micro</p></li>
  </ol>
  <hr />
  <h3>Paragraphs</h3>
  <h4>Default</h4>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
  <hr />
  <h4>Introductory Text</h4>
  <p>The `.lede` class is used to make the introductory text (usually a paragraph) of a document slightly larger.</p>
  <p class="lead">Senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
  <h3>Quotes</h3>
  <hr />
  <h4>Inline quotes</h4>
  <p><q>Pellentesque habitant morbi tristique</q> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
  <hr />
  <h4>Blockquotes</h4>
  <blockquote>
         <p>Insanity: doing the same thing over and over again and expecting
         different results.</p>
         <b class="source">Albert Einstein</b>
     </blockquote>
  <hr />
  <h3>Lists</h3>
  <h4>Ordered List</h4>
  <ol>
     <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
     <li>Aliquam tincidunt mauris eu risus.</li>
  </ol>
  <p>Have a numbered `ul` without the semantics implied by using an `ol`.</p>
  <ul class="numbered-list">
     <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
     <li>Aliquam tincidunt mauris eu risus.</li>
  </ul>
  <hr />
  <h4>Unordered List</h4>
  <ul>
     <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
     <li>Aliquam tincidunt mauris eu risus.</li>
  </ul>
  <hr />
  <h3>Code</h3>
  <pre><code>
  #header h1 a {
    display: block;
    width: 300px;
    height: 80px;
  }
  </code></pre>
  <hr />
      <h2 class="section-title" id="helper">Helper</h2>
  <p>A series of helper classes to use arbitrarily. Only use a helper class if an element/component doesn’t already have a class to which you could apply this styling, e.g. if you need to float `.main-nav` left then add `float:left;` to that ruleset as opposed to adding the `.float--left` class to the markup.</p>
  <p>A lot of these classes carry `!important` as you will always want them to win out over other selectors.</p>

  <h3>Add/remove Floats</h3>
  <p class="float--none float-demo greybox">Float none</p>
  <p class="float--right float-demo greybox">Float right</p>
  <p class="float--left float-demo greybox">Float left</p>
  <hr />

  <h3>Text aligment</h3>
  <p class="text--left">Text left</p>
  <p class="text--center">Text center</p>
  <p class="text--right">Text right</p>
  <hr />

  <h3>Font weights</h3>
  <p class="weight--light">Weight light</p>
  <p class="weight--normal">Weight normal</p>
  <p class="weight--semibold">Weight semibold</p>
  <hr />

  <h3>Add/Remove margins</h3>
  <h4>Add Full Margins</h4>
  <p>Adds `$base-spacing-unit` margins</p>
  <ul>
    <li>.push</li>
    <li>.push--top</li>
    <li>.push--right</li>
    <li>.push--bottom</li>
    <li>.push--left</li>
    <li>.push--ends</li>
    <li>.push--sides</li>
  </ul>
  <div class="margins-demo">
    <div class="margins-demo__item push--left">Push Left</div>
  </div>
  <div class="margins-demo">
    <div class="margins-demo__item push--sides">Push Sides</div>
  </div>
  <hr />

  <h4>Add Half Margins</h4>
  <p>Adds `$half-spacing-unit` margins</p>
  <ul>
    <li>.push-half</li>
    <li>.push-half--top</li>
    <li>.push-half--right</li>
    <li>.push-half--bottom</li>
    <li>.push-half--left</li>
    <li>.push-half--ends</li>
    <li>.push-half--sides</li>
  </ul>
  <div class="margins-demo">
    <div class="margins-demo__item push-half--left">Push Half Left</div>
  </div>
  <div class="margins-demo">
    <div class="margins-demo__item push-half--sides">Push Half Sides</div>
  </div>
  <hr />

  <h4>Remove Margins</h4>
  <p>Takes away margins</p>
  <ul>
    <li>.flush</li>
    <li>.flush--top</li>
    <li>.flush--right</li>
    <li>.flush--bottom</li>
    <li>.flush--left</li>
    <li>.flush--ends</li>
    <li>.flush--sides</li>
  </ul>
  <div class="margins-demo">
    <div class="margins-demo__item  margins-demo--full-margin flush--left">Flush Left</div>
  </div>
  <div class="margins-demo">
    <div class="margins-demo__item margins-demo--full-margin flush--sides">Flush Sides</div>
  </div>
  <hr />

  <h3>Add/Remove paddings</h3>
  <h4>Add Full Paddings</h4>
  <p>Adds `$base-spacing-unit` paddings</p>
  <ul>
    <li>.soft</li>
    <li>.soft--top</li>
    <li>.soft--right</li>
    <li>.soft--bottom</li>
    <li>.soft--left</li>
    <li>.soft--ends</li>
    <li>.soft--sides</li>
  </ul>
  <div class="paddings-demo">
    <div class="paddings-demo__item soft--left">Soft Left</div>
  </div>
  <div class="paddings-demo">
    <div class="paddings-demo__item soft--sides">Soft Sides</div>
  </div>
  <hr />

  <h4>Add Half Padding</h4>
  <p>Adds `$half-spacing-unit` padding</p>
  <ul>
    <li>.soft-half</li>
    <li>.soft-half--top</li>
    <li>.soft-half--right</li>
    <li>.soft-half--bottom</li>
    <li>.soft-half--left</li>
    <li>.soft-half--ends</li>
    <li>.soft-half--sides</li>
  </ul>
  <div class="paddings-demo">
    <div class="paddings-demo__item soft-half--left">Soft Half Left</div>
  </div>
  <div class="paddings-demo">
    <div class="paddings-demo__item soft-half--sides">Soft Half Sides</div>
  </div>
  <hr />

  <h4>Remove Padding</h4>
  <p>Takes away padding</p>
  <ul>
    <li>.hard</li>
    <li>.hard--top</li>
    <li>.hard--right</li>
    <li>.hard--bottom</li>
    <li>.hard--left</li>
    <li>.hard--ends</li>
    <li>.hard--sides</li>
  </ul>
  <div class="paddings-demo">
    <div class="paddings-demo__item  paddings-demo--full-padding hard--left">Hard Left</div>
  </div>
  <div class="paddings-demo">
    <div class="paddings-demo__item paddings-demo--full-padding hard--sides">Hard Sides</div>
  </div>
  <hr />

  <h3>Full bleed</h3>
  <div class="island greybox">
    <p class="full-bleed bleed-demo">Pull items full width of `.island` parents.<p>
  </div>
  <div class="islet greybox">
    <p class="full-bleed bleed-demo">Pull items full width of `.islet` parents.<p>
  </div>
  <hr />

  <h3>Informative</h3>
  <p>Add a help cursor to any element that gives the user extra information on `:hover`.</p>
  <a class="btn btn-demo informative">Help?</a> (Hover me)
  <hr />

  <h3>Muted</h3>
  <p>Mute an object by reducing its opacity.</p>
  <a class="btn btn--positive">Without `.muted`</a>
  <a class="btn btn--positive muted">With `.muted`</a>
  <hr />

  <h3>Go</h3>
  <p>Add a right-angled quote to links that imply movement</p>
  <a href="#" class="go">Read more</a>
  <hr />

  <h3>Caps</h3>
  <p>Apply capital case to an element (usually a `strong`).</p>
  <p class="caps">CAPITALIZE</p>
  <hr />

  <h3>Accessibility</h3>
  <p>Hide content off-screen without resorting to `display:none;`, also provide breakpoint specific hidden elements. Classes include:</p>
  <ul>
    <li>.accessibility</li>
    <li>.visuallyhidden</li>
    <li>.accessibility--palm</li>
    <li>.visuallyhidden--palm</li>
    <li>.accessibility--lap</li>
    <li>.visuallyhidden--lap</li>
    <li>.accessibility--lap-and-up</li>
    <li>.visuallyhidden--lap-and-up</li>
    <li>.accessibility--portable</li>
    <li>.visuallyhidden--portable</li>
    <li>.accessibility--desk</li>
    <li>.visuallyhidden--desk</li>
    <li>.accessibility--desk-wide</li>
    <li>.visuallyhidden--desk-wide</li>
  </ul>
      <h2 class="section-title" id="mixins">Mixins</h2>

  <h3>Typography</h3>
  <h4>Font Size</h4>
  <p>Create a fully formed type style (sizing and vertical rhythm) by passing in a single value.</p>
  <pre><code class="lang-css">@include font-size(10px);
  @include font-size(10px, $line-height: false);</code></pre>
  <h3>Headings</h3>
  <p>Style any number of headings in one fell swoop</p>
  <pre><code>@include headings(1, 3){
      color:#BADA55;
  }</code></pre>
  <hr />

  <h3>CSS3</h3>
  <h4>Vendor</h4>
  <p>Create vendor-prefixed CSS in one go</p>
  <pre><code>@include vendor(border-radius, 4px);</code></pre>
  <h4>Keyframes</h4>
  <p>Create CSS keyframe animations for all vendors in one go</p>
  <pre><code>.foo{
      @include vendor(animation, shrink 3s);
  }

  @include keyframe(shrink){
      from{
          font-size:5em;
      }
  }</code></pre>
  <h4>Truncate</h4>
  <p>Force overly long spans of text to truncate</p>
  <pre><code>@include truncate(100%);</code></pre>
  <h4>Retina</h4>
  <p>Media query for targetting retina devices</p>
  <pre><code>.foo{
      background-image:url(1x.png);
      @include retina(){
          background-image:url(2x.png);
      }
  }</code></pre>
  <h3>CSS Arrows</h3>
  <p>This mixin creates a CSS arrow on a given element. We can have the arrow
  appear in one of 12 locations, thus:</p>
  <pre><code>      01    02    03
     +------------------+
  12 |                  | 04
     |                  |
  11 |                  | 05
     |                  |
  10 |                  | 06
     +------------------+
        09    08    07</code></pre>
  <p>You pass this position in along with a desired arrow color and optional
  border color, for example:</p>
  <p><code>@include arrow(top, left, red)</code></p>
  <p>for just a single, red arrow, or:</p>
  <p><code>@include arrow(bottom, center, red, black)</code></p>
  <p>which will create a red triangle with a black border which sits at the bottom
  center of the element. Call the mixin thus:</p>
  <pre><code>.foo{
     background-color:#BADA55;
     border:1px solid #ACE;
     @include arrow(top, left, #BADA55, #ACE);
  }</code></pre>
  <h4>Media Query Mixin</h4>
  <p>It’s not great practice to define solid breakpoints up-front, preferring to
  modify your design when it needs it, rather than assuming you’ll want a
  change at ‘mobile’. However, as inuit.css is required to take a hands off
  approach to design decisions, this is the closest we can get to baked-in
  responsiveness. It’s flexible enough to allow you to set your own breakpoints
  but solid enough to be frameworkified.</p>
  <p>We define some broad breakpoints in our vars file that are picked up here
  for use in a simple media query mixin. Our options are:</p>
  <ul>
  <li>palm</li>
  <li>lap</li>
  <li>lap-and-up</li>
  <li>portable</li>
  <li>desk</li>
  <li>desk-wide</li>
  </ul>
  <p>Not using a media query will, naturally, serve styles to all devices.</p>
  <p><code>@include media-query(palm){ [styles here] }</code></p>

<?php endwhile; ?>