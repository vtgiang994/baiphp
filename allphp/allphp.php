<!DOCTYPE html>
<html>
<head>
	<title>My Firt Web Page</title>
	<style>
		h1 {color: blue;}
		/*h1, p {color: red;}*/
		#warning {color: red;}
		.warning {color: yellow;}
		p::first-letter/*after /*before*//*first-line*//*selection*/ {font-size: 50px; color: green;}
	</style>	
</head>
<body>
	<h1>This is a heading</h1>
	<br>
	<h1 style="color: red;">Warning!!</h1>
	<h1 class="warning">A level 1 heading</h1>
	<h2 class="warning">A level 2 heading</h2>
	<h3>A level 3 heading</h3>
	<h4>A level 4 heading</h4>
	<h5>A level 5 heading</h5>
	<h6>A level 6 heading</h6>

	<hgroup>
		<h1 id="warning">This is the main heading.</h1>
		<h2>This is the subheading.</h2>
	</hgroup>

	This is text inside webpage
	<p>This is one paragraph of text. The paragraph contains two sentences of content.</p>

	<p>
		This is one line.
		This is another line.
	</p>

	<pre>
		This is one line.
		This is another line.
	</pre>

	<p>The only poem that I learned as a child was:</p>
	<blockquote>Roses are red, violets are blue. A face like yours, belongs in the zoo.</blockquote>
	<p>But that's probably not considered classic poetry.</p>

	<h1>Section 1</h1>
	<p>This is the content of section 1.</p>
	<hr>
	<h1>Section 2</h2>
	<p>This is the content of section 2.</p>

	<p>I <i>wanted</i> the <b>large</b> drink size.</p>

	<p>I wanted the <b><i>large</i></b> drink size.</p>

	<p> i am <cite>Giang</cite></p>
	<p> i am <b>Giang</b></p>
	<p> i am <code>Giang</code></p>
	<p> i am <del>Giang</del></p>
	<p> i am <dfn>Giang</dfn></p>
	<p> i am <em>Giang</em></p>
	<p> i am <i>Giang</i></p>
	<p> i am <ins>Giang</ins></p>
	<p> i am <kbd>Giang</kbd></p>
	<p> i am <mark>Giang</mark></p>
	<p> i am <q>Giang</q></p>
	<p> i am <samp>Giang</samp></p>
	<p> i am <small>Giang</small></p>
	<p> i am <strong>Giang</strong></p>
	<p> i am <sub>Giang</sub></p>
	<p> i am <sup>Giang</sup></p>
	<p> i am <time>Giang</time></p>
	<p> i am <var>Giang</var></p>

	<h1 id="chicago">Chicago News</h1>
	<a href="#chicago">See Chicago News</a>
	<a href="store.html">Shop in our online store.</a>
	<a href="store/index.php">Shop in our online store.</a>

		<ul>
			<li>item1</li>
			<li>item2</li>
			<li>item3</li>
		</ul>

		<ol>
		 	<li>Walk the dog.</li>
		 	<li>Eat breakfast.</li>
		 	<li>Read the paper.</li>
		 	<li>Get ready for work.</li>
		</ol>

		<ol type="I">
			<li>First item</li>
			<ol type="A">
				<li>Item 1, Subitem 1</li>
				<li>Item 1, Subitem 2</li>
			</ol>
			<li>Second item</li>
			<ol type="A">
				<li>Item 2, Subitem 1</li>
				<li>Item 2, Subitem 2</li>
			</ol>
		</ol>

		<dl>
		<dt>Baseball</dt>
		<dd>A game played with bats and balls</dd>
		<dt>Basketball</dt>
		<dd>A game played with balls and baskets</dd>
		<dt>Football</dt>
		<dd>A game played with balls and goals</dd>
		</dl>
</body>
</html>