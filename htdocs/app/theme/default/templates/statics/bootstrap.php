<?php $this->display( 'header' );  ?>

<style type="text/css">
.page-header{padding-top: 60px;}
.tempnav{position: fixed; top:0; left: 0; width: 100%;  background: #000}
.tempnav a{float: left; display: block; padding: 10px; color: #fff;}
.tempnav a:first-child{padding-left: 0;}
.tempnav .twit{color: #ccc; float: right;}
</style>

<div class="tempnav">
	<div class="container">

	    <a href="#media">Media</a>
	    <a href="#tables">Tables</a>
	    <a href="#forms">Forms</a>
	    <a href="#alerts">Alerts</a>
	    <a href="http://twitter.github.com/bootstrap" target="_blank" class="twit">twitter.github.com/bootstrap &raquo;</a>
	</div>
</div>

<div class="container">

	
	<!-- Media
	================================================== -->
	<section id="media">
	  <div class="page-header">
	    <h1>Media <small>Displaying images and videos</small></h1>
	  </div>
	
	  <!-- Table structure -->
	  <div class="row">
	    <div class="span4">
	      <h2>Media grid</h2>
	      <p>Display thumbnails of varying sizes on pages with a low HTML footprint and minimal styles.</p>
	    </div>
	    <div class="span12">
	      <h3>Example thumbnails</h3>
	
	      <p>Thumbnails in the <code>.media-grid</code> can be any size, but they work best when mapped directly to the built-in Bootstrap grid system. Image widths like 90, 210, and 330 combine with a few pixels of padding to equal the <code>.span2</code>, <code>.span4</code>, and <code>.span6</code> column sizes.</p>
	      <h4>Large</h4>
	      <ul class="media-grid">
	
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/330x230" alt="">
	          </a>
	        </li>
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/330x230" alt="">
	          </a>
	
	        </li>
	      </ul>
	      <h4>Medium</h4>
	      <ul class="media-grid">
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/210x150" alt="">
	          </a>
	
	        </li>
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/210x150" alt="">
	          </a>
	        </li>
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/210x150" alt="">
	
	          </a>
	        </li>
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/210x150" alt="">
	          </a>
	        </li>
	        <li>
	          <a href="#">
	
	            <img class="thumbnail" src="http://placehold.it/210x150" alt="">
	          </a>
	        </li>
	      </ul>
	      <h4>Small</h4>
	      <ul class="media-grid">
	        <li>
	          <a href="#">
	
	            <img class="thumbnail" src="http://placehold.it/90x90" alt="">
	          </a>
	        </li>
	        <li>
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/90x90" alt="">
	          </a>
	        </li>
	        <li>
	
	          <a href="#">
	            <img class="thumbnail" src="http://placehold.it/90x90" alt="">
	          </a>
	        </li>
	      </ul>
	      <h4>Coding them</h4>
	      <p>Media grids are easy to use and rather simple on the markup side. Their dimensions are purely based on the size of the images included.</p>
	<pre class="prettyprint linenums">
	
	&lt;ul class="media-grid"&gt;
	  &lt;li&gt;
	    &lt;a href="#"&gt;
	      &lt;img class="thumbnail" src="http://placehold.it/330x230" alt=""&gt;
	    &lt;/a&gt;
	  &lt;/li&gt;
	
	  &lt;li&gt;
	    &lt;a href="#"&gt;
	      &lt;img class="thumbnail" src="http://placehold.it/330x230" alt=""&gt;
	    &lt;/a&gt;
	  &lt;/li&gt;
	&lt;/ul&gt;
	
	</pre>
	    </div>
	  </div><!-- /row -->
	</section>
	
	
	
	<!-- Tables
	================================================== -->
	<section id="tables">
	  <div class="page-header">
	    <h1>Tables <small>For, you guessed it, tabular data</small></h1>
	
	  </div>
	  <!-- Table structure -->
	  <div class="row">
	    <div class="span4">
	      <h2>Building tables</h2>
	      <p>
	        <code>&lt;table&gt;</code>
	        <code>&lt;thead&gt;</code>
	
	        <code>&lt;tbody&gt;</code>
	        <code>&lt;tr&gt;</code>
	        <code>&lt;th&gt;</code>
	        <code>&lt;td&gt;</code>
	        <code>&lt;colspan&gt;</code>
	        <code>&lt;caption&gt;</code>
	
	      </p>
	      <p>Tables are great&mdash;for a lot of things. Great tables, however, need a bit of markup love to be useful, scalable, and readable (at the code level). Here are a few tips to help.</p>
	      <p>Always wrap your column headers in a <code>&lt;thead&gt;</code> such that hierarchy is <code>&lt;thead&gt;</code> > <code>&lt;tr&gt;</code> > <code>&lt;th&gt;</code>.</p>
	
	      <p>Similar to the column headers, all your table&rsquo;s body content should be wrapped in a <code>&lt;tbody&gt;</code> so your hierarchy is <code>&lt;tbody&gt;</code> > <code>&lt;tr&gt;</code> > <code>&lt;td&gt;</code>.</p>
	    </div>
	    <div class="span12">
	
	      <h3>Example: Default table styles</h3>
	      <p>All tables will be automatically styled with only the essential borders to ensure readability and maintain structure. No need to add extra classes or attributes.</p>
	      <table>
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>First Name</th>
	
	            <th>Last Name</th>
	            <th>Language</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>1</td>
	
	            <td>Some</td>
	            <td>One</td>
	            <td>English</td>
	          </tr>
	          <tr>
	            <td>2</td>
	            <td>Joe</td>
	
	            <td>Sixpack</td>
	            <td>English</td>
	          </tr>
	          <tr>
	            <td>3</td>
	            <td>Stu</td>
	            <td>Dent</td>
	
	            <td>Code</td>
	          </tr>
	        </tbody>
	      </table>
	<pre class="prettyprint linenums">
	&lt;table&gt;
	  ...
	&lt;/table&gt;</pre>
	      <h3>Example: Zebra-striped</h3>
	
	      <p>Get a little fancy with your tables by adding zebra-striping&mdash;just add the <code>.zebra-striped</code> class.</p>
	      <table class="zebra-striped">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>First Name</th>
	
	            <th>Last Name</th>
	            <th>Language</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>1</td>
	
	            <td>Some</td>
	            <td>One</td>
	            <td>English</td>
	          </tr>
	          <tr>
	            <td>2</td>
	            <td>Joe</td>
	
	            <td>Sixpack</td>
	            <td>English</td>
	          </tr>
	          <tr>
	            <td>3</td>
	            <td>Stu</td>
	            <td>Dent</td>
	
	            <td>Code</td>
	          </tr>
	        </tbody>
	      </table>
	      <p><strong>Note:</strong> Zebra-striping is a progressive enhancement not available for older browsers like IE8 and below.</p>
	<pre class="prettyprint linenums">
	&lt;table class="zebra-striped"&gt;
	
	...
	&lt;/table&gt;</pre>
	      <h3>Example: Zebra-striped w/ TableSorter.js</h3>
	      <p>Taking the previous example, we improve the usefulness of our tables by providing sorting functionality via <a href="http://jquery.com">jQuery</a> and the <a href="http://tablesorter.com/docs/">Tablesorter</a> plugin. <strong>Click any column&rsquo;s header to change the sort.</strong></p>
	      <table class="zebra-striped" id="sortTableExample">
	
	        <thead>
	          <tr>
	            <th>#</th>
	            <th class="yellow">First Name</th>
	            <th class="blue">Last Name</th>
	            <th class="green">Language</th>
	          </tr>
	
	        </thead>
	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Your</td>
	            <td>One</td>
	            <td>English</td>
	
	          </tr>
	          <tr>
	            <td>2</td>
	            <td>Joe</td>
	            <td>Sixpack</td>
	            <td>English</td>
	          </tr>
	
	          <tr>
	            <td>3</td>
	            <td>Stu</td>
	            <td>Dent</td>
	            <td>Code</td>
	          </tr>
	        </tbody>
	
	      </table>
	<pre class="prettyprint linenums">
	&lt;script src="js/jquery/jquery.tablesorter.min.js"&gt;&lt;/script&gt;
	&lt;script &gt;
	  $(function() {
	    $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
	  });
	&lt;/script&gt;
	&lt;table class="zebra-striped"&gt;
	  ...
	&lt;/table&gt;</pre>
	
	    </div>
	  </div><!-- /row -->
	</section>
	
	
	
	<!-- Forms
	================================================== -->
	<section id="forms">
	  <div class="page-header">
	    <h1>Forms</h1>
	  </div>
	
	  <div class="row">
	    <div class="span4">
	      <h2>Default styles</h2>
	      <p>All forms are given default styles to present them in a readable and scalable way. Styles are provided for text inputs, select lists, textareas, radio buttons and checkboxes, and buttons.</p>
	    </div>
	    <div class="span12">
	      <form>
	        <fieldset>
	
	          <legend>Example form legend</legend>
	          <div class="clearfix">
	            <label for="xlInput">X-Large input</label>
	            <div class="input">
	              <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text" />
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	
	            <label for="normalSelect">Select</label>
	            <div class="input">
	              <select name="normalSelect" id="normalSelect">
	                <option>1</option>
	                <option>2</option>
	                <option>3</option>
	                <option>4</option>
	
	                <option>5</option>
	              </select>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="mediumSelect">Select</label>
	            <div class="input">
	              <select class="medium" name="mediumSelect" id="mediumSelect">
	
	                <option>1</option>
	                <option>2</option>
	                <option>3</option>
	                <option>4</option>
	                <option>5</option>
	              </select>
	
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="multiSelect">Multiple select</label>
	            <div class="input">
	              <select class="medium" multiple="multiple" name="multiSelect" id="multiSelect">
	                <option>1</option>
	                <option>2</option>
	
	                <option>3</option>
	                <option>4</option>
	                <option>5</option>
	              </select>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	
	            <label>Uneditable input</label>
	            <div class="input">
	              <span class="uneditable-input">Some value here</span>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="disabledInput">Disabled input</label>
	
	            <div class="input">
	              <input class="xlarge disabled" id="disabledInput" name="disabledInput" size="30" type="text" placeholder="Disabled input here... carry on." disabled />
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="disabledInput">Disabled textarea</label>
	            <div class="input">
	              <textarea class="xxlarge" name="textarea" id="textarea" rows="3" disabled></textarea>
	
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix error">
	            <label for="xlInput2">X-Large input</label>
	            <div class="input">
	              <input class="xlarge error" id="xlInput2" name="xlInput2" size="30" type="text" />
	              <span class="help-inline">Small snippet of help text</span>
	            </div>
	
	          </div><!-- /clearfix -->
	        </fieldset>
	        <fieldset>
	          <legend>Example form legend</legend>
	          <div class="clearfix">
	            <label for="prependedInput">Prepended text</label>
	            <div class="input">
	              <div class="input-prepend">
	
	                <span class="add-on">@</span>
	                <input class="medium" id="prependedInput" name="prependedInput" size="16" type="text" />
	              </div>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="prependedInput2">Prepended checkbox</label>
	            <div class="input">
	
	              <div class="input-prepend">
	                <label class="add-on"><input type="checkbox" name="" id="" value="" /></label>
	                <input class="mini" id="prependedInput2" name="prependedInput2" size="16" type="text" />
	              </div>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="appendedInput">Appended checkbox</label>
	
	            <div class="input">
	              <div class="input-append">
	                <input class="mini" id="appendedInput" name="appendedInput" size="16" type="text" />
	                <label class="add-on active"><input type="checkbox" name="" id="" value="" checked="checked" /></label>
	              </div>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="fileInput">File input</label>
	
	            <div class="input">
	              <input class="input-file" id="fileInput" name="fileInput" type="file" />
	            </div>
	          </div><!-- /clearfix -->
	        </fieldset>
	        <fieldset>
	          <legend>Example form legend</legend>
	          <div class="clearfix">
	
	            <label id="optionsCheckboxes">List of options</label>
	            <div class="input">
	              <ul class="inputs-list">
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option1" />
	                    <span>Option one is this and that&mdash;be sure to include why it&rsquo;s great</span>
	
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
	                    <span>Option two can also be checked and included in form results</span>
	                  </label>
	                </li>
	
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
	                    <span>Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</span>
	                  </label>
	                </li>
	                <li>
	
	                  <label class="disabled">
	                    <input type="checkbox" name="optionsCheckboxes" value="option2" disabled />
	                    <span>Option four cannot be checked as it is disabled.</span>
	                  </label>
	                </li>
	              </ul>
	              <span class="help-block">
	                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
	              </span>
	
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label>Date range</label>
	            <div class="input">
	              <div class="inline-inputs">
	                <input class="small" type="text" value="May 1, 2011" />
	                <input class="mini" type="text" value="12:00am" />
	
	                to
	                <input class="small" type="text" value="May 8, 2011" />
	                <input class="mini" type="text" value="11:59pm" />
	                <span class="help-inline">All times are shown as Pacific Standard Time (GMT -08:00).</span>
	              </div>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="textarea">Textarea</label>
	
	            <div class="input">
	              <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
	              <span class="help-block">
	                Block of help text to describe the field above if need be.
	              </span>
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label id="optionsRadio">List of options</label>
	
	            <div class="input">
	              <ul class="inputs-list">
	                <li>
	                  <label>
	                    <input type="radio" checked name="optionsRadios" value="option1" />
	                    <span>Option one is this and that&mdash;be sure to include why it&rsquo;s great</span>
	                  </label>
	                </li>
	
	                <li>
	                  <label>
	                    <input type="radio" name="optionsRadios" value="option2" />
	                    <span>Option two can is something else and selecting it will deselect options 1</span>
	                  </label>
	                </li>
	              </ul>
	            </div>
	
	          </div><!-- /clearfix -->
	          <div class="actions">
	            <input type="submit" class="btn primary" value="Save changes">&nbsp;<button type="reset" class="btn">Cancel</button>
	          </div>
	        </fieldset>
	      </form>
	    </div>
	  </div><!-- /row -->
	
	  <br />
	
	  <div class="row">
	    <div class="span4">
	      <h2>Stacked forms</h2>
	      <p>Add <code>.form-stacked</code> to your form&rsquo;s HTML and you&rsquo;ll have labels on top of their fields instead of to their left. This works great if your forms are short or you have two columns of inputs for heavier forms.</p>
	
	    </div>
	    <div class="span12">
	      <form action="" class="form-stacked">
	        <fieldset>
	          <legend>Example form legend</legend>
	          <div class="clearfix">
	            <label for="xlInput3">X-Large input</label>
	            <div class="input">
	
	              <input class="xlarge" id="xlInput3" name="xlInput3" size="30" type="text" />
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label for="stackedSelect">Select</label>
	            <div class="input">
	              <select name="stackedSelect" id="stackedSelect">
	                <option>1</option>
	
	                <option>2</option>
	                <option>3</option>
	                <option>4</option>
	                <option>5</option>
	              </select>
	            </div>
	          </div><!-- /clearfix -->
	
	        </fieldset>
	        <fieldset>
	          <legend>Example form legend</legend>
	          <div class="clearfix error">
	            <label for="xlInput4">X-Large input</label>
	            <div class="input">
	              <input class="xlarge error" id="xlInput4" name="xlInput4" size="30" type="text" />
	              <span class="help-inline">Small snippet of help text</span>
	
	            </div>
	          </div><!-- /clearfix -->
	          <div class="clearfix">
	            <label id="optionsCheckboxes">List of options</label>
	            <div class="input">
	              <ul class="inputs-list">
	                <li>
	                  <label>
	
	                    <input type="checkbox" name="optionsCheckboxes" value="option1" />
	                    <span>Option one is this and that&mdash;be sure to include why it&rsquo;s great</span>
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
	                    <span>Option two can also be checked and included in form results</span>
	
	                  </label>
	                </li>
	              </ul>
	              <span class="help-block">
	                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
	              </span>
	            </div>
	          </div><!-- /clearfix -->
	
	        </fieldset>
	        <div class="actions">
	          <button type="submit" class="btn primary">Save changes</button>&nbsp;<button type="reset" class="btn">Cancel</button>
	        </div>
	      </form>
	    </div>
	  </div><!-- /row -->
	
	  <div class="row">
	    <div class="span4">
	      <h2>Form field sizes</h2>
	      <p>Customize any form <code>input</code>, <code>select</code>, or <code>textarea</code> width by adding just a few classes to your markup.</p>
	
	      <p>As of v1.3.0, we have added the grid-based sizing classes for form elements. <strong>Please use the these over the existing <code>.mini</code>, <code>.small</code>, etc classes.</strong></p>
	    </div>
	    <div class="span12">
	      <form action="">
	        <div class="clearfix"><input class="span2" id="" name="" type="text" placeholder=".span2" /></div>
	        <div class="clearfix"><input class="span3" id="" name="" type="text" placeholder=".span3" /></div>
	
	        <div class="clearfix"><input class="span4" id="" name="" type="text" placeholder=".span4" /></div>
	        <div class="clearfix"><input class="span5" id="" name="" type="text" placeholder=".span5" /></div>
	        <div class="clearfix"><input class="span6" id="" name="" type="text" placeholder=".span6" /></div>
	        <div class="clearfix"><input class="span7" id="" name="" type="text" placeholder=".span7" /></div>
	        <div class="clearfix"><input class="span8" id="" name="" type="text" placeholder=".span8" /></div>
	        <div class="clearfix"><input class="span9" id="" name="" type="text" placeholder=".span9" /></div>
	        <div class="clearfix"><input class="span10" id="" name="" type="text" placeholder=".span10" /></div>
	        <div class="clearfix"><input class="span11" id="" name="" type="text" placeholder=".span11" /></div>
	        <div class="clearfix"><input class="span12" id="" name="" type="text" placeholder=".span12" /></div>
	
	      </form>
	    </div>
	  </div>
	
	  <div class="row">
	    <div class="span4">
	      <h2>Buttons</h2>
	      <p>As a convention, buttons are used for actions while links are used for objects. For instance, "Download" could be a button and "recent activity" could be a link.</p>
	
	      <p>All buttons default to a light gray style, but a number of functional classes can be applied for different color styles. These classes include a blue <code>.primary</code> class, a light-blue <code>.info</code> class, a green <code>.success</code> class, and a red <code>.danger</code> class.</p>
	    </div>
	
	    <div class="span12">
	      <h3>Example buttons</h3>
	      <p>Button styles can be applied to anything with the <code>.btn</code> applied. Typically you&rsquo;ll want to apply these to only <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, and select <code>&lt;input&gt;</code> elements. Here&rsquo;s how it looks:</p>
	
	      <div class="well" style="padding: 14px 19px;">
	        <button class="btn primary">Primary</button>&nbsp;<button class="btn">Default</button>&nbsp;<button class="btn info">Info</button>&nbsp;<button class="btn success">Success</button>&nbsp;<button class="btn danger">Danger</button>
	      </div>
	      <h3>Alternate sizes</h3>
	      <p>Fancy larger or smaller buttons? Have at it!</p>
	
	      <div class="well">
	        <a href="#" class="btn large primary">Primary action</a>
	        <a href="#" class="btn large">Action</a>
	      </div>
	      <div class="well" style="padding: 16px 19px;">
	        <a href="#" class="btn small primary">Primary action</a>
	        <a href="#" class="btn small">Action</a>
	
	      </div>
	      <h3>Disabled state</h3>
	      <p>For buttons that are not active or are disabled by the app for one reason or another, use the disabled state. That&rsquo;s <code>.disabled</code> for links and <code>:disabled</code> for <code>&lt;button&gt;</code> elements.</p>
	
	      <h4>Links</h4>
	      <div class="well">
	        <a href="#" class="btn large primary disabled">Primary action</a>
	        <a href="#" class="btn large disabled">Action</a>
	      </div>
	      <h4>Buttons</h4>
	      <div class="well">
	
	        <button class="btn large primary disabled" disabled="disabled">Primary action</button>&nbsp;<button class="btn large" disabled>Action</button>
	      </div>
	    </div>
	  </div><!-- /row -->
	</section>
	
	
	
	<!-- Alerts & Messages
	================================================== -->
	<section id="alerts">
	  <div class="page-header">
	    <h1>Alerts &amp; Errors <small>Styles for success, warning, and error messages or alerts</small></h1>
	
	  </div>
	  <!-- Basic alert messages -->
	  <div class="row">
	    <div class="span4">
	      <h2>Basic alerts</h2>
	      <p><code>.alert-message</code></p>
	      <p>One-line messages for highlighting the failure, possible failure, or success of an action. Particularly useful for forms.</p>
	
	      <p><a class="btn js-btn" href="./javascript.html#alerts">Get the javascript &raquo;</a></p>
	    </div>
	    <div class="span12">
	      <div class="alert-message warning">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Holy guacamole!</strong> Best check yo self, you&rsquo;re not looking too good.</p>
	      </div>
	
	      <div class="alert-message error">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Oh snap!</strong> Change this and that and try again.</p>
	      </div>
	      <div class="alert-message success">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Well done!</strong> You successfully read this alert message.</p>
	
	      </div>
	      <div class="alert-message info">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Heads up!</strong> This is an alert that needs your attention, but it&rsquo;s not a huge priority just yet.</p>
	      </div>
	
	      <h4>Example code</h4>
	
	<pre class="prettyprint linenums">
	&lt;div class="alert-message warning"&gt;
	  &lt;a class="close" href="#"&gt;&times;&lt;/a&gt;
	  &lt;p&gt;&lt;strong&gt;Holy guacamole!&lt;/strong&gt; Best check yo self, you&rsquo;re not looking too good.&lt;/p&gt;
	&lt;/div&gt;
	
	</pre>
	    </div>
	  </div><!-- /row -->
	  <!-- Block messages -->
	  <div class="row">
	    <div class="span4">
	      <h2>Block messages</h2>
	      <p><code>.alert-message.block-message</code></p>
	
	      <p>For messages that require a bit of explanation, we have paragraph style alerts. These are perfect for bubbling up longer error messages, warning a user of a pending action, or just presenting information for more emphasis on the page.</p>
	      <p><a class="btn js-btn" href="./javascript.html#alerts">Get the javascript &raquo;</a></p>
	    </div>
	    <div class="span12">
	      <div class="alert-message block-message warning">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Holy guacamole! This is a warning!</strong> Best check yo self, you&rsquo;re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	
	        <div class="alert-actions">
	          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
	        </div>
	      </div>
	      <div class="alert-message block-message error">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Oh snap! You got an error!</strong> Change this and that and try again.</p>
	
	        <ul>
	          <li>Duis mollis est non commodo luctus</li>
	          <li>Nisi erat porttitor ligula</li>
	          <li>Eget lacinia odio sem nec elit</li>
	        </ul>
	        <div class="alert-actions">
	          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
	
	        </div>
	      </div>
	      <div class="alert-message block-message success">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Well done!</strong> You successfully read this alert message. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum.</p>
	        <div class="alert-actions">
	          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
	
	        </div>
	      </div>
	      <div class="alert-message block-message info">
	        <a class="close" href="#">&times;</a>
	        <p><strong>Heads up!</strong> This is an alert that needs your attention, but it&rsquo;s not a huge priority just yet.</p>
	        <div class="alert-actions">
	          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
	
	        </div>
	      </div>
	
	      <h4>Example code</h4>
	<pre class="prettyprint linenums">
	&lt;div class="alert-message block-message warning"&gt;
	  &lt;a class="close" href="#"&gt;&times;&lt;/a&gt;
	  &lt;p&gt;&lt;strong&gt;Holy guacamole! This is a warning!&lt;/strong&gt; Best check yo self, you&rsquo;re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.&lt;/p&gt;
	
	  &lt;div class="alert-actions"&gt;
	    &lt;a class="btn small" href="#"&gt;Take this action&lt;/a&gt; &lt;a class="btn small" href="#"&gt;Or do this&lt;/a>
	  &lt;/div&gt;
	&lt;/div&gt;
	</pre>
	    </div>
	
	  </div><!-- /row -->
	</section>
	
		



</div><!-- /container -->


<?php $this->display( 'footer' );  ?>
